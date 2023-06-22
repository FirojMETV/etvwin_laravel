<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
{{-- navbar code  --}}
<div class="navbar-inverse " style="justify-content:space-between">
    <div class="container-fluid" style="display:inline-flex;">
        {{-- menu icon --}}
        <div class="visible-xs" style="margin-top:10px">
            <span style="font-size:30px;cursor:pointer ;
             color:aliceblue" onclick="openNav()">
                &#9776;
            </span>
        </div>
        {{-- left image --}}
        <div class="header mr-auto" style=" justify-content:space-around">
            <a class="navbar-brand ml-5" href="#">
                <img src="{{ asset('image/et.jpg') }}" height="40px" width="50px" alt=""
                    class="logo-img sm:pd-6 ">
            </a>
        </div>
        {{-- center text  --}}
        <ul class=" nav navbar-nav hidden-xs " style="margin: 10px 10px 5px 0px">
            <li class="active">
                <a class="nav-link " href="{{ url('/home') }}">HOME</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ url('/tv-shows') }}">TV SHOWS</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ url('/movies') }}">MOVIES</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ url('/live-tv') }}">LIVE TV</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ url('/news') }}">NEWS</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ url('/food') }}">FOOD</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ url('/health') }}">HEALTH</a>
            </li>
        </ul>
        {{-- right content --}}
        <div class="" style="display:inline-flex; ">
            <div style="display:inline; margin:10px 5px 10px 10px ">
                <a class="nav-link" href="javascript:void(0)">
                    <img src="{{ asset('image/subscribe.png') }}" height="50px" width="120px" alt=""
                        class="subscription-img" onclick="openSubcription()">
            </div>
            <div style="display: inline; margin:20px 5px 10px 10px">
                <a class="nav-link  " href="javascript:void(0);">
                    <img src="{{ asset('image/search.png') }}" height="35px" width="35px" alt=""
                        class="" onclick="openSearch()" />
                </a>
            </div>
            <div class="dropdown hidden-xs" style="display:inline;">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" href="{{ url('/profile') }}">
                    <img src="{{ asset('image/profile.png') }}" height="45px" width="45px" alt=""
                        class="profile-img" />
                </a>
                <ul class="dropdown-menu "
                    style="background: #191D4F !important ;
                             min-width:280px ; padding:10px 50px; font-size:15px;  ">
                    <li style="padding-bottom:22px">
                        <a href="{{asset('login')}}" style="color: #e7b851; background:#191D4F !important">SIGN IN</a>
                    </li>
                    <li>
                        <a href="{{asset('registration')}}" style="color:#e7b851; ; background:#191D4F !important;">SIGN OUT</a>
                    </li>
                </ul>
            </div>

            </ul>
        </div>
    </div>
</div>

{{-- Side-Drawer for menu --}}
<div id="mySidenav" class="sidenav " style="display:none;">
    <div class="signin" >
        <h5 style="padding-left: 010px; color:#dddd " > hey guest user !! </h5>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="d-inline" style="margin-bottom:30px;">
            <button href="{{asset('login')}}" onclick="{{asset('login')}}" type="button" class="col-sm-2 col-xs-4 btn form-button blue-button"
                style="margin-right: 4px " >
                SIGN IN</button>
            <button href="{{asset('registration')}}" type="button" class="col-sm-2 col-xs-4 btn form-button blue-button">
                SIGN UP
            </button>
        </div>
    </div>
    <div style="margin-bottom: 60px; margin-top:10px;" >
        <a href="#" class="active">Home</a>
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
        <hr class="hr">

    </div>
    <div class="download-button" id="mydownload">
        <h3 style="color: #888888dd">
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



<script src="{{ asset('js/navbar.js') }}"></script>
