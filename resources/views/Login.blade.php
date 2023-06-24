@extends('layout')
@section('title', 'Login')
<link rel='stylesheet' href="{{ asset('css/login.css') }}">
@section('content')

        <div class="center">
            <h2> Sign in</h2>
            <form method="post" action="{{ route('login-user') }}">
                @if (Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
                @if (Session::has('fail'))
                    <div class="alert alert-danger ">{{ Session::get('failed') }}</div>
                @endif
                @csrf
                <div class="txt_field">
                    <input type="text" name="Email" value="{{ old('Email') }}">
                    <span class="text-warning" style="">
                        @error('Email')
                            {{ $message }}
                        @enderror
                    </span>
                    <span></span>
                    <label for="Email">Email / Mobile*</label>
                </div>
                <div class="txt_field">
                    <input type="password" name="password" value="">
                    <span class="text-warning" style="">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                    <span></span>
                    <label>Password*</label>
                </div>
                <div class="pass">
                    Forget Password?
                </div>

                <div>
                    <input type="submit" value="SIGN IN">
                    <h3 class="hr-lines"><span>OR</span></h3>

                    <div class="social" style="display: inline-flex">
                        <div class="fb"><img src="{{ asset('image/facebook-new.png') }}" width="27px" height="27px"
                                style="margin-top: -2px" />
                        </div>
                        <div class="go"><img src="{{ asset('image/google.png') }}" width="20px" height="20px" />
                        </div>
                    </div>
                    <a href="{{ asset('registration') }}">
                        <input type="sign-up" value="SIGN UP">
                    </a>
            </form>
        </div>
    <script src="{{ asset('js/navbar.js') }}"></script>
@endsection
