<?php

namespace App\Http\Controllers\obagz_admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

   public function __construct(){
       $this->middleware('guest:admin');
   }

   public function broker()
   {
       return Password::broker('admins');
   }

   
   public function showLinkRequestForm()
    {
        return view('admin.passwords.email');
    }

   

}
