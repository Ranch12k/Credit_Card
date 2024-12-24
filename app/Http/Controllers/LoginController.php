<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use  App\Models\User;
use Mail;
use App\Mail\SendOTP;
use App\Mail\UserVerificationPage;
use Laravel\Socialite\Facades\Socialite;
use App\Models\GitHubUser;

class LoginController extends Controller
{
    //

        public function RedirectToProvider()
        {
            // $data=Socialite::driver('github')->redirect();
            // dd($data);
            return Socialite::driver('github')->redirect();
        }
        
        // public function handleProviderCallback(Request $request)
        // {
        //     dd($request);
        //     $githubUser = Socialite::driver('github')->user();
        
        //     $user = User::updateOrCreate(
        //         ['github_id' => $githubUser->id], // Find the user by GitHub ID
        //         [
        //             'name' => $githubUser->name ?? $githubUser->nickname,
        //             'email' => $githubUser->email, // Optional if GitHub provides an email
        //             'github_token' => $githubUser->token,
        //             'github_refresh_token' => $githubUser->refreshToken,
        //         ]
        //     );
        
        //     Auth::login($user);
        
        //     // Redirect to dashboard or any other route
        //     return 'ldskf;';
        // }
        public function handleProviderCallback(Request $request)
{
    try {
        // Retrieve the GitHub user using Socialite
        $githubUser = Socialite::driver('github')->user();
        
        // Check if the user is already registered or create a new user
        $user = User::updateOrCreate(
            ['github_id' => $githubUser->getId()],
            [
                'name' => $githubUser->getName(),
                'email' => $githubUser->getEmail(),
                'github_token' => $githubUser->token,
                'github_refresh_token' => $githubUser->refreshToken,
                // Optionally, you can set the 'phone' field or any other required fields
            ]
        );

        // Log the user in
        Auth::login($user);
        

        return redirect()->route('dashboard'); 
    } catch (\Exception $e) {
     
        \Log::error('Error during GitHub callback: ' . $e->getMessage());
        return redirect()->route('login')->withErrors('Error logging in with GitHub');
    }
}



    public function UserDashboard(){

        return view('SuperAdminDashboard.SuperAdminDashboard');
    }

    public function LoginPage()
    {
        return view('UserFolder.login');
    }
    public function VerificationPage()
    {
        return view('UserFolder.VerificationPage');
    }


    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
        if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
            $user = Auth::user();
    
            if ($user->status == 'show') {
                $sess = $request->session()->put('email', $request->email); 
    
                switch ($user->role) {
                    case 'customer':
                        return redirect()->route('User.Dashboard');
                    case 'admin':
                        return redirect()->route('Admin.Dashboard', ['Admin' => 'Admin']);
                    case 'superadmin':
                        return redirect()->route('Admin.Dashboard', ['SuperAdmin' => 'SuperAdmin']);
                    default:
                        Auth::logout();
                        return redirect()->route('User.loginPage')
                            ->withErrors(['Errors' => 'Invalid role or status']);
                }
            } elseif ($user->status == 'hide') {
                return redirect()->route('User.loginPage')
                ->withErrors(['success'=>'Your Account is Not Verified,For Verification Click On Verication Button']);
            }
            else {
                Auth::logout();
                
                return redirect()->route('User.loginPage')
                    ->withErrors(['Errors' => 'Account is not Verified,For Varification Click On ']);
            }
        }
        return redirect()->route('User.loginPage')
            ->withInput()
            ->withErrors(['Errors' => 'Invalid credentials']);
    }
    
    public function VerifiedUser(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Find the user by email
        // $user = User::where('email', $request->ReEmail)->first();
        // if (!$user) {
        //     return redirect()->back()->with('error', 'User not found.');
        // }
        if (Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']])) {
            $user = Auth::user();
            $OTP=rand(1000,9999); 
            $RgUserEamil=$user->email;
            Mail::to($user->email)->send(new UserVerificationPage($OTP)); 
            return view('UserFolder.OTP', compact('OTP', 'RgUserEamil'))
            ->withErrors(['success'=>'Check Your Given Email inbox For OTP']);
           
        }
        else{
            Auth::logout();
            return 'Failed';
        }



    }

    public function registrationPage()
    {
        return view('UserFolder.registration');
    }

    
    public function register(Request $request)
    {
        // dd($request->name,$request->email,$request->phone,$request->password);
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email', 
            'phone' => 'required|string|min:10',
            'password' => 'required|string|min:8' 
        ]);
    
        if ($validator->passes()) {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
    
            $user->password = $request->password;   
            $user->otp =rand(1000,9999); 
    
            // Save the user
            $user->save();
            

            $RgUserEamil=$user->email;
            $OTP= $user->otp;
            Mail::to($RgUserEamil)->send(new SendOTP($OTP));


            // return $this->OTPVerification($OTP);
            return $this->OTPVerification($OTP,$RgUserEamil);
        } else {
            return redirect()->back()->withInput()->withErrors($validator);
        }
    }

    // public function OTPVerification($OTP){
        public function OTPVerification($OTP,$RgUserEamil){

        $RgUserEamil=$RgUserEamil;    
        $OTP= $OTP;

        // return view('UserFolder.OTP',compact('OTP'));
        return view('UserFolder.OTP',compact('OTP','RgUserEamil'));

    }

    public function ResendOTP(Request  $request){

        $RgUserEamil=$request->ReEmail;   
        $OTP= rand(1000,9999); 
        // $sess=$request->session(email);   
        // dd($RgUserEamil);
        $user = User::where('email', $request->ReEmail)->first();
    
        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }
            $user->otp = $OTP;
            $user->save();
        
        Mail::to($RgUserEamil)->send(new SendOTP($OTP)); 
        return view('UserFolder.OTP',compact('OTP','RgUserEamil'));
    }
    public function AfterResendOTP(Request $request)
    {
        $validated = $request->validate([
            'ReEmail' => 'required|email',
        ]);
    
        // Find the user by email
        $user = User::where('email', $request->ReEmail)->first();
    
        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }
            $user->status = 'show';
            $user->save();
        return redirect()->route('User.loginPage');
    }

    public function VerificationLink($RgUserEamil){
        
        $RgUserEamil=$RgUserEamil;   
        $OTP= rand(1000,9999); 
        // $sess=$request->session(email);   
        // dd($RgUserEamil);
        Mail::to($RgUserEamil)->send(new UserVerificationPage($OTP)); 
        return view('UserFolder.OTP', compact('OTP', 'RgUserEamil'))
             ->withErrors(['success'=>'Check Your Given Email inbox For OTP']);
    }





    

    public function UserList()
    {
        if(Auth::checK()){
            $data = User::all();  
            return view('UserFolder.UsersTable',compact('data'));
        }
        else{
            return redirect()
            ->route('Uesr.loginPage')
            ->withError('Login First Please!!!');
        }
    }



    public function ShowUser($id)
    {
        if(Auth::checK()){
            $data= User::find($id);
            return view('UserFolder.ShowUser',compact('data'));
        }
        else{
            return redirect()
            ->route('Uesr.loginPage')
            ->withError('Login First Please!!!');
        }
        
    }

    public function edit($id)
    {
    $data = User::find($id);
        return view('UserFolder.UserEdit',compact('data'));
    }

    public function update(Request $request, $id)
    {
      
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|min:10',
            'password' => 'string|min:10WW'    
        ]);
    // dd();
        $user = User::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }
    
        // Update the user data
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = $request->password;
        $user->save();
    
        return redirect()->back()->with('success', 'User updated successfully.');
    }
    public function hide($id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('User')->with('error', 'User not found.');
        }
        $user->status = "hide";
        $user->save();
    
        return redirect()->back()->with('success', 'User updated successfully.');
    }




    public function RegiDelete($email){
        $res=User::where('email',$email)->delete();
        return redirect()->route('User.RegiPage');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('User.loginPage');
    }




   
}
