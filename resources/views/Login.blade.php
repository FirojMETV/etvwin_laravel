@extends('layout')
@section('title', 'Login')
<link rel='stylesheet' href="{{ asset('css/login.css') }}">
@section('content')


    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form class="form">
        <h3>Sign in</h3>

        {{-- <label for="username">Username</label> --}}
        <input type="text" placeholder="Email or Phone" id="username">

          <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password">

        <button>Log In</button>
        <div class="social">
          <div class="go"><img src="{{asset('image/google.png')}}" width="10px" height="10px"/>  Google</div>
          <div class="fb"><img src="{{asset('image/facebook-new.png')}}" width="20px" height="20px"/>  Facebook</div>
        </div>
    </form>

   
@endsection
