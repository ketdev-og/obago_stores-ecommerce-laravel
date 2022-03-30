@extends('layouts.without-header')
@section('content')
  
        @if (Session::get('success'))
            <div>
                <span class="success-message" style="font-size: 1rem">
                    {{ Session::get('success') }}
                </span>
            </div>
        @endif
        
        <h3>Didn't get verification link?</h3>
        @isset($url)
        <a href="{{route('admin.reVerifyEmail')}}"><button>resend email verification link</button></a>
        @else
        <a href="{{route('user.reVerifyEmail')}}"><button>resend email verification link</button></a>
        @endisset

  
@endsection

