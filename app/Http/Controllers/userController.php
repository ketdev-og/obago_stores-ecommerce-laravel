<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminSignInRequest;
use App\Http\Requests\Admin\AdminSignUpRequest;
use App\Http\Requests\User\UserSignInRequest;
use App\Http\Requests\User\UserSignUpRequest;
use App\Models\Admin;
use App\Models\User;
use App\Models\AdminverifyEmailAddress;
use App\Models\UserverifyEmailAddress;
use Auth;
use PHPUnit\Util\ErrorHandler;
use App\Http\Trait\AuthTrait;


class userController extends Controller
{
    use AuthTrait;
    public function loginObagzUsers(UserSignInRequest $request)
    {
        $UserLogin = $this->login('web', $request);
        if ($UserLogin) {
            return redirect()->route('obagz');
        } else {
            return back()->withInput($request->only('email'))->with('fail', 'invalid email or password');
        }
    }


    public function createObagzUsers(UserSignUpRequest $request)
    {
        try {
            $this->reg(User::class, $request);
            return redirect()->back()->with('success', 'verifiregistration submitted, please click on verification link sent to your email to coplete registration');
        } catch (ErrorHandler $e) {
            return redirect()->back()->with('fail', 'something went wrong please try again');
        }
    }

    public function verifyUser()
    {
        $verificationCode = \Illuminate\Support\Facades\Request::get('code');
        if ($verificationCode == null) {
            return redirect()->route('user.login')->with('fail', 'something went wrong please try again');
        }
        try {
            $token = UserverifyEmailAddress::where('verifyToken', $verificationCode)->first();
            if ($token != null) {
                $user_id = $token->user->id;
                $user = User::find($user_id);
                $user->is_verified = 1;
                $user->save();
                return redirect()->route('user.login')->with('success', 'email verified successfully please login');
            }
        } catch (ErrorHandler $e) {
            return redirect()->route('admin.login')->with('fail', 'something went wrong please try again');
        }
    }

    public function reVerifyUser()
    {
        $guard = "user";
        if (Auth::check()) {
            $user = Auth::user();
            $userToken = $user->userEmailVerification->verifyToken;
            $userEmail = $user->email;
            $userNames = $user->name;

            mailController::sendEmail($userEmail, $userNames, $userToken, $guard);

            return redirect()->back()->with('success', 'verification link sent successfully');
        }
        return redirect()->route('user.login')->with('fail', 'something went wrong please try again');
    }





    public function createObagzAdmin(AdminSignUpRequest $request)
    {
        try {

            $this->reg(Admin::class, $request);
            return redirect()->back()->with('success', 'verifiregistration submitted, please click on verification link sent to your email to coplete registration');
        } catch (ErrorHandler $e) {
            return redirect()->back()->with('fail', 'something went wrong please try again');
        }
    }

    public function loginObagzAdmin(AdminSignInRequest $request)
    {
        $AdminLogin = $this->login('admin', $request);
        if ($AdminLogin) {
            return redirect()->route('admin.home');
        } else {
            return back()->withInput($request->only('email'))->with('fail', 'invalid email or password');
        }
    }


    public function verifyAdmin()
    {
        $verificationCode = \Illuminate\Support\Facades\Request::get('code');
        if ($verificationCode == null) {
            return redirect()->route('admin.login')->with('fail', 'something went wrong please try again');
        }

        try {
            $token = AdminverifyEmailAddress::where('verifyToken', $verificationCode)->first();
            if ($token != null) {
                $admin_id = $token->admin->id;
                $admin = Admin::find($admin_id);
                $admin->is_verified = 1;
                $admin->save();
                return redirect()->route('admin.login')->with('success', 'email verified successfully please login');
            }
        } catch (ErrorHandler $e) {
            return redirect()->route('admin.login')->with('fail', 'something went wrong please try again');
        }
    }


    public function reVerifyAdmin()
    {
        if (Auth::guard('admin')->check()) {
            $user = Auth::guard('admin')->user();
            $userToken = $user->adminEmailVerification->verifyToken;
            $userEmail = $user->email;
            $userNames = $user->name;

            mailController::sendEmail($userEmail, $userNames, $userToken, null);

            return redirect()->back()->with('success', 'verification link sent successfully');
        }
        return redirect()->route('admin.login')->with('fail', 'something went wrong please try again');
    }
}
