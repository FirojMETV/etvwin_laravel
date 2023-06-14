

<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

<nav class="navbar">
    <div class="navbar-left" style="justify-content-center; padding-right:50px">
        {{-- left image --}}
       
            <a class="navbar-brand" href="#">
                <img src="{{ asset('image/et.jpg') }}" height="50px" width="50px" alt=""
                    class="logo-img sm:pd-6">
            </a>
  

        {{-- center text  --}}


        <ul class="Txt_item">
            <li class="nav-item" style="color:#e7b851 ;  ">
                <a class="nav-link " href="{{ url('/home') }}">HOME</a>
            </li>
            <li class="nav-item " style="color:#e7b851; ">
                <a class="nav-link" href="{{ url('/tv-shows') }}">TV SHOWS</a>
            </li>
            <li class="nav-item "style="color:#e7b851;    ">
                <a class="nav-link" href="{{ url('/movies') }}">MOVIES</a>
            </li>
            <li class="nav-item " style="color:#e7b851 ;   ">
                <a class="nav-link" href="{{ url('/live-tv') }}">LIVE TV</a>
            </li>
            <li class="nav-item " style="color:#e7b851 ;  ">
                <a class="nav-link" href="{{ url('/news') }}">NEWS</a>
            </li>
            <li class="nav-item " style="color:#e7b851 ;   ">
                <a class="nav-link" href="{{ url('/food') }}">FOOD</a>
            </li>
            <li class="nav-item " style="color:#e7b851 ; ">
                <a class="nav-link" href="{{ url('/health') }}">HEALTH</a>
            </li>
        </ul>
    </div>
   
        {{-- right content --}}
        <div class="navbar-form navbar-right " style="align-item:center; ">
            <ul class="nav navbar-nav navbar-right align-content-center align-self-center">
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
                <li class="dropdown">
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

<script src="{{ asset('js/navbar.js') }}"></script>
