<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use  App\Models\User;
use Database\Factories;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Session;
// use App\Models\User;
use Hash;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
class UesrController extends Controller
{
   

    public function UserDashboard(){

        return view('UserFolder.UserDashboard');
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
            'phone' => 'required|string|max:255',
            'password' => 'required|string|min:8' 
        ]);
    
        if ($validator->passes()) {
            // Create a new user instance
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
    
            $user->password = $request->password;   
    
            // Save the user
            $user->save();
            return 'User Registered Successfully';
        } else {
            return redirect()->route('User.loginPage')->withInput()->withErrors($validator);
        }
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
            'phone' => 'required|string|max:255',
            'password' => 'string|min:10WW'    
        ]);
    // dd();
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('User')->with('error', 'User not found.');
        }
    
        // Update the user data
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = $request->password;
        $user->save();
    
        return redirect()->route('User')->with('success', 'User updated successfully.');
    }
    public function hide($id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('User')->with('error', 'User not found.');
        }
        $user->status = "hide";
        $user->save();
    
        return redirect()->route('User')->with('success', 'User updated successfully.');
    }
    
    public function LoginPage()
    {
        return view('UserFolder.login');
    }


    public function login(Request $request)
    {
        // Validate the input data
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $data=User::all();
        if(Auth::attempt($credentials)){



            return redirect()->route('User.Dashboard');
        }
        else{
            return redirect()->route('User.loginPage')
            ->withInput()
            ->withErrors(['Errors' => 'Invalid credentials']);
        }
    }


  


    public function logout(){
        Auth::logout();
        return redirect()->route('User.loginPage');
    }

}
