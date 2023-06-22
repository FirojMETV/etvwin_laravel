@extends('layout')
@section('title', 'Registration')

<link rel="stylesheet" href="{{asset('css/registration.css')}}">
@section('content')

    <div class="center">
        <h2> Sign Up</h2>
        <form method="post">
            <div class="txt_field">
                <input type="text" required>
                <span></span>
                <label>Name*</label>
            </div>
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
            <div class="txt_field">
              <input type="password" required pattern=".{8,}" title="Password must be at least 8 characters long">
              <span></span>
              <label>Re-Password*</label>
          </div>
            <div>
                <input type="submit" value="SIGN UP">
                </div>
                
        </form>
    </div>
@endsection
