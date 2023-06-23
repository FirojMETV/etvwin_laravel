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
            <span class="text-warning" style="">@error('name'){{$message}}@enderror</span>
            <div class="txt_field">
                <input type="text" name="Email"  value="{{old('Email')}}" >
                <label>Email / Mobile*</label>
            </div>
            <span class="text-warning">  @error('Email') {{ $message }}@enderror</span>
            <div class="txt_field">
                <input type="password" name="password"  value="{{old('password')}}" >
                <label>Password*</label>
            </div>
            <span class="text-warning">@error('password'){{ $message }}@enderror</span>
            <div class="txt_field">
                <input type="password" name="repassword"  value="{{old('repassword')}}" >
                <label>Re-Password*</label>
            </div>
            <span class="text-warning">  @error('password')  {{ $message }} @enderror</span>
            <div>
                <input type="submit" value="SIGN UP">
            </div>

        </form>
    </div>
@endsection
