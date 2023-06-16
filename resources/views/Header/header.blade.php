<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

<nav class="d-block navbar navbar-inverse " style="background: #00021c !important ; justify-content:center">

   

    <div class="container-fluid justify-content-center d-flex" style="justify-content-center; padding-right:50px">
        <div class="header ml-5" >
            <a class="navbar-brand" href="#">
                <img src="{{ asset('image/et.jpg') }}" height="50px" width="50px" alt=""
                    class="logo-img sm:pd-6">
            </a>
        </div>
        <div class="hidden-xs" style="background: #addaef">
            <span style="color: #e7b851" class="red"></span>
            <span></span>
            <span></span>
          </div>
        {{-- center text  --}}

        <div  class="collapse navbar-collapse hidden-sm d-inline-block " id="navbarSupportedContent">
            <ul class=" nav navbar-nav justify-content-center  nav-pills "
                style="align-content: center !important ; align-item-center !important ;  font-size: 20px ">
                <li class="nav-item" >
                    <a class="nav-link red " href="{{ url('/home') }}">HOME</a>
                </li>
                <li class="nav-item " >
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
        </div>


        {{-- right content --}}
      <div class="d-inline-block align-content-center ">
            <ul class="navbar-nav nav navbar-right">
                <li class="nav-item  height-xs-20px width-xs-40px">
                    <a class="nav-link" href="{{ url('C:/xampp/firoj/webwin_project/image/subscribe.png') }}">
                        <img src="{{ asset('image/subscribe.png') }}" height="50px" width="120px" alt=""
                            class="subscription-img">
                    </a>
                </li>
                  <li class="nav-item align-items-xs-start mt-15" style="">
                    <a class="nav-link " href="{{ url('/search') }}">
                        <img src="{{ asset('image/search.png') }}" height="35px" width="35px" alt=""
                            class="search-img " />
                    </a>
                </li>
                <li class="dropdown hidden-xs">
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
    </div>

</nav>

<script src="{{ asset('js/navbar.js') }}"></script>
