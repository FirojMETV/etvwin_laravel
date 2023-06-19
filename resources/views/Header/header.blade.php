<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

<div class="navbar navbar-inverse ">
    <div class=" d-flex container-fluid justify-content-center" style="">
        {{-- left image --}}
    <div class="hidden-lg"> <span style="font-size:30px;cursor:pointer ; color:aliceblue" onclick="openNav()">&#9776; </span>
    </div>
        <div class="header">

            <a class="navbar-brand" href="#">
                <img src="{{ asset('image/et.jpg') }}" height="50px" width="50px" alt=""
                    class="logo-img sm:pd-6">
            </a>
        </div>
        {{-- center text  --}}
        <ul class=" nav navbar-nav   hidden-xs mr-auto">
            <li class="active">
                <a class=" " href="{{ url('/home') }}">HOME</a>
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
        <div class="d-flex  navbar-right ">
            <ul class="nav navbar-nav flex-direction-sm-row ">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('subscribe') }}">
                        <img src="{{ asset('image/subscribe.png') }}" height="50px" width="120px" alt=""
                            class="subscription-img">
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="{{ url('/search') }}">
                        <img src="{{ asset('image/search.png') }}" height="35px" width="35px" alt=""
                            class="search-img " />
                    </a>
                </li>
                <li class="dropdown hidden-xs">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" href="{{ url('/profile') }}">
                        <img src="{{ asset('image/profile.png') }}" height="45px" width="45px" alt=""
                            class="profile-img  color-#00021d " />
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
        <div id="mySidenav" class="sidenav hidden-xs">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <div >
            <a href="#">Home</a>
            <a href="#">TV SHOWS</a>
            <a href="#">MOVIES</a>
            <a href="#">LIVE TV</a>
            <a href="#">NEWS</a>
            <a href="#">FOOD </a>
            <a href="#">HEALTH</a>
          </div>
        </div>

        <!-- Use any element to open the sidenav -->


        <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
        <div id="main">
            ...
        </div>
    </div>

    <script src="{{ asset('js/navbar.js') }}"></script>
