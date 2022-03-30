<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\userController as ObagzAuth;
use App\Models\AdminverifyEmailAddress;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\obagz_admin\ForgotPasswordController as AdminForgotPassword;
use App\Http\Controllers\obagz_admin\ResetPasswordController as AdminResetPassword;

use App\Http\Controllers\obagz_user\ForgotPasswordController as UserForgotPassword;
use App\Http\Controllers\obagz_user\ResetPasswordController as UserResetPassword;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('obagz_home');
})->name('obagz');

Auth::routes();
//auth-routes
    //Admin
Route::prefix('admin')->name('admin.')->group(function(){
    Route::middleware(['guest:admin','preventBackHistory'])->group(function(){   
        Route::post('/register', [ObagzAuth::class, 'createObagzAdmin'])->name('register');
        Route::post('/login', [ObagzAuth::class, 'loginObagzAdmin'])->name('login');
   
        Route::view('/login', 'obagz-auth.login', ['url' => 'admin'])->name('login');
        Route::view('/register', 'obagz-auth.register', ['url' => 'admin'])->name('register');
        Route::get('/verify',  [ObagzAuth::class, 'verifyAdmin'])->name('verify');
    });
    Route::middleware(['checkIfAdminVerified','auth:admin','preventBackHistory'])->group(function(){
        Route::view('/home', 'admin.admin-panel')->name('home');
        
    });
    Route::middleware(['dontShowIfVerified'])->group(function(){
        Route::view('/reverify',  'obagz-auth.verify', ['url' => 'admin'])->name('reVerify');
        Route::get('/reVerifyEmail',  [ObagzAuth::class, 'reVerifyAdmin'])->name('reVerifyEmail');
        
    });

    Route::post('/password/email', [AdminForgotPassword::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('/password/reset', [AdminForgotPassword::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('/password/reset', [AdminResetPassword::class, 'reset'])->name('password.update');
    Route::get('/password/reset/{token}', [AdminResetPassword::class, 'showResetForm'])->name('password.reset');
});

Route::prefix('user')->name('user.')->group(function(){
    Route::middleware(['guest:web','preventBackHistory'])->group(function(){
        Route::post('/register', [ObagzAuth::class, 'createObagzUsers'])->name('register');
        Route::post('/login', [ObagzAuth::class, 'loginObagzUsers'])->name('login');
        Route::get('/verify',  [ObagzAuth::class, 'verifyUser'])->name('verify');

        Route::view('/login', 'obagz-auth.login')->name('login');
        Route::view('/register', 'obagz-auth.register')->name('register');

    });

    Route::middleware(['dontShowIfVerified'])->group(function(){
        Route::view('/reverify',  'obagz-auth.verify')->name('reVerify');
        Route::get('/reVerifyEmail',  [ObagzAuth::class, 'reVerifyUser'])->name('reVerifyEmail');
        
    });

    Route::post('/password/email', [UserForgotPassword::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('/password/reset', [UserForgotPassword::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('/password/reset', [UserResetPassword::class, 'reset'])->name('password.update');
    Route::get('/password/reset/{token}', [UserResetPassword::class, 'showResetForm'])->name('password.reset');
});



// Auth::routes(['verify'=>true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/test', function(){
   return view('obagz-auth.loginUser');
});
Route::get('/test2', function(){
    return view('obagz-auth.registerUser');
 });
