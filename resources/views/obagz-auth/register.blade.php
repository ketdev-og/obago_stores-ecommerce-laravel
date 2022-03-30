@extends('layouts.without-header')
@section('content')
    <div class="l-container right-panel-active" id="container">
        <div class="form-container sign-up-container">
            @isset($url)
                <form method="POST" action="{{ route('admin.register') }}">
                @else
                    <form method="POST" action="{{ route('user.register') }}">
                    @endisset
                    @csrf
                    <h1>Sign Up</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social"><i class="bi bi-google"></i></i></a>
                        <a href="#" class="social"><i class="bi bi-instagram"></i></a>
                    </div>
                    <span>or use your email for registration</span>
                    @if (Session::get('success'))
                        <span class="success-message">
                            {{ Session::get('success') }}
                        </span>
                    @endif
                    @if (Session::get('fail'))
                        <span class="error-message">
                            {{ Session::get('fail') }}
                        </span>
                    @endif
                    <input type="text" id="name" placeholder="Full Name" @error('name') is-invalid @enderror"
                        name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input type="text" id="email" placeholder="Enter E-mail" @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror


                    <input type="password" id="password" placeholder="Enter Password" @error('password') is-invalid
                        @enderror" name="password" value="{{ old('password') }}" autocomplete="password" autofocus>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input id="password-confirm" type="password" name="password_confirmation"
                         autocomplete="new-password" placeholder="retype password">

                    <button type="submit">Sign Up</button>
                </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>Please login with your personal info</p>
                    <a href="{{route('user.login')}}"><button class="ghost" id="signUp">Sign In</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection
