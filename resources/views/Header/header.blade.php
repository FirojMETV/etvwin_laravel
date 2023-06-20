<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

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
                <a class="nav-link" href="{{ url('subscribe') }}">
                    <img src="{{ asset('image/subscribe.png') }}" height="50px" width="120px" alt=""
                        class="subscription-img">
            </div>
            <div style="display: inline; margin:20px 5px 10px 10px">
                <a class="nav-link  " href="javascript:void(0);">
                    <img src="{{ asset('image/search.png') }}" height="35px" width="35px" alt=""
                        class="search-img " onclick="openSearch()" />
                </a>
            </div>
            <div class="dropdown hidden-xs" style="display:inline;">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" href="{{ url('/profile') }}">
                    <img src="{{ asset('image/profile.png') }}" height="45px" width="45px" alt=""
                        class="profile-img   " />
                </a>
                <ul class="dropdown-menu "
                    style="background: #191D4F !important ;
                             min-width:280px ; padding:10px 50px; font-size:15px;  ">
                    <li style="padding-bottom:22px">
                        <a href="#" style="color: #e7b851 ; background:#191D4F !important ">SIGN IN</a>
                    </li>
                    <li>
                        <a href="#" style="color:#e7b851 ; background:#191D4F !important;">SIGN OUT</a>
                    </li>
                </ul>
            </div>

            </ul>
        </div>
    </div>
</div>

<div id="mySidenav" class="sidenav " style="display:none;">
    <div class="signin" style="background: linear-gradient(#598a59,#91914a) ; ">
        hey guest user !!
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <div class="d-inline" style="margin-bottom:10px;">
            <button href="#" type="button" class="col-sm-1 col-xs-6 btn form-button blue-button">SIGN IN</button>
            <button href="#" type="button"  class="col-sm-1 col-xs-6 btn form-button blue-button">
                SIGN UP
            </button>
        </div>
    </div>
    <hr class="rounded">
    <div>
        <a href="#">Home</a>
        <hr class="rounded">
        <a href="#">TV SHOWS</a>
        <hr class="rounded">
        <a href="#">MOVIES</a>
        <hr class="rounded">
        <a href="#">LIVE TV</a>
        <hr class="rounded">
        <a href="#">NEWS</a>
        <hr class="rounded">
        <a href="#">FOOD</a>
        <hr class="rounded">
        <a href="#">HEALTH</a>
    </div>
</div>
<div id="myOverlay" class="overlay">
    <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
    <div class="overlay-content">
        <form action="/action_page.php">
            <input type="text" placeholder="Search.." name="search">

        </form>
    </div>
</div>

<script src="{{ asset('js/navbar.js') }}"></script>
