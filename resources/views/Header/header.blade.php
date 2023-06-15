<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

<nav class="navbar navbar-inverse " style="background: #00021c !important ; justify-content:center">
    <div class="container-fluid justify-content-center" style="justify-content-center; padding-right:50px">
        {{-- <button 
        style="width: 10px" 
        class="navbar-toggler"
         type="button" 
         data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent"
             aria-controls="navbarSupportedContent" 
             aria-expanded="false"
            aria-label="Toggle navigation">
            <span style='font-size:10px; '>&#10070;</span>
        </button> --}}

        {{-- left image --}}
        <div class="header" style="padding:5x 43px !important">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('image/et.jpg') }}" height="50px" width="50px" alt=""
                    class="logo-img sm:pd-6">
            </a>
        </div>

        {{-- center text  --}}

        <div  class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class=" nav navbar-nav justify-content-center  nav-pills me-auto mb-2 mb-lg-0"
                style="align-content: center !important ; align-item-center !important ; margin:20px 10px 10px 30px; font-size: 20px ">
                <li class="nav-item" style="color:#e7b851 ; padding:0px 10px 0px 10px ">
                    <a class="nav-link " href="{{ url('/home') }}">HOME</a>
                </li>
                <li class="nav-item " style="color:#e7b851;  padding:0px 10px 0px 10px ">
                    <a class="nav-link" href="{{ url('/tv-shows') }}">TV SHOWS</a>
                </li>
                <li class="nav-item "style="color:#e7b851;   padding:0px 10px 0px 10px   ">
                    <a class="nav-link" href="{{ url('/movies') }}">MOVIES</a>
                </li>
                <li class="nav-item " style="color:#e7b851 ; padding:0px 10px 0px 10px  ">
                    <a class="nav-link" href="{{ url('/live-tv') }}">LIVE TV</a>
                </li>
                <li class="nav-item " style="color:#e7b851 ;  padding:0px 10px 0px 10px  ">
                    <a class="nav-link" href="{{ url('/news') }}">NEWS</a>
                </li>
                <li class="nav-item " style="color:#e7b851 ; padding:0px 10px 0px 10px  ">
                    <a class="nav-link" href="{{ url('/food') }}">FOOD</a>
                </li>
                <li class="nav-item " style="color:#e7b851 ; padding:0px 10px 0px 10px  ">
                    <a class="nav-link" href="{{ url('/health') }}">HEALTH</a>
                </li>
            </ul>
        </div>


        {{-- right content --}}
        {{-- <div class="navbar-form navbar-right d-flex align-items-center" style="align-item:center; "> --}}
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
          {{-- </div> --}}
    </div>

</nav>

<script src="{{ asset('js/navbar.js') }}"></script>
