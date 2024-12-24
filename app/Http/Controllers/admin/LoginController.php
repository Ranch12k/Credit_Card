<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use  App\Models\User;
use Session;


class LoginController extends Controller
{
    //
    public function LoginPage()
    {
        return view('AdminDashboard.LoginPage.login');
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
                if(Auth::user()->role=='admin'){
                    
                    return  redirect()
                            ->route('Admin.Dashboard');
                }else{
                    return 'failed';
                }
            }

            return 'Admin login  Failed but Credintials right';

            // return redirect()->route('User.List');
        }
        else{
            return 'Admin login Failed';
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
