<?php
namespace App\Http\Trait;

use App\Models\User;
use App\Models\UserverifyEmailAddress;
use Auth;
use Illuminate\Support\Facades\Hash;
use PhpParser\ErrorHandler;

/**
 * 
 */
trait AuthTrait
{
    public function reg($model, $request){
        $model::create([
            'name' => flToUpper($request->name),
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'isVerified' => 0
        ]); 
    }


    public function login($guard, $request){
      return Auth::guard($guard)->attempt(['email'=> $request->email, 'password'=>$request->password]);
    }

}