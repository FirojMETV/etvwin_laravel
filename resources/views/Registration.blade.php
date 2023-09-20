@extends('layout')
@section('title', 'REGISTRATION')

<link rel="stylesheet" href="{{ asset('css/registration.css') }}">
@section('content')
    <div style="display: inline">
        <div class="center">
            <h2> Sign Up</h2>
            <form method="post" action="{{ route('register-user') }}">
                @if (Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
                @if (Session::has('fail'))
                    <div class="alert alert-danger ">{{ Session::get('failed') }}</div>
                @endif
                @csrf
                <div class="group">
                    <input type="text" class="input" placeholder="">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Name*</label>
                    <p class="text-warning">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </p>
                </div>

                <div class="group">
                    <input type="text" class="input" name="Email" value="{{ old('Email') }}" placeholder="">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Email /Phone *</label>
                    {{-- <p class="text-warning"> @error('Email')
                            {{ $message }}
                        @enderror
                    </p> --}}
                </div>

                <div class="group">
                    <input type="text" class="input" name="Password*" id="password" placeholder="">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Password *</label>
                    {{-- <p class="text-warning">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </p> --}}
                </div>
                <div class="group">
                    <input type="text" class="input"name="rerepassword" id="repassword" placeholder="">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Re-Password*</label>
                    {{-- <p class="text-warning">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </p> --}}
                </div>

                <p id="message" style="color:black !important ; "></p>
                <div style="padding: 20px">
                    <input type="submit" onclick="checkpassword" value="SIGN UP">
                </div>

            </form>
        </div>
    </div>
    <script src="{{ asset('js/navbar.js') }}"></script>
@endsection
