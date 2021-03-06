<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
    }

    public function showAdminLogin(){
        return view('obagz-auth.login', ['url' => 'admin']);
    }

    public function adminLogin(Request $request){
        $this->validate($request,
        [
            'email' => 'required|email|exists:obagz_users,email',
            'password' => 'required|min:8'
        ]);

        if(Auth::guard('admin')->attempt(['email'=> $request->email, 'password'=>$request->password])){
            return redirect()->route('admin.home');
        }else{
            return back()->withInput($request->only('email'))->with('error', 'invalid email or password');
        }

    }
}
