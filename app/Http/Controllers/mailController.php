<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\verifyUserEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
    public static function sendEmail($email, $name, $verifyToken, $guard){
        $data = [
            'name' => $name,
            'verifyToken' => $verifyToken,
            'guard' => $guard

        ];

       Mail::to($email)->send(new verifyUserEmail($data));
    }

   
}
