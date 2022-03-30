@extends('layouts.without-header')
@section('content')
    <div class="l-container right-panel-active" id="container">
        <div class="form-container sign-up-container">
            <form method="POST" action="{{ route('admin.password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">
                <h1>Sign Up</h1>

                <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email"
                    value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror


                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password"
                    required autocomplete="new-password" placeholder="New Password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input id="password-confirm" type="password"  name="password_confirmation" required
                    autocomplete="new-password" placeholder="Confirm-Password">

                    <button type="submit"">
                        {{ __('Reset Password') }}
                    </button>
                
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Obag Stores</h1>
                    <p>Start Shopping on Obagz Stores</p>
                    <a href="{{ route('obagz') }}"><button class="ghost" id="signUp">Home</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection
