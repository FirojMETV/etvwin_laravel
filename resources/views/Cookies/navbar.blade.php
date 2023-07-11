<link rel="stylesheet" href="{{ asset('css/newcss.css') }}">




<nav class="main-nav-opaque">
    <div class="hamburger-button-div">
        <ul>
            <li>
                <span ng-click="OpenNavBar()" class=" hamburger-button" aria-hidden="true" role="button" tabindex="0"
                    style="font-size:30px;cursor:pointer ;
                    color:aliceblue;left: -13px; top: -18px;" onclick="openNav()">
                    &#9776;</span>
            </li>
            <li class="logo-margin">
                <a ng-click="onLogoClicked()">
                    <img class="logo sm:pd-6" alt="icon" src="{{ asset('image/logo.png') }} " width="50px"
                        height="50px">
                </a>
            </li>
        </ul>
    </div>
    <div class="main-menu">
        <ul class="navs navbar-nav nav-pills">
            <li class="dropdown ng-scope active" role="button" tabindex="0" style="">
                <a ng-href="/home" ng-click="openDropDown(tab.display_title.toLowerCase())" class="dropbtn ng-binding"
                    href="/home">HOME</a>
                <span aria-hidden="true"></span>
            </li>
            <li class="dropdown ng-scope" role="button" tabindex="0" style="">
                <a ng-href="/tv-shows" class="dropbtn ng-binding" href="/tv-shows">TV SHOWS
                </a>
                <span aria-hidden="true"></span>

                <ul class="dropdown-content drop-center-aligned ng-scope">
                </ul>
            </li>
            <li class="dropdown ng-scope" role="button" tabindex="0">
                <a class="dropbtn ng-binding" href="/telugu-movies">MOVIES</a>
                <span aria-hidden="true">
                </span>

                <ul ng-if="tab.friendly_id!='home'" class="dropdown-content drop-center-aligned ng-scope"
                    ng:class="{channels:tab.display_title.toLowerCase()==='channels'}">
                </ul>
            </li>
            <li class="dropdown ng-scope" role="button" tabindex="0">
                <a class="dropbtn ng-binding" href="/live">LIVE TV</a>
                <span aria-hidden="true"></span>

                <ul ng-if="tab.friendly_id!='home'" class="dropdown-content drop-center-aligned ng-scope">

                </ul>
            </li>
            <li class="dropdown ng-scope" role="button" tabindex="0">
                <a class="dropbtn ng-binding" href="/news">NEWS</a>
                <span aria-hidden="true"></span>
                <ul class="dropdown-content drop-center-aligned ng-scope">

                </ul>
            </li>
            <li class="dropdown ng-scope" role="button" tabindex="0">
                <a class="dropbtn ng-binding" href="/recipes">FOOD</a>
                <span aria-hidden="true">
                </span>
                <ul class="dropdown-content drop-center-aligned ng-scope">

                </ul>
            </li>
            <li class="dropdown ng-scope" role="button" tabindex="0">
                <a class="dropbtn ng-binding" href="/health">HEALTH
                </a>
                <span ng-class="{'more-icon':tab.display_title == 'MORE'}" aria-hidden="true">
                </span>
                <ul class="dropdown-content drop-center-aligned ng-scope">
                </ul>
            </li>
        </ul>
    </div>
    <div class="mobile-os-list">
        <ul>
            <li>
                <a ng-if="showSubscriptionIcon" ng-click="openSubscription()" class="ng-scope">
                    <span aria-hidden="true">
                        <img src="{{ asset('image/subscribe-small.png') }}" class="subscribe-icon-new"
                            alt="Subscribe-icon"></span>
                </a>

            </li>
            <li class="right-margin-search-icon">
                <a class="icon-search">
                    <img src="{{ asset('image/search.png') }}" alt="" style="    height: 30px; width: 30px;">
                </a>
            </li>
            <li class="dropdown non-mobile">
                <a class="dropdown">
                    <img alt="" id="menu-profile-img" ng-src="{{ asset('image/usericon.png') }}"
                        src="{{ asset('image/usericon.png') }}">
                </a>
                <ul ng-if="!isGuestUser &amp;&amp; !isPageLoading"
                    class="dropdown-content user drop-right-aligned ng-scope" >
                    <li><a ng-click="openProfile('/profile')" class="my-profile-tab">
                            <span class="drop-down-icons my-profile-icon" aria-hidden="true">
                                <img src="{{ asset('image/usericon.png') }}" alt="">
                            </span>
                            <span class="drop-text">My Profile
                            </span>
                        </a>
                    </li>
                    <li>
                        <a ng-click="openSubscription()" class="subscription-tab">
                            <span class="drop-down-icons subscription-icon" aria-hidden="true">
                                <img src="{{ asset('image/subscription-icon-dark.png') }}" alt="">
                            </span>
                            <span class="drop-text subscribe-text" style="    margin-left: -16px;">Subscription
                            </span>
                        </a>
                    </li>
                    <li><a ng-click="gotoPage('/watchlater')">
                            <span class="icon-watch-later 	 drop-down-icons" aria-hidden="true">
                                <img src="{{ asset('image/hide.png') }}" alt="">
                            </span>
                            <span class="drop-text">Watch Later

                            </span>
                        </a>
                    </li>
                    <li><a ng-click="gotoPage('/active')" class="activate-tv">
                            <span class="drop-down-icons activate-change" aria-hidden="true">
                               
                                <img src="{{ asset('image/activate-tv-new-dark.png') }}" alt="">
                            </span>
                            <span class="drop-text activate-tv-text">Activate TV</span>
                        </a>
                    </li>
                    <li><a ng-click="gotoPage('/preference')">
                            <span class="icon-following drop-down-icons" aria-hidden="true">
                                <img src="{{ asset('image/ajust.png') }}" alt="">
                            </span>
                            <span class="drop-text">My Preferences</span>
                        </a>
                    </li>
                    <li>
                        <a ng-click="logOut()">
                            <span class="icon-signout drop-down-icons" aria-hidden="true">
                                <img src="{{asset('image/logout.png')}}" alt="" style="transform: rotate(270deg);">
                            </span>
                            <span class="drop-text">Sign Out</span></a>
                    </li>
                    <li>
                        <a ng-click="logOutAll()">
                            <span class="icon-signout drop-down-icons" aria-hidden="true">
                                <img src="{{asset('image/logout.png')}}" alt="" style="transform: rotate(270deg);">
                            </span>
                            <span class="drop-text">Sign Out all devices

                            </span>
                        </a>
                    </li>
                </ul>

            </li>
        </ul>
    </div>
</nav>


<div id="mySidenav" class="sidenav " style="display:none;">
    <div class="signin">
        <div class="guest-user-option">
            <h5 style="padding-left:  10px; color:#dddd "> hey guest user !! </h5>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="d-inline" style="margin-bottom:30px;">
                <button href="{{ asset('login') }}" onclick="openSignIN()" type="button"
                    class="col-sm-6 col-xs-6 btn form-button blue-button" style="margin-right: 4px ">
                    SIGN IN</button>
                <button href="{{ asset('registration') }}" type="button"
                    class="col-sm-6 col-xs-6 btn guest-sign-up form-button" onclick="SignUPopen()">
                    SIGN UP
                </button>
            </div>
        </div>
    </div>
    <div style="margin-bottom: 60px; margin-top:10px;">
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
    <div class="download-button" id="mydownload" style="width: 70%; visibility: visible;">
        <h3 style="color: #888888dd">
            DOWNLOAD APP
            <span class="fa fa-apple" style="font-size:26px">

            </span>
            <span class="fa fa-android" style="font-size: 26px">

            </span>
        </h3>
    </div>
</div>

<script src="{{ asset('js/navbar.js') }}"></script>
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
