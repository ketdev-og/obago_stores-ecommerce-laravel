@extends('layouts.without-header')
@section('content')
    <div class="l-container" id="container">
        <div class="form-container sign-in-container">
            <form method="POST" action="{{ route('user.password.email') }}">
                @csrf
                <h2>User Reset Password</h2>

                <span>please provide your email address</span>
                @if (session('status'))
                    <span class="success-message">
                        {{ session('status') }}
                    </span>
                @endif
                <input type="text" id="login-email" placeholder="Enter E-mail" @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <button type="submit">
                    {{ __('Send Reset Link') }}
                </button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Obag Stores</h1>
                    <p>Start Shopping on Obagz Stores</p>
                    <a href="{{route('obagz')}}"><button class="ghost" id="signUp">Home</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection
