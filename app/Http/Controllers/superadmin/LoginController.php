<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use  App\Models\User;
use Session;

class LoginController extends Controller
{
    //

    public function UserDashboard(){

        return view('SuperAdminDashboard.SuperAdminDashboard');
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



        if(Auth::attempt($credentials)){
            if(Auth::check()){
                if(Auth::user()->role=='superadmin'){
                    // $user="SuperAdmin";
                    return  redirect()
                    ->route('Admin.Dashboard');
                }
            }

        }
        else{
            return 'Super Admin Login Credential is wrong!!';
            // return redirect()->route('User.loginPage')
            // ->withInput()
            // ->withErrors(['Errors' => 'Invalid credentials']);
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('User.loginPage');
    }

}
