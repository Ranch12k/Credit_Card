<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use  App\Models\CreditCardForm;
use Mail;
use App\Mail\CreditCardApprovedMail;
use App\Mail\CreditCardPendingMail;
use App\Mail\CreditCardRejectedMail;


class AdminDashboard extends Controller
{
    //
    public function index(){

        $data=User::all();
        return view('AdminDashboard.AdminPage.index',compact('data'));
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
    
            // Save the user
            $user->save();
            return redirect()->back();
        } else {
            return redirect()->back()->withInput()->withErrors($validator);
        }
    }
    public function AdminUsersList(){

        $data=User::all();
        return view('AdminDashboard.AdminPage.AdminUsersList',compact('data'));
    }

    public function update(Request $request, $id)
    {
      
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|min:10'
            // ,
            // 'password' => 'string|min:10'    
        ]);
        $user = User::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }
    
        // Update the user data
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        // $user->password = $request->password;
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
    public function CreditCardPage(){

        $data=CreditCardForm::all();
        // dd($data);
        return view('AdminDashboard.AdminPage.CreditCard',compact('data'));
    }
    public function ApproveCCard(Request $request, $id){
        $data=CreditCardForm::all();

        $user = CreditCardForm::find($id);
        $status=$request->status;
        // dd($status);
        if (!$user) {
            return redirect()->route('User')->with('error', 'User not found.');
        }
        $user->status = $status;
        $user->save();

        switch($user->status){
            case 'Aproved';
            $MSG="Approved";
            Mail::to($user->email)->send(new CreditCardApprovedMail($MSG));
            return redirect()->back();
            case 'Pending';
            $MSG="Approved";
            Mail::to($user->email)->send(new CreditCardPendingMail($MSG));
            return redirect()->back();
            case 'Rejected';
            $MSG="Rejected";
            Mail::to($user->email)->send(new CreditCardRejectedMail($MSG));
            return redirect()->back();
            default:
            return redirect()->back();
        }
       
        // dd($data);
        return redirect()->back();
    }

}
