@extends('layouts.without-header')
@section('content')
    <div class="l-container" id="container">
        <div class="form-container sign-in-container">
            @isset($url)
                <form  method="POST" action="{{ route('admin.login') }}">
                @else
                    <form method="POST" action="{{ route('login') }}">
                    @endisset
                    @csrf
                    <h1>Sign In</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social"><i class="bi bi-google"></i></i></a>
                        <a href="#" class="social"><i class="bi bi-instagram"></i></a>
                    </div>
                    <span>or use your account</span>
                    @if (Session::get('fail'))
                        <span class="error-message">
                            {{ Session::get('fail') }}
                        </span>
                    @endif
                    @if (Session::get('success'))
                        <span class="success-message">
                            {{ Session::get('success') }}
                        </span>
                    @endif
                    <input  type="text" id="login-email"
                        placeholder="Enter E-mail" @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input  type="password" id="login-password"
                        placeholder="Enter Password" @error('password') is-invalid @enderror" name="password"
                        value="{{ old('password') }}" autocomplete="password" autofocus>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    @if (Route::has('password.request'))
                        <a  href="
                    @isset($url)
                        {{ route('admin.password.request') }}
                    @else
                        {{ route('user.password.request') }}
                    @endisset
                    ">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                    <button type="submit">Sign In</button>
                </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start your journey with us</p>
                    <a href="{{route('user.register')}}"><button class="ghost" id="signUp">Sign Up</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection
