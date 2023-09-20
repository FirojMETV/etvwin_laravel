@inject('request', 'Illuminate\Http\Request')
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">


<nav class="main-nav-opaque">
    <div class="hamburger-button-div">
        <ul>
            <li>
                <span ng-click="OpenNavBar()" class=" hamburger-button" aria-hidden="true" role="button" tabindex="0"
                 style="top: -18px;left: -21px;"
                   >
                   <img src="{{url('/image/im.png')}}" alt="Image"   style="font-size:30px;cursor:pointer ;
                   color:aliceblue;" width="50px" height="55px"
                   onclick="openNav()"/></span>
                   
            </li>
            <li class="logo-margin">
                <a href="home">
                    <img class="logo sm:pd-6" alt="icon" src="{{ asset('image/logo.png') }} " width="50px"
                        height="50px">
                </a>
            </li>
        </ul>
    </div>
    <div class="main-menu">
        <ul class="navs navbar-nav nav-pills">
            {{-- @isset($displayTitle['home'])
                <li class="dropdown ng-scope active" role="button" tabindex="0" style="">
                    <a href="{{ route('home') }}">{{ $displayTitle['home'] }}</a>
                    <span aria-hidden="true"></span>
                </li>
            @endisset --}}

            @foreach ($displayTitles as $index => $title)
            <li class="dropdown{{ $index === 0 ? ' active' : '' }}"
                 role="button" tabindex="0"
                 style="" data-menu-id="{{ $index }}">
                <a 
                href="{{ (strtolower($title)) }}"
                   class="{{ request()->is(strtolower($title)) ? 'active' : '' }}">
                    {{ $title }}
                </a>
            </li>
        @endforeach
        
          

            {{-- @foreach ($displayTitles as $index => $title)
            <li class="dropdown np-scrope{{ $index === 0 ? ' active' : '' }}"
             role="button" tabindex="0"
                style="" data-menu-id="{{ $index }}">
                <a 
                href="{{strtolower($title)}}"
                 class="{{ $request->is(strtolower($title)) ? 'active' : '' }}">
                    {{ $title }}
                </a>
            </li>
        @endforeach --}}
                  

            {{-- @if (!empty($displayTitles))
            @foreach ($displayTitles as $index => $title)
                <li class="dropdown ng-scope {{ $index === 0 ? 'active' : '' }}" 
                role="button" tabindex="0" style="" 
                data-menu-id="{{$index}}">
                    <a 
                     href="{{strtolower($title)}}"
                        class="{{ $request->is(strtolower($title)) ? 'active' : '' }}">{{ $title }}</a>
                    <span aria-hidden="true"></span>
                </li>
            @endforeach
        @else
            <li>No menu items found</li>
        @endif --}}

            {{-- @isset($displayTitle['Tv Shows'])
                <li class="dropdown ng-scope" role="button" tabindex="0" style="">
                    <a href="{{ route('TV Shows') }}">Tv Shows</a>
                    <span aria-hidden="true"></span>
                    <ul class="dropdown-content drop-center-aligned ng-scope">
                    </ul>
                </li>
            @endisset
            <li class="dropdown" role="button" tabindex="0">
                <a href="">MOVIES</a>
                <span aria-hidden="true">
                </span>

                <ul ng-if="tab.friendly_id!='home'" class="dropdown-content drop-center-aligned ng-scope"
                    ng:class="{channels:tab.display_title.toLowerCase()==='channels'}">
                </ul>
            </li>
            <li class="dropdown " role="button" tabindex="0">
                <a href="">LIVE TV</a>
                <span aria-hidden="true"></span>

                <ul ng-if="tab.friendly_id!='home'" class="dropdown-content drop-center-aligned ng-scope">

                </ul>
            </li>
            <li class="dropdown " role="button" tabindex="0">
                <a href="">NEWS</a>
                <span aria-hidden="true"></span>
                <ul class="dropdown-content drop-center-aligned ng-scope">

                </ul>
            </li>
            <li class="dropdown " role="button" tabindex="0">
                <a href="">FOOD</a>
                <span aria-hidden="true">
                </span>
                <ul class="dropdown-content drop-center-aligned ng-scope">

                </ul>
            </li>
            <li class="dropdown " role="button" tabindex="0">
                <a href="">HEALTH
                </a>
                <span ng-class="{'more-icon':tab.display_title == 'MORE'}" aria-hidden="true">
                </span>
                <ul class="dropdown-content drop-center-aligned ng-scope">
                </ul>
            </li> --}}
        </ul>
    </div>
    <div class="mobile-os-list">
        <ul>
            <li>
                <a href="subscription-plans" class="">
                    <span aria-hidden="true">
                        <img src="{{ asset('image/subscribe-small.png') }}" class="subscribe-icon-new"
                            alt="Subscribe-icon"></span>
                </a>

            </li>
            <li class="right-margin-search-icon">
                <a class="icon-search">
                    <img src="{{ asset('image/search.png') }}" alt="" style="    height: 30px; width: 30px;"
                        onclick="openSearch()">
                </a>
            </li>
            <li class="dropdown non-mobile">
                <a class=" dropdown-toggle" data-toggle="dropdown" href="#">
                    <img alt="" id="menu-profile-img" src="{{ asset('image/usericon.png') }}">
                </a>

                <ul class="dropdown-content user drop-right-aligned ">
                    <li>
                        <a class="my-profile-tab" href="usertab">
                            <span class="drop-down-icons my-profile-icon" aria-hidden="true">
                            </span>
                            <span class="drop-text">
                                My Profile
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="subscription-plans">
                            <span class="drop-down-icons subscription-icon" aria-hidden="true">
                            </span>
                            <span class="drop-text subscribe-text" style="margin-left: -16px;">
                                Subscription
                            </span>
                        </a>
                    </li>
                    <li><a href="watchlater">
                            <span class="icon-watch-later drop-down-icons" aria-hidden="true">

                            </span>
                            <span class="drop-text">
                                Watch Later

                            </span>
                        </a>
                    </li>
                    <li><a class="activate-tv" href="active">
                            <span class="drop-down-icons activate-change" aria-hidden="true">
                            </span>
                            <span class="drop-text activate-tv-text">Activate TV</span>
                        </a>
                    </li>
                    <li><a href="preference">
                            <span class="icon-following drop-down-icons" aria-hidden="true">
                            </span>
                            <span class="drop-text">My Preferences</span>
                        </a>
                    </li>
                    <li>
                        <a>
                            <span class="icon-signout drop-down-icons" aria-hidden="true">

                            </span>
                            <span class="drop-text">Sign Out</span></a>
                    </li>
                    <li>
                        <a>
                            <span class="icon-signout drop-down-icons" aria-hidden="true">

                            </span>
                            <span class="drop-text">Sign Out all devices

                            </span>
                        </a>
                    </li>
                </ul>

                {{-- for Sign in new user user  --}}
                {{-- <ul class="dropdown-content user drop-right-aligned"
                 style="border-radius: 10px !important ;display:grid">
                    <li >
                        <a href="login" >
                            <span class="drop-text">
                                Sign IN
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="drop-text">
                                Sign UP
                            </span>
                        </a>
                    </li>
                </ul> --}}
            </li>
        </ul>
    </div>
</nav>

{{-- side menu with responsive --}}
<div id="mySidenav" class="sidenav " style="display:none;">
    <div class="signin">
        <div class="guest-user-option">
            {{-- for Guest User only --}}
            {{-- <h5 style="padding-left:  10px; color:#dddd "> hey guest user !! </h5>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="d-inline" style="margin-bottom:30px;">
                <button href="{{ asset('login') }}" onclick="openSignIN()" type="button"
                    class="col-sm-6 col-xs-6 btn form-button blue-button">
                    SIGN IN</button>
                <button href="{{ asset('registration') }}" type="button"
                    class="col-sm-6 col-xs-6 btn guest-sign-up form-button" onclick="SignUPopen()">
                    SIGN UP
                </button>
            </div> --}}
            {{-- for user  --}}
            <div class="signed-user-option ">
                <img class="col-sm-3 col-xs-3" id="nav-rounded-image" onclick="toggleUserData()"
                    src="{{ asset('image/usericon.png') }}">
                <h2 class="col-sm-7 col-xs-7 ng-binding" onclick="toggleUserData()">
                    UserName</h2>
                <span class="arrow-down-profile " style="" size='24px' onclick="toggleUserData()">
                </span>
            </div>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        </div>

    </div>
    <div id="usermenu" class="sub-menu-profile " style="display:none">
        <ul>
            <li>
                <a>
                    <span class="icon-myprofile" aria-hidden="true"></span>
                    My
                    Profile</a>
            </li>
            <li>
                <a ng-click="openSubscription()">
                    <span aria-hidden="true">
                        <img class="subs-icon" src="{{ asset('image/subscription-icon-mobile.png') }}"
                            alt="">
                    </span>Subscription
                </a>
            </li>
            <li>
                <a ng-click="gotoPage('/watchlater')">
                    <span class="icon-watch-later" aria-hidden="true">

                    </span>
                    Watch Later</a>
            </li>
            <li>
                <a>
                    <span aria-hidden="true">
                        <img class="active-tv" src="{{ asset('image/activate-tv-new-dark.png') }}" alt="">
                    </span>Activate TV</a>
            </li>
            <li>
                <a>
                    <span class="icon-following" aria-hidden="true">
                    </span> My Preferences</a>
            </li>
            <li>
                <a>
                    <span class="icon-signout" aria-hidden="true">
                    </span> Sign Out</a>
            </li>
            <li>
                <a>
                    <span class="icon-signout" aria-hidden="true">
                    </span> Sign Out alldevices</a>
            </li>
        </ul>
    </div>

    <div style="margin-bottom: 90px; margin-top:10px;">


        @foreach ($displayTitles as $index =>$title)
            <a href="{{strtolower($title)}}"
            class="{{request()->is(strtolower($title))}}" >
        {{strtoupper($title)}}
            </a>
            <hr class="hr">
        @endforeach
        {{-- <a href="/home" class="active">Home</a>
        <hr class="hr">
        <a href="#">TV SHOWS</a>
        <hr class="hr">
        <a href="#">MOVIES</a>
        <hr class="hr">
        <a href="#">LIVE TV</a>
        <hr class="hr">
        <a href="#">NEWS</a>
        <hr class="hr">
        <a href="#">FOOD</a>
        <hr class="hr">
        <a href="#">HEALTH</a>
        <hr class="hr"> --}}

    </div>
    <div class="download-button" id="mydownload" style="width: 80%; visibility: visible;">
        <h3 style="color: #888888dd;  font-family: 'Montserrat', sans-serif;">
            DOWNLOAD APP
            <span class="fa fa-apple" style="font-size:26px">

            </span>
            <span class="fa fa-android" style="font-size: 26px">

            </span>
        </h3>
    </div>
</div>


{{-- searching code  --}}
<div id="myOverlay" class="overlay">
    <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
    <div class="overlay-content">
        <form action="/action_page.php">
            <input type="text" placeholder="Search.........." name="search">
        </form>
    </div>
</div>


{{-- Sign in page popup --}}
{{-- 
<div class="SignIn-overlay" id="SignIN">
    <div class="center">
        <span class="closebtn" onclick="SigninClose()" title="Close ">×</span>
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
                    <div class="fb"><img src="{{ asset('image/facebook-new.png') }}" width="27px"
                            height="27px" style="margin-top: -2px" />
                    </div>
                    <div class="go"><img src="{{ asset('image/google.png') }}" width="20px" height="20px" />
                    </div>
                </div>
                <a href="{{ asset('registration') }}">
                    <input type="sign-up" value="SIGN UP">
                </a>
        </form>
    </div>
</div> --}}


<script src="{{ asset('js/navbar.js') }}"></script>
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
