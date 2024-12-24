<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UesrController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\admin\LoginController As AdminLoginController;
use App\Http\Controllers\superadmin\LoginController As SuperAdminLoginController;
use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\CreditCardController;

use App\Http\Controllers\BankController;

Route::post('/get-bank-details', [BankController::class, 'getBankDetails']);
Route::get('/bank',[BankController::class,'ifscPage'])->name('bank.ifscPage');


Route::get('/', function () {
    return view('welcome');
});
Route::get('/login/github', [LoginController::class, 'RedirectToProvider'])->name('github.login');
Route::get('/login/github/callback', [LoginController::class, 'handleProviderCallback'])->name('User.handleProviderCallback');


Route::get('/pdf', function () {
    $pdf = PDF::loadView('MYpage');
    return $pdf->save('my_stored_file.pdf')->stream('invoice.pdf');
    
});

// Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function(){
//     // Routes
// });


 

Route::get('/login',[LoginController::class,'LoginPage'])->name('User.loginPage');
Route::post('/login',[LoginController::class,'login'])->name('User.login');

Route::get('/Registration',[LoginController::class,'registrationPage'])->name('User.RegiPage');
Route::post('/Registration',[LoginController::class,'register'])->name('Registration');
Route::get('/VerificationPage',[LoginController::class,'VerificationPage'])->name('User.VerificationPage');
Route::post('/Verified',[LoginController::class,'VerifiedUser'])->name('User.VerifiedUser');


Route::get('/OTPVerification',[LoginController::class,'OTPVerification'])->name('User.OTPVerification');
Route::post('/ResendOTP',[LoginController::class,'ResendOTP'])->name('User.ResendOTP');
Route::post('/AfterResendOTP',[LoginController::class,'AfterResendOTP'])->name('User.AfterResendOTP');

Route::get('/RegiDelete',[LoginController::class,'RegiDelete'])->name('User.RegiDelete');


Route::post('/SubmitCreditCardForm',[CreditCardController::class,'SubmitCreditCardForm'])->name('SubmitCreditCardForm');

Route::get('/dashboard/status',[CreditCardController::class,'UserCCardSatus'])->name('User.CreditCardStaus');

Route::get('/sendEmail',[CreditCardController::class,'Send_Email'])->name('User.Send_Email');




Route::middleware('UserCheck::class')->group(function()
{

    Route::get('/Dashboard/list',[LoginController::class,'UserList'])->name('User.List');

    Route::get('UserEdit/{id}',[LoginController::class,'ShowUser'])->name('User.showuser');
    Route::get('UserEditAll/{id}',[LoginController::class,'edit'])->name('User.Edit');

    Route::post('UserUpdate/{id}',[LoginController::class,'update'])->name('User.update');
    Route::get('UserHide/{id}',[LoginController::class,'hide'])->name('User.hide');

    Route::get('/dashboard',[UesrController::class,'UserDashboard'])->name('User.Dashboard');



    // <------------- Admin Dashboard ------------------>

    Route::get('AdminDashboard',[AdminDashboard::class,'index'])->name('Admin.Dashboard');
    Route::post('/AdminRegistration',[AdminDashboard::class,'register'])->name('Admin.Registration');

    Route::get('AdminDashboard/UserList',[AdminDashboard::class,'AdminUsersList'])->name('AdminUsers.List');
    Route::post('AdminUpdate/{id}',[AdminDashboard::class,'update'])->name('Admin.update');
    Route::get('AdminHide/{id}',[AdminDashboard::class,'hide'])->name('Admin.hide');
    
    Route::get('AdminDashboard/CreditCardPage',[AdminDashboard::class,'CreditCardPage'])->name('Admin.CreditCardPage');
    Route::post('AdminDashboard/ApproveCCard/{id}',[AdminDashboard::class,'ApproveCCard'])->name('Admin.ApproveCCard');



    // <------------- SuperAdmin Dashboard ------------------>

    Route::get('/SuperAdmin/logut',[SuperAdminLoginController::class,'logout'])->name('SuperAdmin.logout');
    Route::get('/SuperAdminDashboard',[SuperAdminLoginController::class,'index'])->name('SuperAdmin.Dashobard');


    Route::get('/logout',[LoginController::class,'logout'])->name('User.logout');


});









// <------------- SuperAdmin Dashboard ------------------>
// Route::get('/SuperAdmin/login',[SuperAdminLoginController::class,'LoginPage'])->name('SuperAdmin.loginPage');
// Route::post('/SuperAdmin/login',[SuperAdminLoginController::class,'login'])->name('SuperAdmin.login');


// Route::get('/Admin/login',[AdminLoginController::class,'LoginPage'])->name('Admin.loginPage');
// Route::post('/Admin/login',[AdminLoginController::class,'login'])->name('Admin.login');\
// Route::get('/Admin/logut',[AdminLoginController::class,'logout'])->name('Admin.logout');


// Route::get('/login',[UesrController::class,'LoginPage'])->name('Uesr.loginPage');
// Route::post('/login',[UesrController::class,'login'])->name('Uesr.login');
// Route::get('/logut',[UesrController::class,'logout'])->name('Uesr.logout');



// Route::get('/Registration',[UesrController::class,'registrationPage'])->name('Uesr.RegiPage');
// Route::post('/Registration',[UesrController::class,'register'])->name('Registration');
// Route::get('/Dashboard/list',[UesrController::class,'UserList'])->name('User.List');


// Route::get('UserEdit/{id}',[UesrController::class,'ShowUser'])->name('User.showuser');
// Route::get('UserEditAll/{id}',[UesrController::class,'edit'])->name('User.Edit');

// Route::post('UserUpdate/{id}',[UesrController::class,'update'])->name('User.update');
// Route::get('UserHide/{id}',[UesrController::class,'hide'])->name('User.hide');