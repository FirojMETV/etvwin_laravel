@extends('layout')
@section('title', 'Login')
<link rel='stylesheet' href="{{ asset('css/login.css') }}">
@section('content')


    <div class="center">
        <h2> Sign in</h2>
        <form method="post">
            <div class="txt_field">
                <input type="text" required>
                <span></span>
                <label>Email / Mobile*</label>
            </div>
            <div class="txt_field">
                <input type="password" required pattern=".{8,}" title="Password must be at least 8 characters long">
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
                  <div class="fb"><img src="{{ asset('image/facebook-new.png') }}" width="27px" height="27px" style="margin-top: -2px" />
                  </div>  
                  <div class="go"><img src="{{ asset('image/google.png') }}" width="20px" height="20px" />
                    </div>
                </div>
                <input type="submit" value="SIGN UP">
        </form>
    </div>
@endsection
