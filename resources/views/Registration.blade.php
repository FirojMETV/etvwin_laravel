@extends('layout')
@section('title', 'Registration')

<link rel="stylesheet" href="{{ asset('css/registration.css') }}">

@section('content')

    <div class="center">
        <h2> Sign Up</h2>
        <form method="post" action="{{ route('register-user') }}">
           @if(Session::has('success'))
           <div class="alert alert-success">{{Session::get('success')}}</div>
           @endif
           @if(Session::has('fail'))
           <div class="alert alert-danger ">{{Session::get('failed')}}</div>
           @endif
            @csrf
            <div class="txt_field">
                <input type="text" name="name" value="{{old('name')}} " >
                <span></span>
                <label>Name*</label>
            </div>
            {{-- <p class="text-warning">@error('name'){{$message}}@enderror</p> --}}

            <div class="txt_field">
                <input type="text" name="Email"  value="{{old('Email')}}" >
                <label>Email / Mobile*</label>
            </div>
            {{-- <p class="text-warning">  @error('Email') {{ $message }}@enderror</p> --}}
            <div class="txt_field">
                <input type="password" name="password" id="password"  value="{{old('password')}}" >
                <label>Password*</label>
            </div>
            {{-- <p class="text-warning">@error('password'){{ $message }}@enderror</p> --}}
            <div class="txt_field">
                <input type="password" name="repassword" 
                
                id="confirm-password"  value="{{old('repassword')}}" >
                <label>Re-Password*</label>
            </div>
            {{-- <p class="text-warning" style="margin-top: -15px">  @error('password')  {{ $message }} @enderror</p> --}}
            <p id="message" style="color:black !important ; "></p>
            <div>
                <input type="submit"
                onclick="checkpassword"
                value="SIGN UP">
            </div>

        </form>
    </div>
    <script src="{{ asset('js/navbar.js') }}"></script>
@endsection
