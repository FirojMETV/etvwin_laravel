@extends('layout')
@section('title', 'Registration')


@section('content')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- <nav class="navbar">
        <div class="navbar-left">
          <img  src="{{ asset('image/et.jpg') }}" alt="Logo" class="navbar-logo">
          <div class="navbar-menu">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <div class="navbar-center">
          <ul class="navbar-items">
            <li><a href="#">Home</a></li>
            <li><a href="#">TV SHOWS</a></li>
            <li><a href="#">MOVIES</a></li>
            <li><a href="#"> LIVETV</a></li>
            <li><a href="#">NEWS</a></li>
            <li><a href="#">FOOD</a></li>
            <li><a href="#">HEALTH</a></li>

          </ul>
        </div>
        <div class="navbar-RIGHT">
            <ul class="nav navbar-nav navbar-right align-content-center align-self-center ">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('C:/xampp/firoj/webwin_project/image/subscribe.png') }}">
                        <img src="{{ asset('image/subscribe.png') }}" height="50px" width="120px" alt=""
                            class="subscription-img">
                    </a>
                </li>
                <li class="nav-item" style="padding: 10px 0  0 0px">
                    <a class="nav-link " href="{{ url('/search') }}">
                        <img src="{{ asset('image/search.png') }}" height="35px" width="35px" alt=""
                            class="search-img " />
                    </a>
                </li>
                <li class="hidden-sm">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" href="{{ url('/profile') }}">
                        <img src="{{ asset('image/profile-icon-white.png') }}" height="45px" width="45px"
                            alt="" class="profile-img  color-#00021d " />
                        <ul class="dropdown-menu "
                            style="background: #191D4F ; min-width:280px ; padding:10px 50px; font-size:15px;  ">
                            <li style="padding-bottom:22px"><a href="#" style="color: #e7b851 ; ">SIGN IN</a>
                            </li>
                            <li><a href="#" style="color:#e7b851">SIGN OUT</a></li>

                        </ul>
                    </a>
                </li>

            </ul>
        </div>
      </nav>
      
    <script src="{{ asset('js/navbar.js') }}"></script> --}}
@endsection
