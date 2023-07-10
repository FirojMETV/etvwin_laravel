<link rel="stylesheet" href="{{asset('css/newcss.css')}}">
<nav class="main-nav-opaque">
    <div class="hamburger-button-div">
        <ul>
            <li>
                <span ng-click="OpenNavBar()" class="icon-menu hamburger-button" aria-hidden="true" role="button"
                    tabindex="0"></span>
            </li>
            <li class="logo-margin">
                <a ng-click="onLogoClicked()">
                    <img class="logo" alt="icon" src="{{ asset('image/logo.png') }} " width="50px" height="50px">
                </a>
            </li>
        </ul>
    </div>
    <div class="main-menu">
        <ul class="nav navbar-nav nav-pills">
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
                <a class="dropbtn ng-binding"
                    href="/telugu-movies">MOVIES</a>
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
                        <img src="{{asset('image/subscribe-small.png')}}" class="subscribe-icon-new"
                            alt="Subscribe-icon"></span>
                </a>

            </li>
            <li class="right-margin-search-icon"><a>
                    <span class="icon-search" ng-click="SearchVideos()" aria-hidden="true" role="button"
                        tabindex="0"></span></a>
            </li>
            <li class="dropdown non-mobile" ng-mouseleave="usermenuLeave()">
                <a>
                    <img alt="" id="menu-profile-img" ng-src="{{asset('image/usericon.png')}}"
                        src="{{asset('image/usericon.png')}}">
                </a>
                <div ng-if="isGuestUser &amp;&amp; !isPageLoading"
                    class="dropdown-content user drop-right-aligned ng-scope" style="">
                    <a ng-click="OpenSignIn()">SIGN IN</a>
                    <a ng-click="OpenSignUp()">SIGN UP</a>
                </div>

            </li>
        </ul>
    </div>
</nav>
