<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\CreditCardForm;
use Illuminate\Support\Facades\DB;
use Illuminate\Mail\Mailable;
use Mail;
use App\Mail\CrediCardApplication;


class CreditCardController extends Controller
{
    // Show the form
    


    public function Send_Email(){
        
        Mail::to('kamalrajputray@gmail.com')->send(new SendMail('kamal'));
        return 'Email Send Successfully';
    }



    // Handle form submission
    public function SubmitCreditCardForm(Request $request)
    {
        // Validate the form input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'fname' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'pincode' => 'required|numeric',
            'occupation' => 'required|string',
            'pancard' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',  // File validation for Pancard
            'aadharcard' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',  // File validation for Aadharcard
        ]);
        $pancardPath = $request->file('pancard')->store('uploads/pancards');
        $aadharcardPath = $request->file('aadharcard')->store('uploads/aadharcards');
        $user_id=Auth::user()->id;
        // dd($user_id);       
        if ($validatedData) {
            $user = new CreditCardForm();
            $user->user_id =$user_id;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->fname= $request->fname;
            $user->address= $request->address;
            $user->state= $request->state;
            $user->city= $request->city;
            $user->pincode= $request->pincode;
            $user->occupation= $request->occupation;
            $user->pancard= $request->pancard;
            $user->aadharcard= $request->aadharcard;
            $user->save();

            $RgUserEamil=Auth::user()->email;
            Mail::to($RgUserEamil)->send(new CrediCardApplication($user));
            return redirect()->back()->with('success', 'Form submitted successfully! Files uploaded successfully.');;
        } else {
            return redirect()->back()->withInput()->withErrors($validatedData);
        }
    }

    public function UserCCardSatus(){
        $data=Auth::user()->id;

        $user = DB::table('users')
            ->join('credit_card_detail', 'credit_card_detail.user_id', '=', 'users.id')
            ->select('credit_card_detail.*')
            ->get();
        // $user = CreditCardForm::find($data);
        // dd(count($user) === 0);
        // print_r($user);
        // dd(empty($user));
        

        return view('UserFolder.CreditCardStatus',compact('user'));
    }

}
