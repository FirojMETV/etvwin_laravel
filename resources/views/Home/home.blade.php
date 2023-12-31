@extends('layout')
@section('title', 'Home')

<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<script type="text/javascript" src="{{ URL::asset('js/owl.carousel.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
<link rel="stylesheet" href="{{ URL::asset('css/owl.theme.default.css') }}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js"></script>

@section('content')
    <div class="container-fluid mt-5" style="padding-top:70px;  overflow:hidden;">

        @php
            if ($layout_type === 'top_banner');
        @endphp
        <div class="main-page-item">
            <div class="owl-carousel owl-theme fluid  lazyload-background" id="main-page">
                @foreach ($web_banner_url as $index => $url)
                    @if (isset($mobile_size_url[$index]))
                        <div class="item">
                            <div class="ms-2 me-2">
                                <a href="{{ $url }}">
                                    <div class="cover-image channel_banner gen_desktop_image " {{-- data-src="{{ $url }}" --}}
                                        style="background:url({{ $url }});
                                            background-repeat: no-repeat;background-position: center 20%;background-size: cover;">

                                    </div>
                                    <div class="cover-image channel_banner gen_mobile_image"
                                        style="background:url({{ $mobile_size_url[$index] }});background-repeat: no-repeat;">
                                    </div>
                                    <img src='{{ asset('image/crown-small.png') }}' alt="" class="premium-badge">
                                    <div id="carousel-caption">
                                        <img src="{{ asset('image/play-btn-new-big.png') }}" alt=""
                                            id="carousel-play-btn">
                                    </div>
                                </a>
                                <a class="left carousel-control    remove-gradient" role="button" data-slide="prev"></a>
                                <a class="next carousel-control  remove-gradient" role="button" data-slide="next"></a>

                            </div>
                        </div>
                    @endif
                @endforeach

                {{-- <div class="ms-2 me-2">
                    <a href="">
                        <div class="cover-image channel_banner gen_desktop_image card-img-top"
                            style="background:url(https://etv-win-image.akamaized.net/etvwin/exclusives/shows/asalu/subcategories/season1/episodes/asalumovie/78984/asalu-movie-Asalu_Movie-1960x600.jpg);background-repeat: no-repeat;background-position: center 20%;background-size: cover;">
                        </div>

                        <div class="cover-image channel_banner gen_mobile_image"
                            style="background:url(https://etv-win-image.akamaized.net/etvwin/exclusives/shows/asalu/subcategories/season1/episodes/asalumovie/78984/asalu-movie-Asalu_Movie-640x480.jpg);
                            background-repeat: no-repeat;">
                        </div>
                        <img src='{{ asset('image/crown-small.png') }}' alt="" class="premium-badge">
                        <div id="carousel-caption">
                            <img src="{{asset('image/play-btn-new-big.png')}}" alt="" id="carousel-play-btn">
                        </div>
                    </a>
                    <a class="left carousel-control" role="button" data-slide="prev"></a>
                    <a class="next carousel-control" role="button" data-slide="next"></a>
                </div>
                <div class="ms-2 me-2">
                    <a href="">
                        <div class="cover-image channel_banner gen_desktop_image card-img-top"
                            style="background:url(https://etv-win-image.akamaized.net/etvwin/exclusives/shows/asalu/subcategories/season1/episodes/asalumovie/78984/asalu-movie-Asalu_Movie-1960x600.jpg);background-repeat: no-repeat;background-position: center 20%;background-size: cover;">
                        </div>

                        <div class="cover-image channel_banner gen_mobile_image"
                            style="background:url(https://etv-win-image.akamaized.net/etvwin/exclusives/shows/asalu/subcategories/season1/episodes/asalumovie/78984/asalu-movie-Asalu_Movie-640x480.jpg);
                        background-repeat: no-repeat;">
                        </div>
                        <img src='{{ asset('image/crown-small.png') }}' alt="" class="premium-badge">
                        <div id="carousel-caption">
                            <img src="{{asset('image/play-btn-new-big.png')}}" alt="" id="carousel-play-btn">
                        </div>
                    </a>
                    <a class="left carousel-control" role="button" data-slide="prev"></a>
                    <a class="next carousel-control" role="button" data-slide="next"></a>
                </div>
                <div class="ms-2 me-2">
                    <a href="">
                        <div class="cover-image channel_banner gen_desktop_image card-img-top"
                            style="background:url(https://etv-win-image.akamaized.net/etvwin/exclusives/shows/matchfixing/subcategories/season1/episodes/matchfixing/80170/match-fixing-Match_Fixing_Movie_28042023-1960x600.jpg);background-repeat: no-repeat;background-position: center 20%;background-size: cover;">
                        </div>

                        <div class="cover-image channel_banner gen_mobile_image"
                            style="background:url(https://etv-win-image.akamaized.net/etvwin/exclusives/shows/matchfixing/subcategories/season1/episodes/matchfixing/80170/match-fixing-Match_Fixing_Movie_28042023-640x480.jpg);background-repeat: no-repeat;">
                        </div>

                        <img src='{{ asset('image/crown-small.png') }}' alt="" class="premium-badge">
                        <div id="carousel-caption">
                            <img src="{{asset('image/play-btn-new-big.png')}}" alt="" id="carousel-play-btn" />
                        </div>
                    </a>
                    <a class="left carousel-control" role="button" data-slide="prev"></a>
                    <a class="next carousel-control" role="button" data-slide="next"></a>
                </div>
                <div class="item">
                    <a ng-if="item.title !== 'Welcome to ETV Telugu'"
                        ng-href="/win-exclusive/dear-megha/season-1-10/dear-megha-1" class="ng-scope"
                        href="/win-exclusive/dear-megha/season-1-10/dear-megha-1">
                        <div class="cover-image channel_banner gen_desktop_image"
                            style="background:url(https://etv-win-image.akamaized.net/etvwin/exclusives/shows/dearmegha/subcategories/season1/episodes/dearmegamovie/61949/dear-mega-movie-Dear_megha_Movie-1960x600.jpg);background-repeat: no-repeat;background-position: center 20%;background-size: cover;">
                        </div>
                        <div class="cover-image channel_banner gen_mobile_image"
                            style="background:url(https://etv-win-image.akamaized.net/etvwin/exclusives/shows/dearmegha/subcategories/season1/episodes/dearmegamovie/48056/dear-mega-movie-Dear_megha_Movie-640x480.jpg);background-repeat: no-repeat;">
                        </div>
                        <img class="premium-badge ng-scope" alt="premium" src='{{ asset('image/crown-small.png') }}'>

                        <div id="carousel-caption">
                            <img src="{{asset('image/play-btn-new-big.png')}}" alt="" id="carousel-play-btn">
                        </div>
                    </a>
                    <a class="left carousel-control" role="button" data-slide="prev"></a>
                    <a class="next carousel-control" role="button" data-slide="next"></a>
                </div> --}}

            </div>
        </div>
        {{-- Continue Watching --}}
     
        <div class="Recommended-For-You carousel-list">
            <a href="" class="section-title">Continue Watching </a>
            <div class="owl-carousel owl-theme fluid" id="continue_watching" style="top: 15px">
                @foreach ($continue as $url => $index)
                    <div class="item">
                        <a href="/win-exclusive/kanulu-therichinaa-kanulu-moosinaa/season-1-10/kanulu-therichinaa-kanulu-moosinaa"
                            style="text-decoration: none">
                            <div class="item card-item">
                                <div class="image-holder">
                                    <img alt="icon" src="{{ $index }}" lazy-img="">
                                    <img id="small-play-btn" alt="play"
                                        src='{{ asset('image/play-btn-new-big.png') }}'class="ng-scope">
                                    <img class="premium-badge ng-scope" alt="premium"
                                        src='{{ asset('image/crown-small.png') }}'>
                                </div>
                                <h6 ng-if="listItem.show_meta_data=='yes'" class="ng-scope"><span ng-bind="listItem.title"
                                        class="ng-binding">Kanulu Therichinaa Kanulu
                                        Moosinaa</span> <span class="gray-dash">|</span>
                                    <format-date date="listItem.release_date_string" utsdate="listItem.release_date_uts"
                                        class="ng-isolate-scope">
                                        <span ng-bind="formattedDate" class="ng-binding">16 Jun
                                            23</span>
                                    </format-date>
                                </h6>
                            </div>
                        </a>
                        <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a><a
                            class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- WIN-Exclusive --}}
      
        <div class="WIN-Exclusives carousel-list">
            <a href="" class="section-title">WIN-Exclusive</a>
            <a href="" class="see-all-link left-margin-episode " style="text-decoration: none">+More</a>
            <div class="owl-carousel owl-theme fluid " id="another-carousel">
                {{-- @foreach ($web_banner_urls as $index => $url)
                    @if (isset($mobile_size_url[$index]))
                        <div class="item">
                            <a href="{{ $url }}">
                                <div class="item card-item tv-shows-banner">
                                    <div class="image-holder">
                                        <div class="cover-image channel_banner gen_desktop_image"
                                            style="background:url({{ $url }});
                                    background-repeat: no-repeat;background-position: center 20%;background-size: cover;">
                                        </div>
                                        <div class="cover-image channel_banner gen_mobile_image"
                                            style="background:url({{ $mobile_size_url[$index] }});background-repeat: no-repeat;">
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                            <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                        </div>
                    @endif
                @endforeach --}}

                <div class="item">
                    <a ng-href="/win-exclusive/kanulu-therichinaa-kanulu-moosinaa"
                        href="/win-exclusive/kanulu-therichinaa-kanulu-moosinaa">
                        <div class="item card-item tv-shows-banner">
                            <div class="image-holder">
                                <div class="cover-image channel_banner gen_desktop_image"
                                    style="background:url(https://etv-win-image.akamaized.net/etvwin/exclusives/shows61367/kanulu-therichinaa-kanulu-moosinaa/images/kanulu-therichinaa-kanulu-moosinaa-1960x600.jpg);background-repeat: no-repeat;background-position: center 20%;background-size: cover;">
                                </div>
                                <div class="cover-image channel_banner gen_mobile_image"
                                    style="background:url(https://etv-win-image.akamaized.net/etvwin/exclusives/shows61367/kanulu-therichinaa-kanulu-moosinaa/images/kanulu-therichinaa-kanulu-moosinaa-640x480.jpg);background-repeat: no-repeat;">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- <div class="item">
                    <a ng-href="/win-exclusive/kanulu-therichinaa-kanulu-moosinaa"
                        href="/win-exclusive/kanulu-therichinaa-kanulu-moosinaa">
                        <div class="item card-item tv-shows-banner">
                            <div class="image-holder">
                                <div class="cover-image channel_banner gen_desktop_image"
                                    style="background:url(https://etv-win-image.akamaized.net/etvwin/exclusives/shows61367/kanulu-therichinaa-kanulu-moosinaa/images/kanulu-therichinaa-kanulu-moosinaa-1960x600.jpg);background-repeat: no-repeat;background-position: center 20%;background-size: cover;">
                                </div>
                                <div class="cover-image channel_banner gen_mobile_image"
                                    style="background:url(https://etv-win-image.akamaized.net/etvwin/exclusives/shows61367/kanulu-therichinaa-kanulu-moosinaa/images/kanulu-therichinaa-kanulu-moosinaa-640x480.jpg);background-repeat: no-repeat;">
                                </div>
                            </div>
                        </div>
                    </a>
                </div> --}}
            </div>
        </div>

        {{-- Before TV --}}
      
        <div class="Before TV carousel-list">
            <a href="" class="section-title">Before TV</a>
            <a href="" class="see-all-link left-margin-episode " style="text-decoration: none">+More</a>
            <div class="owl-carousel owl-theme fluid" id='Before-TV'>
                {{-- @foreach ($high_4_3 as $url => $index)
                    @if (isset($title[$url]) && isset($publishday[$url]))
                        <div class="item ">
                            <a href="{{ $index }}" style="text-decoration: none;">
                                <div class="item card-item">
                                    <div class="image-holder">
                                        <img alt="icon" src="{{ $index }}" lazy-img="{{ $index }}">
                                        <img id="small-play-btn" alt="play"
                                            src="{{ asset('image/play-btn-new-big.png') }}" class="ng-scope">
                                        <img class="premium-badge ng-scope" alt="premium"
                                            src='{{ asset('image/crown-small.png') }}'>
                                    </div>
                                    <h6 ng-if="listItem.show_meta_data=='yes'" class="ng-scope">
                                        <span ng-bind="listItem.title" class="ng-binding">
                                            {{ $title[$url] }}</span>
                                        <span class="gray-dash">|</span>
                                        <format-date class="ng-isolate-scope">
                                            <span ng-bind="formattedDate" class="ng-binding">
                                                {{ $publishday[$url] }}</span>
                                        </format-date>
                                    </h6>
                                </div>
                            </a>
                            <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a><a
                                class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                        </div>
                    @endif
                @endforeach --}}
            </div>

        </div>




        {{-- Live Tv --}}
       
        <div class="Live-Tv carousel-list">
            <a href="" class="section-title">Live Tv</a>
            <a class="see-all-link left-margin-episode  hideMoreBar" style="text-decoration: none">+ More</a>
            <div class="owl-carousel owl-theme" id="Live-TV">
                {{-- @foreach ($medium_3_4 as $index => $url)
                    <div class="item card-item">
                        <a href="">
                            <div class="image-holder">
                                <img src="{{ $url }}" lazy-img="{{ $url }}" alt="thumbnails">
                                <img src='{{ asset('image/crown-small.png') }}' alt="" class="premium-badge">
                            </div>
                        </a>
                    </div>
                @endforeach --}}

                <div class="item card-item">
                    <a href="">
                        <div class="image-holder">
                            <img src="https://etv-win-image.akamaized.net/etvwin/live/channel/27931/etv-cinema-270x360.jpg"
                                lazy-img="https://etv-win-image.akamaized.net/etvwin/live/channel/27931/etv-cinema-270x360.jpg"
                                alt="thumbnails">
                            <img src='{{ asset('image/crown-small.png') }}' alt="" class="premium-badge">
                        </div>
                    </a>
                </div>
                {{-- <div class="item card-item">
                    <a href="">
                        <div class="image-holder">
                            <img src="https://etv-win-image.akamaized.net/etvwin/live/channel/27931/etv-cinema-270x360.jpg"
                                lazy-img="https://etv-win-image.akamaized.net/etvwin/live/channel/27931/etv-cinema-270x360.jpg"
                                alt="thumbnails">
                            <img src='{{ asset('image/crown-small.png') }}' alt="" class="premium-badge">
                        </div>
                    </a>
                </div>
                <div class="item card-item">
                    <a href="">
                        <div class="image-holder">
                            <img src="https://etv-win-image.akamaized.net/etvwin/live/channel/27931/etv-cinema-270x360.jpg"
                                lazy-img="https://etv-win-image.akamaized.net/etvwin/live/channel/27931/etv-cinema-270x360.jpg"
                                alt="thumbnails">
                            <img src='{{ asset('image/crown-small.png') }}' alt="" class="premium-badge">
                        </div>
                    </a>
                </div>
                <div class="item card-item">
                    <a href="">
                        <div class="image-holder">
                            <img src="https://etv-win-image.akamaized.net/etvwin/live/channel/27931/etv-cinema-270x360.jpg"
                                lazy-img="https://etv-win-image.akamaized.net/etvwin/live/channel/27931/etv-cinema-270x360.jpg"
                                alt="thumbnails">
                            <img src='{{ asset('image/crown-small.png') }}' alt="" class="premium-badge">
                        </div>
                    </a>
                </div>
                <div class="item card-item">

                    <a href="">
                        <div class="image-holder">
                            <img src="https://etv-win-image.akamaized.net/etvwin/live/channel/27931/etv-cinema-270x360.jpg"
                                lazy-img="https://etv-win-image.akamaized.net/etvwin/live/channel/27931/etv-cinema-270x360.jpg"
                                alt="thumbnails">
                            <img src='{{ asset('image/crown-small.png') }}' alt="" class="premium-badge">
                        </div>
                    </a>
                </div>
                <div class="item card-item">
                    <a href="">
                        <div class="image-holder">
                            <img src="https://etv-win-image.akamaized.net/etvwin/live/channel/27931/etv-cinema-270x360.jpg"
                                lazy-img="https://etv-win-image.akamaized.net/etvwin/live/channel/27931/etv-cinema-270x360.jpg"
                                alt="thumbnails">
                            <img src='{{ asset('image/crown-small.png') }}' alt="" class="premium-badge">
                        </div>
                    </a>
                </div> --}}

            </div>
        </div>

        {{-- TV shows  --}}
       
        <div class="TV-SHows carousel-list">
            <a href="" class="section-title"> Tv Shows</a>
            <a href="" class="see-all-link left-margin-episode " style="text-decoration: none">+More</a>
            <div class="owl-carousel owl-theme fluid " id="TV-shows-carousel">
                {{-- @foreach ($tvshowurl as $index => $url)
                    @if (isset($tvshowand[$index]))
                        <div class="item ">
                            <a href="{{ $url }}">
                                <div class="item card-item tv-shows-banner">
                                    <div class="image-holder">
                                        <div class="cover-image channel_banner gen_desktop_image"
                                            style="background:url({{ $url }});background-repeat: no-repeat;
                                    background-position: center 20%;background-size: cover;">
                                        </div>
                                        <div class="cover-image channel_banner gen_mobile_image"
                                            style="background:url({{ $tvshowand[$index] }});background-repeat: no-repeat;">
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="left carousel-control" role="button" data-slide="prev"></a>
                            <a class="right carousel-control" role="button" data-slide="next"></a>
                        </div>
                    @endif
                @endforeach --}}
                <div class="item ">
                    <a href="/shows/padutha-theeyaga-1">
                        <div class="item card-item tv-shows-banner">
                            <div class="image-holder">
                                <div class="cover-image channel_banner gen_desktop_image"
                                    style="background:url(https://etv-win-image.akamaized.net/etvwin/shows/shows34715/padutha-theeyaga/images/padutha-theeyaga-1960x600.jpg);background-repeat: no-repeat;
                                    background-position: center 20%;background-size: cover;">
                                </div>
                                <div class="cover-image channel_banner gen_mobile_image"
                                    style="background:url(https://etv-win-image.akamaized.net/etvwin/shows/shows34715/padutha-theeyaga/images/padutha-theeyaga-640x480.jpg);background-repeat: no-repeat;">
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="left carousel-control" role="button" data-slide="prev"></a>
                    <a class="right carousel-control" role="button" data-slide="next"></a>
                </div>
                {{-- <div class="item ">
                    <a href="/shows/padutha-theeyaga-1">
                        <div class="item card-item tv-shows-banner">
                            <div class="image-holder">
                                <div class="cover-image channel_banner gen_desktop_image"
                                    style="background:url(https://etv-win-image.akamaized.net/etvwin/shows/shows34715/padutha-theeyaga/images/padutha-theeyaga-1960x600.jpg);background-repeat: no-repeat;
                                    background-position: center 20%;background-size: cover;">
                                </div>
                                <div class="cover-image channel_banner gen_mobile_image"
                                    style="background:url(https://etv-win-image.akamaized.net/etvwin/shows/shows34715/padutha-theeyaga/images/padutha-theeyaga-640x480.jpg);background-repeat: no-repeat;">
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="left carousel-control" role="button" data-slide="prev"></a>
                    <a class="right carousel-control" role="button" data-slide="next"></a>
                </div>
                <div class="item ">
                    <a href="/shows/padutha-theeyaga-1">
                        <div class="item card-item tv-shows-banner">
                            <div class="image-holder">
                                <div class="cover-image channel_banner gen_desktop_image"
                                    style="background:url(https://etv-win-image.akamaized.net/etvwin/shows/shows34715/padutha-theeyaga/images/padutha-theeyaga-1960x600.jpg);background-repeat: no-repeat;
                                    background-position: center 20%;background-size: cover;">
                                </div>
                                <div class="cover-image channel_banner gen_mobile_image"
                                    style="background:url(https://etv-win-image.akamaized.net/etvwin/shows/shows34715/padutha-theeyaga/images/padutha-theeyaga-640x480.jpg);background-repeat: no-repeat;">
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="left carousel-control" role="button" data-slide="prev"></a>
                    <a class="right carousel-control" role="button" data-slide="next"></a>
                </div> --}}

            </div>

        </div>


        {{-- trending show --}}
        
        <div class="trending-shows carousel-list">
            <a href="" class="section-title">Trending</a>
            <a href="" class="see-all-link left-margin-episode " style="text-decoration: none">+More</a>
            <div class="owl-carousel owl-theme fluid " id='Trending-carousel'>
                {{-- @foreach ($tvTrendingand as $url => $index)
                    <div class="item ng-scope">
                        <a href="{{ $index }}">
                            <div class="item card-item" ng-class="{'image-flat':item.curved_edges== true}">
                                <div class="image-holder ng-scope" ng-class="{'rounded':item.curved_edges== true}"
                                    ng-if="!listItem.media_list_in_list"> <img src="{{ $index }}"
                                        lazy-img="{{ $index }}" alt="thumbnails">
                                </div>

                            </div>
                        </a>
                        <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                        <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                    </div>
                @endforeach --}}
                <div class="item ng-scope">
                    <a ng-href="/serials/srivalli" href="/serials/srivalli">
                        <div class="item card-item" ng-class="{'image-flat':item.curved_edges== true}">
                            <div class="image-holder ng-scope" ng-class="{'rounded':item.curved_edges== true}"
                                ng-if="!listItem.media_list_in_list"> <img
                                    src="https://etv-win-image.akamaized.net/etvwin/serials/shows21815/srivalli/images/srivalli-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows21815/srivalli/images/srivalli-270x360.jpg"
                                    alt="thumbnails">
                            </div>

                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>

                {{-- <div class="item ng-scope">
                    <a ng-href="/serials/srivalli" href="/serials/srivalli">
                        <div class="item card-item" ng-class="{'image-flat':item.curved_edges== true}">
                            <div class="image-holder ng-scope" ng-class="{'rounded':item.curved_edges== true}"
                                ng-if="!listItem.media_list_in_list"> <img
                                    src="https://etv-win-image.akamaized.net/etvwin/serials/shows21815/srivalli/images/srivalli-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows21815/srivalli/images/srivalli-270x360.jpg"
                                    alt="thumbnails">
                            </div>

                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div class="item ng-scope">
                    <a ng-href="/serials/srivalli" href="/serials/srivalli">
                        <div class="item card-item" ng-class="{'image-flat':item.curved_edges== true}">
                            <div class="image-holder ng-scope" ng-class="{'rounded':item.curved_edges== true}"
                                ng-if="!listItem.media_list_in_list">
                                <img src="https://etv-win-image.akamaized.net/etvwin/serials/shows23704/rangula-ratnam/images/rangula-ratnam-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows23704/rangula-ratnam/images/rangula-ratnam-270x360.jpg"
                                    alt="thumbnails">
                            </div>

                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div class="item ng-scope">
                    <a ng-href="/serials/srivalli" href="/serials/srivalli">
                        <div class="item card-item" ng-class="{'image-flat':item.curved_edges== true}">
                            <div class="image-holder ng-scope" ng-class="{'rounded':item.curved_edges== true}"
                                ng-if="!listItem.media_list_in_list">
                                <img src="https://etv-win-image.akamaized.net/etvwin/serials/shows23704/rangula-ratnam/images/rangula-ratnam-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows23704/rangula-ratnam/images/rangula-ratnam-270x360.jpg"
                                    alt="thumbnails">
                            </div>

                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div class="item ng-scope">
                    <a ng-href="/serials/srivalli" href="/serials/srivalli">
                        <div class="item card-item" ng-class="{'image-flat':item.curved_edges== true}">
                            <div class="image-holder ng-scope" ng-class="{'rounded':item.curved_edges== true}"
                                ng-if="!listItem.media_list_in_list"> <img
                                    src="https://etv-win-image.akamaized.net/etvwin/serials/shows21815/srivalli/images/srivalli-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows21815/srivalli/images/srivalli-270x360.jpg"
                                    alt="thumbnails">
                            </div>

                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div class="item ng-scope">
                    <a ng-href="/serials/srivalli" href="/serials/srivalli">
                        <div class="item card-item" ng-class="{'image-flat':item.curved_edges== true}">
                            <div class="image-holder ng-scope" ng-class="{'rounded':item.curved_edges== true}"
                                ng-if="!listItem.media_list_in_list"> <img
                                    src="https://etv-win-image.akamaized.net/etvwin/serials/shows21815/srivalli/images/srivalli-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows21815/srivalli/images/srivalli-270x360.jpg"
                                    alt="thumbnails">
                            </div>

                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div class="item ng-scope">
                    <a ng-href="/serials/srivalli" href="/serials/srivalli">
                        <div class="item card-item" ng-class="{'image-flat':item.curved_edges== true}">
                            <div class="image-holder ng-scope" ng-class="{'rounded':item.curved_edges== true}"
                                ng-if="!listItem.media_list_in_list">
                                <img src="https://etv-win-image.akamaized.net/etvwin/serials/shows23704/rangula-ratnam/images/rangula-ratnam-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows23704/rangula-ratnam/images/rangula-ratnam-270x360.jpg"
                                    alt="thumbnails">
                            </div>

                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div class="item ng-scope">
                    <a ng-href="/serials/srivalli" href="/serials/srivalli">
                        <div class="item card-item" ng-class="{'image-flat':item.curved_edges== true}">
                            <div class="image-holder ng-scope" ng-class="{'rounded':item.curved_edges== true}"
                                ng-if="!listItem.media_list_in_list"> <img
                                    src="https://etv-win-image.akamaized.net/etvwin/serials/shows21815/srivalli/images/srivalli-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows21815/srivalli/images/srivalli-270x360.jpg"
                                    alt="thumbnails">
                            </div>

                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div class="item ng-scope">
                    <a ng-href="/serials/srivalli" href="/serials/srivalli">
                        <div class="item card-item" ng-class="{'image-flat':item.curved_edges== true}">
                            <div class="image-holder ng-scope" ng-class="{'rounded':item.curved_edges== true}"
                                ng-if="!listItem.media_list_in_list">
                                <img src="https://etv-win-image.akamaized.net/etvwin/serials/shows23704/rangula-ratnam/images/rangula-ratnam-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows23704/rangula-ratnam/images/rangula-ratnam-270x360.jpg"
                                    alt="thumbnails">
                            </div>

                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div> --}}


            </div>
        </div>


        {{-- Recommended For You --}}
      
        <div class="Recommended-For-You carousel-list">
            <a href="" class="section-title">Recommended For You</a>
            <a href="" class="see-all-link left-margin-episode " style="text-decoration: none">+More</a>
            <div class="owl-carousel owl-theme fluid" id="Recommended-for-you">
                {{-- @foreach ($latest_episodeand as $index => $url)
                    @if (isset($publishday_for_you[$index]) && isset($titles_for_you[$index]))
                        <div class="item">
                            <a href="" style="text-decoration: none">
                                <div class="item card-item">
                                    <div class="image-holder">
                                        <img alt="icon" src="{{ $url }}" lazy-img="{{ $url }}">
                                        <img id="small-play-btn" alt="play"
                                            src='{{ asset('image/play-btn-new-big.png') }}'class="ng-scope">
                                        <img class="premium-badge ng-scope" alt="premium"
                                            src='{{ asset('image/crown-small.png') }}'>
                                    </div>
                                    <h6 class="ng-scope">
                                        <span n class="ng-binding">
                                            {{ $titles_for_you[$index] }}
                                        </span>
                                        <span class="gray-dash">|

                                        </span>
                                        <format-date date="listItem.release_date_string"
                                            utsdate="listItem.release_date_uts" class="ng-isolate-scope">
                                            <span ng-bind="formattedDate" class="ng-binding">
                                                {{ $publishday_for_you[$index] }}</span>
                                        </format-date>
                                    </h6>
                                </div>
                            </a>
                            <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a><a
                                class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                        </div>
                    @endif
                @endforeach --}}
                <div class="item">
                    <a style="text-decoration: none"
                        href="/win-exclusive/kanulu-therichinaa-kanulu-moosinaa/season-1-10/kanulu-therichinaa-kanulu-moosinaa">
                        <div class="item card-item">
                            <div class="image-holder">
                                <img alt="icon"
                                    src="https://etv-win-image.akamaized.net/etvwin/exclusives/shows/kanulutherichinaakanulumoosinaa/subcategories/season1/episodes/kanulutherichinaakanulumoosinaa/95067/kanulu-therichinaa-kanulu-moosinaa-KTKM_MOVIE_10062023-384x216.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/exclusives/shows/kanulutherichinaakanulumoosinaa/subcategories/season1/episodes/kanulutherichinaakanulumoosinaa/95067/kanulu-therichinaa-kanulu-moosinaa-KTKM_MOVIE_10062023-384x216.jpg">
                                <img id="small-play-btn" alt="play"
                                    src='{{ asset('image/play-btn-new-big.png') }}'class="ng-scope">
                                <img class="premium-badge ng-scope" alt="premium"
                                    src='{{ asset('image/crown-small.png') }}'>
                            </div>
                            <h6 ng-if="listItem.show_meta_data=='yes'" class="ng-scope"><span ng-bind="listItem.title"
                                    class="ng-binding">Kanulu Therichinaa Kanulu
                                    Moosinaa</span> <span class="gray-dash">|</span>
                                <format-date date="listItem.release_date_string" utsdate="listItem.release_date_uts"
                                    class="ng-isolate-scope">
                                    <span ng-bind="formattedDate" class="ng-binding">16 Jun
                                        23</span>
                                </format-date>
                            </h6>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a><a
                        class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>

                {{-- <div class="item">
                    <a style="text-decoration: none"
                        href="/win-exclusive/kanulu-therichinaa-kanulu-moosinaa/season-1-10/kanulu-therichinaa-kanulu-moosinaa">
                        <div class="item card-item">
                            <div class="image-holder">
                                <img alt="icon"
                                    src="https://etv-win-image.akamaized.net/etvwin/exclusives/shows/kanulutherichinaakanulumoosinaa/subcategories/season1/episodes/kanulutherichinaakanulumoosinaa/95067/kanulu-therichinaa-kanulu-moosinaa-KTKM_MOVIE_10062023-384x216.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/exclusives/shows/kanulutherichinaakanulumoosinaa/subcategories/season1/episodes/kanulutherichinaakanulumoosinaa/95067/kanulu-therichinaa-kanulu-moosinaa-KTKM_MOVIE_10062023-384x216.jpg">
                                <img id="small-play-btn" alt="play"
                                    src='{{ asset('image/play-btn-new-big.png') }}'class="ng-scope">
                                <img class="premium-badge ng-scope" alt="premium"
                                    src='{{ asset('image/crown-small.png') }}'>
                            </div>
                            <h6 ng-if="listItem.show_meta_data=='yes'" class="ng-scope"><span ng-bind="listItem.title"
                                    class="ng-binding">Kanulu Therichinaa Kanulu
                                    Moosinaa</span> <span class="gray-dash">|</span>
                                <format-date date="listItem.release_date_string" utsdate="listItem.release_date_uts"
                                    class="ng-isolate-scope">
                                    <span ng-bind="formattedDate" class="ng-binding">16 Jun
                                        23</span>
                                </format-date>
                            </h6>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a><a
                        class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div class="item">
                    <a style="text-decoration: none"
                        href="/win-exclusive/kanulu-therichinaa-kanulu-moosinaa/season-1-10/kanulu-therichinaa-kanulu-moosinaa">
                        <div class="item card-item">
                            <div class="image-holder">
                                <img alt="icon"
                                    src="https://etv-win-image.akamaized.net/etvwin/exclusives/shows/kanulutherichinaakanulumoosinaa/subcategories/season1/episodes/kanulutherichinaakanulumoosinaa/95067/kanulu-therichinaa-kanulu-moosinaa-KTKM_MOVIE_10062023-384x216.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/exclusives/shows/kanulutherichinaakanulumoosinaa/subcategories/season1/episodes/kanulutherichinaakanulumoosinaa/95067/kanulu-therichinaa-kanulu-moosinaa-KTKM_MOVIE_10062023-384x216.jpg">
                                <img id="small-play-btn" alt="play"
                                    src='{{ asset('image/play-btn-new-big.png') }}'class="ng-scope">
                                <img class="premium-badge ng-scope" alt="premium"
                                    src='{{ asset('image/crown-small.png') }}'>
                            </div>
                            <h6 ng-if="listItem.show_meta_data=='yes'" class="ng-scope"><span ng-bind="listItem.title"
                                    class="ng-binding">Kanulu Therichinaa Kanulu
                                    Moosinaa</span> <span class="gray-dash">|</span>
                                <format-date date="listItem.release_date_string" utsdate="listItem.release_date_uts"
                                    class="ng-isolate-scope">
                                    <span ng-bind="formattedDate" class="ng-binding">16 Jun
                                        23</span>
                                </format-date>
                            </h6>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a><a
                        class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>

                <div class="item">
                    <a style="text-decoration: none"
                        href="/win-exclusive/kanulu-therichinaa-kanulu-moosinaa/season-1-10/kanulu-therichinaa-kanulu-moosinaa">
                        <div class="item card-item">
                            <div class="image-holder">
                                <img alt="icon"
                                    src="https://etv-win-image.akamaized.net/etvwin/exclusives/shows/kanulutherichinaakanulumoosinaa/subcategories/season1/episodes/kanulutherichinaakanulumoosinaa/95067/kanulu-therichinaa-kanulu-moosinaa-KTKM_MOVIE_10062023-384x216.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/exclusives/shows/kanulutherichinaakanulumoosinaa/subcategories/season1/episodes/kanulutherichinaakanulumoosinaa/95067/kanulu-therichinaa-kanulu-moosinaa-KTKM_MOVIE_10062023-384x216.jpg">
                                <img id="small-play-btn" alt="play"
                                    src='{{ asset('image/play-btn-new-big.png') }}'class="ng-scope">
                                <img class="premium-badge ng-scope" alt="premium"
                                    src='{{ asset('image/crown-small.png') }}'>
                            </div>
                            <h6 ng-if="listItem.show_meta_data=='yes'" class="ng-scope"><span ng-bind="listItem.title"
                                    class="ng-binding">Kanulu Therichinaa Kanulu
                                    Moosinaa</span> <span class="gray-dash">|</span>
                                <format-date date="listItem.release_date_string" utsdate="listItem.release_date_uts"
                                    class="ng-isolate-scope">
                                    <span ng-bind="formattedDate" class="ng-binding">16 Jun
                                        23</span>
                                </format-date>
                            </h6>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a><a
                        class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div class="item">
                    <a style="text-decoration: none"
                        href="/win-exclusive/kanulu-therichinaa-kanulu-moosinaa/season-1-10/kanulu-therichinaa-kanulu-moosinaa">
                        <div class="item card-item">
                            <div class="image-holder">
                                <img alt="icon"
                                    src="https://etv-win-image.akamaized.net/etvwin/exclusives/shows/kanulutherichinaakanulumoosinaa/subcategories/season1/episodes/kanulutherichinaakanulumoosinaa/95067/kanulu-therichinaa-kanulu-moosinaa-KTKM_MOVIE_10062023-384x216.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/exclusives/shows/kanulutherichinaakanulumoosinaa/subcategories/season1/episodes/kanulutherichinaakanulumoosinaa/95067/kanulu-therichinaa-kanulu-moosinaa-KTKM_MOVIE_10062023-384x216.jpg">
                                <img id="small-play-btn" alt="play"
                                    src='{{ asset('image/play-btn-new-big.png') }}'class="ng-scope">
                                <img class="premium-badge ng-scope" alt="premium"
                                    src='{{ asset('image/crown-small.png') }}'>
                            </div>
                            <h6 ng-if="listItem.show_meta_data=='yes'" class="ng-scope"><span ng-bind="listItem.title"
                                    class="ng-binding">Kanulu Therichinaa Kanulu
                                    Moosinaa</span> <span class="gray-dash">|</span>
                                <format-date date="listItem.release_date_string" utsdate="listItem.release_date_uts"
                                    class="ng-isolate-scope">
                                    <span ng-bind="formattedDate" class="ng-binding">16 Jun
                                        23</span>
                                </format-date>
                            </h6>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a><a
                        class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div class="item">
                    <a style="text-decoration: none"
                        href="/win-exclusive/kanulu-therichinaa-kanulu-moosinaa/season-1-10/kanulu-therichinaa-kanulu-moosinaa">
                        <div class="item card-item">
                            <div class="image-holder">
                                <img alt="icon"
                                    src="https://etv-win-image.akamaized.net/etvwin/exclusives/shows/kanulutherichinaakanulumoosinaa/subcategories/season1/episodes/kanulutherichinaakanulumoosinaa/95067/kanulu-therichinaa-kanulu-moosinaa-KTKM_MOVIE_10062023-384x216.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/exclusives/shows/kanulutherichinaakanulumoosinaa/subcategories/season1/episodes/kanulutherichinaakanulumoosinaa/95067/kanulu-therichinaa-kanulu-moosinaa-KTKM_MOVIE_10062023-384x216.jpg">
                                <img id="small-play-btn" alt="play"
                                    src='{{ asset('image/play-btn-new-big.png') }}'class="ng-scope">
                                <img class="premium-badge ng-scope" alt="premium"
                                    src='{{ asset('image/crown-small.png') }}'>
                            </div>
                            <h6 ng-if="listItem.show_meta_data=='yes'" class="ng-scope"><span ng-bind="listItem.title"
                                    class="ng-binding">Kanulu Therichinaa Kanulu
                                    Moosinaa</span> <span class="gray-dash">|</span>
                                <format-date date="listItem.release_date_string" utsdate="listItem.release_date_uts"
                                    class="ng-isolate-scope">
                                    <span ng-bind="formattedDate" class="ng-binding">16 Jun
                                        23</span>
                                </format-date>
                            </h6>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a><a
                        class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>

                <div class="item">
                    <a style="text-decoration: none"
                        href="/win-exclusive/kanulu-therichinaa-kanulu-moosinaa/season-1-10/kanulu-therichinaa-kanulu-moosinaa">
                        <div class="item card-item">
                            <div class="image-holder">
                                <img alt="icon"
                                    src="https://etv-win-image.akamaized.net/etvwin/exclusives/shows/kanulutherichinaakanulumoosinaa/subcategories/season1/episodes/kanulutherichinaakanulumoosinaa/95067/kanulu-therichinaa-kanulu-moosinaa-KTKM_MOVIE_10062023-384x216.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/exclusives/shows/kanulutherichinaakanulumoosinaa/subcategories/season1/episodes/kanulutherichinaakanulumoosinaa/95067/kanulu-therichinaa-kanulu-moosinaa-KTKM_MOVIE_10062023-384x216.jpg">
                                <img id="small-play-btn" alt="play"
                                    src='{{ asset('image/play-btn-new-big.png') }}'class="ng-scope">
                                <img class="premium-badge ng-scope" alt="premium"
                                    src='{{ asset('image/crown-small.png') }}'>
                            </div>
                            <h6 ng-if="listItem.show_meta_data=='yes'" class="ng-scope"><span ng-bind="listItem.title"
                                    class="ng-binding">Kanulu Therichinaa Kanulu
                                    Moosinaa</span> <span class="gray-dash">|</span>
                                <format-date date="listItem.release_date_string" utsdate="listItem.release_date_uts"
                                    class="ng-isolate-scope">
                                    <span ng-bind="formattedDate" class="ng-binding">16 Jun
                                        23</span>
                                </format-date>
                            </h6>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a><a
                        class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div class="item">
                    <a style="text-decoration: none"
                        href="/win-exclusive/kanulu-therichinaa-kanulu-moosinaa/season-1-10/kanulu-therichinaa-kanulu-moosinaa">
                        <div class="item card-item">
                            <div class="image-holder">
                                <img alt="icon"
                                    src="https://etv-win-image.akamaized.net/etvwin/exclusives/shows/kanulutherichinaakanulumoosinaa/subcategories/season1/episodes/kanulutherichinaakanulumoosinaa/95067/kanulu-therichinaa-kanulu-moosinaa-KTKM_MOVIE_10062023-384x216.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/exclusives/shows/kanulutherichinaakanulumoosinaa/subcategories/season1/episodes/kanulutherichinaakanulumoosinaa/95067/kanulu-therichinaa-kanulu-moosinaa-KTKM_MOVIE_10062023-384x216.jpg">
                                <img id="small-play-btn" alt="play"
                                    src='{{ asset('image/play-btn-new-big.png') }}'class="ng-scope">
                                <img class="premium-badge ng-scope" alt="premium"
                                    src='{{ asset('image/crown-small.png') }}'>
                            </div>
                            <h6 ng-if="listItem.show_meta_data=='yes'" class="ng-scope"><span ng-bind="listItem.title"
                                    class="ng-binding">Kanulu Therichinaa Kanulu
                                    Moosinaa</span> <span class="gray-dash">|</span>
                                <format-date date="listItem.release_date_string" utsdate="listItem.release_date_uts"
                                    class="ng-isolate-scope">
                                    <span ng-bind="formattedDate" class="ng-binding">16 Jun
                                        23</span>
                                </format-date>
                            </h6>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a><a
                        class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div style="text-decoration: none" class="item">
                    <a
                        href="/win-exclusive/kanulu-therichinaa-kanulu-moosinaa/season-1-10/kanulu-therichinaa-kanulu-moosinaa">
                        <div class="item card-item">
                            <div class="image-holder">
                                <img alt="icon"
                                    src="https://etv-win-image.akamaized.net/etvwin/exclusives/shows/kanulutherichinaakanulumoosinaa/subcategories/season1/episodes/kanulutherichinaakanulumoosinaa/95067/kanulu-therichinaa-kanulu-moosinaa-KTKM_MOVIE_10062023-384x216.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/exclusives/shows/kanulutherichinaakanulumoosinaa/subcategories/season1/episodes/kanulutherichinaakanulumoosinaa/95067/kanulu-therichinaa-kanulu-moosinaa-KTKM_MOVIE_10062023-384x216.jpg">
                                <img id="small-play-btn" alt="play"
                                    src='{{ asset('image/play-btn-new-big.png') }}'class="ng-scope">
                                <img class="premium-badge ng-scope" alt="premium"
                                    src='{{ asset('image/crown-small.png') }}'>
                            </div>
                            <h6 ng-if="listItem.show_meta_data=='yes'" class="ng-scope"><span ng-bind="listItem.title"
                                    class="ng-binding">Kanulu Therichinaa Kanulu
                                    Moosinaa</span> <span class="gray-dash">|</span>
                                <format-date date="listItem.release_date_string" utsdate="listItem.release_date_uts"
                                    class="ng-isolate-scope">
                                    <span ng-bind="formattedDate" class="ng-binding">16 Jun
                                        23</span>
                                </format-date>
                            </h6>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a><a
                        class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div style="text-decoration: none" class="item">
                    <a
                        href="/win-exclusive/kanulu-therichinaa-kanulu-moosinaa/season-1-10/kanulu-therichinaa-kanulu-moosinaa">
                        <div class="item card-item">
                            <div class="image-holder">
                                <img alt="icon"
                                    src="https://etv-win-image.akamaized.net/etvwin/exclusives/shows/kanulutherichinaakanulumoosinaa/subcategories/season1/episodes/kanulutherichinaakanulumoosinaa/95067/kanulu-therichinaa-kanulu-moosinaa-KTKM_MOVIE_10062023-384x216.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/exclusives/shows/kanulutherichinaakanulumoosinaa/subcategories/season1/episodes/kanulutherichinaakanulumoosinaa/95067/kanulu-therichinaa-kanulu-moosinaa-KTKM_MOVIE_10062023-384x216.jpg">
                                <img id="small-play-btn" alt="play"
                                    src='{{ asset('image/play-btn-new-big.png') }}'class="ng-scope">
                                <img class="premium-badge ng-scope" alt="premium"
                                    src='{{ asset('image/crown-small.png') }}'>
                            </div>
                            <h6 ng-if="listItem.show_meta_data=='yes'" class="ng-scope"><span ng-bind="listItem.title"
                                    class="ng-binding">Kanulu Therichinaa Kanulu
                                    Moosinaa</span> <span class="gray-dash">|</span>
                                <format-date date="listItem.release_date_string" utsdate="listItem.release_date_uts"
                                    class="ng-isolate-scope">
                                    <span ng-bind="formattedDate" class="ng-binding">16 Jun
                                        23</span>
                                </format-date>
                            </h6>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a><a
                        class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div style="text-decoration: none" class="item">
                    <a
                        href="/win-exclusive/kanulu-therichinaa-kanulu-moosinaa/season-1-10/kanulu-therichinaa-kanulu-moosinaa">
                        <div class="item card-item">
                            <div class="image-holder">
                                <img alt="icon"
                                    src="https://etv-win-image.akamaized.net/etvwin/exclusives/shows/kanulutherichinaakanulumoosinaa/subcategories/season1/episodes/kanulutherichinaakanulumoosinaa/95067/kanulu-therichinaa-kanulu-moosinaa-KTKM_MOVIE_10062023-384x216.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/exclusives/shows/kanulutherichinaakanulumoosinaa/subcategories/season1/episodes/kanulutherichinaakanulumoosinaa/95067/kanulu-therichinaa-kanulu-moosinaa-KTKM_MOVIE_10062023-384x216.jpg">
                                <img id="small-play-btn" alt="play"
                                    src='{{ asset('image/play-btn-new-big.png') }}'class="ng-scope">
                                <img class="premium-badge ng-scope" alt="premium"
                                    src='{{ asset('image/crown-small.png') }}'>
                            </div>
                            <h6 ng-if="listItem.show_meta_data=='yes'" class="ng-scope"><span ng-bind="listItem.title"
                                    class="ng-binding">Kanulu Therichinaa Kanulu
                                    Moosinaa</span> <span class="gray-dash">|</span>
                                <format-date date="listItem.release_date_string" utsdate="listItem.release_date_uts"
                                    class="ng-isolate-scope">
                                    <span ng-bind="formattedDate" class="ng-binding">16 Jun
                                        23</span>
                                </format-date>
                            </h6>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a><a
                        class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div style="text-decoration: none" class="item">
                    <a
                        href="/win-exclusive/kanulu-therichinaa-kanulu-moosinaa/season-1-10/kanulu-therichinaa-kanulu-moosinaa">
                        <div class="item card-item">
                            <div class="image-holder">
                                <img alt="icon"
                                    src="https://etv-win-image.akamaized.net/etvwin/exclusives/shows/kanulutherichinaakanulumoosinaa/subcategories/season1/episodes/kanulutherichinaakanulumoosinaa/95067/kanulu-therichinaa-kanulu-moosinaa-KTKM_MOVIE_10062023-384x216.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/exclusives/shows/kanulutherichinaakanulumoosinaa/subcategories/season1/episodes/kanulutherichinaakanulumoosinaa/95067/kanulu-therichinaa-kanulu-moosinaa-KTKM_MOVIE_10062023-384x216.jpg">
                                <img id="small-play-btn" alt="play"
                                    src='{{ asset('image/play-btn-new-big.png') }}'class="ng-scope">
                                <img class="premium-badge ng-scope" alt="premium"
                                    src='{{ asset('image/crown-small.png') }}'>
                            </div>
                            <h6 ng-if="listItem.show_meta_data=='yes'" class="ng-scope"><span ng-bind="listItem.title"
                                    class="ng-binding">Kanulu Therichinaa Kanulu
                                    Moosinaa</span> <span class="gray-dash">|</span>
                                <format-date date="listItem.release_date_string" utsdate="listItem.release_date_uts"
                                    class="ng-isolate-scope">
                                    <span ng-bind="formattedDate" class="ng-binding">16 Jun
                                        23</span>
                                </format-date>
                            </h6>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a><a
                        class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div style="text-decoration: none" class="item">
                    <a
                        href="/win-exclusive/kanulu-therichinaa-kanulu-moosinaa/season-1-10/kanulu-therichinaa-kanulu-moosinaa">
                        <div class="item card-item">
                            <div class="image-holder">
                                <img alt="icon"
                                    src="https://etv-win-image.akamaized.net/etvwin/exclusives/shows/kanulutherichinaakanulumoosinaa/subcategories/season1/episodes/kanulutherichinaakanulumoosinaa/95067/kanulu-therichinaa-kanulu-moosinaa-KTKM_MOVIE_10062023-384x216.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/exclusives/shows/kanulutherichinaakanulumoosinaa/subcategories/season1/episodes/kanulutherichinaakanulumoosinaa/95067/kanulu-therichinaa-kanulu-moosinaa-KTKM_MOVIE_10062023-384x216.jpg">
                                <img id="small-play-btn" alt="play"
                                    src='{{ asset('image/play-btn-new-big.png') }}'class="ng-scope">
                                <img class="premium-badge ng-scope" alt="premium"
                                    src='{{ asset('image/crown-small.png') }}'>
                            </div>
                            <h6 ng-if="listItem.show_meta_data=='yes'" class="ng-scope"><span ng-bind="listItem.title"
                                    class="ng-binding">Kanulu Therichinaa Kanulu
                                    Moosinaa</span> <span class="gray-dash">|</span>
                                <format-date date="listItem.release_date_string" utsdate="listItem.release_date_uts"
                                    class="ng-isolate-scope">
                                    <span ng-bind="formattedDate" class="ng-binding">16 Jun
                                        23</span>
                                </format-date>
                            </h6>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a><a
                        class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div style="text-decoration: none" class="item">
                    <a
                        href="/win-exclusive/kanulu-therichinaa-kanulu-moosinaa/season-1-10/kanulu-therichinaa-kanulu-moosinaa">
                        <div class="item card-item">
                            <div class="image-holder">
                                <img alt="icon"
                                    src="https://etv-win-image.akamaized.net/etvwin/exclusives/shows/kanulutherichinaakanulumoosinaa/subcategories/season1/episodes/kanulutherichinaakanulumoosinaa/95067/kanulu-therichinaa-kanulu-moosinaa-KTKM_MOVIE_10062023-384x216.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/exclusives/shows/kanulutherichinaakanulumoosinaa/subcategories/season1/episodes/kanulutherichinaakanulumoosinaa/95067/kanulu-therichinaa-kanulu-moosinaa-KTKM_MOVIE_10062023-384x216.jpg">
                                <img id="small-play-btn" alt="play"
                                    src='{{ asset('image/play-btn-new-big.png') }}'class="ng-scope">
                                <img class="premium-badge ng-scope" alt="premium"
                                    src='{{ asset('image/crown-small.png') }}'>
                            </div>
                            <h6 ng-if="listItem.show_meta_data=='yes'" class="ng-scope"><span ng-bind="listItem.title"
                                    class="ng-binding">Kanulu Therichinaa Kanulu
                                    Moosinaa</span> <span class="gray-dash">|</span>
                                <format-date date="listItem.release_date_string" utsdate="listItem.release_date_uts"
                                    class="ng-isolate-scope">
                                    <span ng-bind="formattedDate" class="ng-binding">16 Jun
                                        23</span>
                                </format-date>
                            </h6>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a><a
                        class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div style="text-decoration: none" class="item">
                    <a
                        href="/win-exclusive/kanulu-therichinaa-kanulu-moosinaa/season-1-10/kanulu-therichinaa-kanulu-moosinaa">
                        <div class="item card-item">
                            <div class="image-holder">
                                <img alt="icon"
                                    src="https://etv-win-image.akamaized.net/etvwin/exclusives/shows/kanulutherichinaakanulumoosinaa/subcategories/season1/episodes/kanulutherichinaakanulumoosinaa/95067/kanulu-therichinaa-kanulu-moosinaa-KTKM_MOVIE_10062023-384x216.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/exclusives/shows/kanulutherichinaakanulumoosinaa/subcategories/season1/episodes/kanulutherichinaakanulumoosinaa/95067/kanulu-therichinaa-kanulu-moosinaa-KTKM_MOVIE_10062023-384x216.jpg">
                                <img id="small-play-btn" alt="play"
                                    src='{{ asset('image/play-btn-new-big.png') }}'class="ng-scope">
                                <img class="premium-badge ng-scope" alt="premium"
                                    src='{{ asset('image/crown-small.png') }}'>
                            </div>
                            <h6 ng-if="listItem.show_meta_data=='yes'" class="ng-scope"><span ng-bind="listItem.title"
                                    class="ng-binding">Kanulu Therichinaa Kanulu
                                    Moosinaa</span> <span class="gray-dash">|</span>
                                <format-date date="listItem.release_date_string" utsdate="listItem.release_date_uts"
                                    class="ng-isolate-scope">
                                    <span ng-bind="formattedDate" class="ng-binding">16 Jun
                                        23</span>
                                </format-date>
                            </h6>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a><a
                        class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div> --}}


            </div>
        </div>


        {{-- Top Movies --}}
       
        <div class="Top-Movies carousel-list">
            <a href="" class="section-title">Top Movies</a>
            <a href="" class="see-all-link left-margin-episode" style="text-decoration: none">+more</a>
            <div class="owl-carousel owl-theme fluid" id="Top-Movies-carousel">
                {{-- @foreach ($Top_Moviesand as $index => $url)
                    <div class="item">
                        <a href="">
                            <div class="item card-item">
                                <div class="image-holder ng-scope">
                                    <img src="{{ $url }}" lazy-img="{{ $url }}" alt="thumbnails">
                                    <img class="premium-badge ng-scope" src='{{ asset('image/crown-small.png') }}'>
                                </div>
                            </div>
                        </a>
                        <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                        <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                    </div>
                @endforeach --}}
                
                <div class="item">
                    <a href="/telugu-movies/nuvve-kavali?media=movie&amp;layout=movies">
                        <div class="item card-item" ng-class="{'image-flat':item.curved_edges== true}">
                            <div class="image-holder ng-scope" ng-class="{'rounded':item.curved_edges== true}"
                                ng-if="!listItem.media_list_in_list"> <img
                                    src="https://etv-win-image.akamaized.net/etvwin/telugumovies/nuvvekavali/82918/nuvve-kavali-Nuvve_Kavali_Movie-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/nuvvekavali/82918/nuvve-kavali-Nuvve_Kavali_Movie-270x360.jpg"
                                    alt="thumbnails">
                                <img class="premium-badge ng-scope" src='{{ asset('image/crown-small.png') }}'>
                            </div>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                {{-- <div class="item">
                    <a href="/telugu-movies/nuvve-kavali?media=movie&amp;layout=movies">
                        <div class="item card-item" ng-class="{'image-flat':item.curved_edges== true}">
                            <div class="image-holder ng-scope" ng-class="{'rounded':item.curved_edges== true}"
                                ng-if="!listItem.media_list_in_list"> <img
                                    src="https://etv-win-image.akamaized.net/etvwin/telugumovies/nuvvekavali/82918/nuvve-kavali-Nuvve_Kavali_Movie-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/nuvvekavali/82918/nuvve-kavali-Nuvve_Kavali_Movie-270x360.jpg"
                                    alt="thumbnails">
                                <img class="premium-badge ng-scope" src='{{ asset('image/crown-small.png') }}'>
                            </div>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div class="item">
                    <a href="/telugu-movies/nuvve-kavali?media=movie&amp;layout=movies">
                        <div class="item card-item" ng-class="{'image-flat':item.curved_edges== true}">
                            <div class="image-holder ng-scope" ng-class="{'rounded':item.curved_edges== true}"
                                ng-if="!listItem.media_list_in_list"> <img
                                    src="https://etv-win-image.akamaized.net/etvwin/telugumovies/nuvvekavali/82918/nuvve-kavali-Nuvve_Kavali_Movie-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/nuvvekavali/82918/nuvve-kavali-Nuvve_Kavali_Movie-270x360.jpg"
                                    alt="thumbnails">
                                <img class="premium-badge ng-scope" src='{{ asset('image/crown-small.png') }}'>
                            </div>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div class="item">
                    <a href="/telugu-movies/nuvve-kavali?media=movie&amp;layout=movies">
                        <div class="item card-item" ng-class="{'image-flat':item.curved_edges== true}">
                            <div class="image-holder ng-scope" ng-class="{'rounded':item.curved_edges== true}"
                                ng-if="!listItem.media_list_in_list"> <img
                                    src="https://etv-win-image.akamaized.net/etvwin/telugumovies/nuvvekavali/82918/nuvve-kavali-Nuvve_Kavali_Movie-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/nuvvekavali/82918/nuvve-kavali-Nuvve_Kavali_Movie-270x360.jpg"
                                    alt="thumbnails">
                                <img class="premium-badge ng-scope" src='{{ asset('image/crown-small.png') }}'>
                            </div>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div class="item">
                    <a href="/telugu-movies/nuvve-kavali?media=movie&amp;layout=movies">
                        <div class="item card-item" ng-class="{'image-flat':item.curved_edges== true}">
                            <div class="image-holder ng-scope" ng-class="{'rounded':item.curved_edges== true}"
                                ng-if="!listItem.media_list_in_list"> <img
                                    src="https://etv-win-image.akamaized.net/etvwin/telugumovies/nuvvekavali/82918/nuvve-kavali-Nuvve_Kavali_Movie-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/nuvvekavali/82918/nuvve-kavali-Nuvve_Kavali_Movie-270x360.jpg"
                                    alt="thumbnails">
                                <img class="premium-badge ng-scope" src='{{ asset('image/crown-small.png') }}'>
                            </div>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div class="item">
                    <a href="/telugu-movies/nuvve-kavali?media=movie&amp;layout=movies">
                        <div class="item card-item" ng-class="{'image-flat':item.curved_edges== true}">
                            <div class="image-holder ng-scope" ng-class="{'rounded':item.curved_edges== true}"
                                ng-if="!listItem.media_list_in_list"> <img
                                    src="https://etv-win-image.akamaized.net/etvwin/telugumovies/nuvvekavali/82918/nuvve-kavali-Nuvve_Kavali_Movie-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/nuvvekavali/82918/nuvve-kavali-Nuvve_Kavali_Movie-270x360.jpg"
                                    alt="thumbnails">
                                <img class="premium-badge ng-scope" src='{{ asset('image/crown-small.png') }}'>
                            </div>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div class="item">
                    <a href="/telugu-movies/nuvve-kavali?media=movie&amp;layout=movies">
                        <div class="item card-item" ng-class="{'image-flat':item.curved_edges== true}">
                            <div class="image-holder ng-scope" ng-class="{'rounded':item.curved_edges== true}"
                                ng-if="!listItem.media_list_in_list"> <img
                                    src="https://etv-win-image.akamaized.net/etvwin/telugumovies/nuvvekavali/82918/nuvve-kavali-Nuvve_Kavali_Movie-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/nuvvekavali/82918/nuvve-kavali-Nuvve_Kavali_Movie-270x360.jpg"
                                    alt="thumbnails">
                                <img class="premium-badge ng-scope" src='{{ asset('image/crown-small.png') }}'>
                            </div>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div class="item">
                    <a href="/telugu-movies/nuvve-kavali?media=movie&amp;layout=movies">
                        <div class="item card-item" ng-class="{'image-flat':item.curved_edges== true}">
                            <div class="image-holder ng-scope" ng-class="{'rounded':item.curved_edges== true}"
                                ng-if="!listItem.media_list_in_list"> <img
                                    src="https://etv-win-image.akamaized.net/etvwin/telugumovies/nuvvekavali/82918/nuvve-kavali-Nuvve_Kavali_Movie-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/nuvvekavali/82918/nuvve-kavali-Nuvve_Kavali_Movie-270x360.jpg"
                                    alt="thumbnails">
                                <img class="premium-badge ng-scope" src='{{ asset('image/crown-small.png') }}'>
                            </div>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div> --}}
            </div>
        </div>


        {{-- Family --}}
      
        <div class="Family carousel-list">
            <a href="" class="section-title">Family</a>
            <a href="" class="see-all-link left-margin-episode" style="text-decoration: none">+more</a>

            <div class="owl-carousel owl-theme fluid" id="Family">
                {{-- @foreach ($Familyand as $index => $url)
                    <div class="item ">
                        <a href="{{ $url }}">
                            <div class="item card-item">
                                <div class="image-holder ng-scope">
                                    <img src="{{ $url }}" lazy-img="{{ $url }}" alt="thumbnails">
                                    <img class="premium-badge ng-scope" alt="premium"
                                        src='{{ asset('image/crown-small.png') }}'>
                                </div>
                            </div>
                        </a>
                        <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                        <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                    </div>
                @endforeach --}}
                <div class="item ">
                    <a href="/telugu-movies/dagudu-mootha-dandakor-1?media=movie&amp;layout=movies">
                        <div class="item card-item">
                            <div class="image-holder ng-scope" ng-class="{'rounded':item.curved_edges== true}"
                                ng-if="!listItem.media_list_in_list"> <img
                                    src="https://etv-win-image.akamaized.net/etvwin/telugumovies/dagudumoothadandakor/13069/dagudu-mootha-dandakor-Dagudu_Mootha_Dandakore_Movie-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/dagudumoothadandakor/13069/dagudu-mootha-dandakor-Dagudu_Mootha_Dandakore_Movie-270x360.jpg"
                                    alt="thumbnails">
                                <img class="premium-badge ng-scope" alt="premium"
                                    src='{{ asset('image/crown-small.png') }}'>
                            </div>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                {{-- <div class="item ">
                    <a href="/telugu-movies/dagudu-mootha-dandakor-1?media=movie&amp;layout=movies">
                        <div class="item card-item">
                            <div class="image-holder ng-scope" ng-class="{'rounded':item.curved_edges== true}"
                                ng-if="!listItem.media_list_in_list"> <img
                                    src="https://etv-win-image.akamaized.net/etvwin/telugumovies/dagudumoothadandakor/13069/dagudu-mootha-dandakor-Dagudu_Mootha_Dandakore_Movie-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/dagudumoothadandakor/13069/dagudu-mootha-dandakor-Dagudu_Mootha_Dandakore_Movie-270x360.jpg"
                                    alt="thumbnails">
                                <img class="premium-badge ng-scope" alt="premium"
                                    src='{{ asset('image/crown-small.png') }}'>
                            </div>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div class="item ">
                    <a href="/telugu-movies/dagudu-mootha-dandakor-1?media=movie&amp;layout=movies">
                        <div class="item card-item">
                            <div class="image-holder ng-scope" ng-class="{'rounded':item.curved_edges== true}"
                                ng-if="!listItem.media_list_in_list"> <img
                                    src="https://etv-win-image.akamaized.net/etvwin/telugumovies/dagudumoothadandakor/13069/dagudu-mootha-dandakor-Dagudu_Mootha_Dandakore_Movie-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/dagudumoothadandakor/13069/dagudu-mootha-dandakor-Dagudu_Mootha_Dandakore_Movie-270x360.jpg"
                                    alt="thumbnails">
                                <img class="premium-badge ng-scope" alt="premium"
                                    src='{{ asset('image/crown-small.png') }}'>
                            </div>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div class="item ">
                    <a href="/telugu-movies/dagudu-mootha-dandakor-1?media=movie&amp;layout=movies">
                        <div class="item card-item">
                            <div class="image-holder ng-scope" ng-class="{'rounded':item.curved_edges== true}"
                                ng-if="!listItem.media_list_in_list"> <img
                                    src="https://etv-win-image.akamaized.net/etvwin/telugumovies/dagudumoothadandakor/13069/dagudu-mootha-dandakor-Dagudu_Mootha_Dandakore_Movie-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/dagudumoothadandakor/13069/dagudu-mootha-dandakor-Dagudu_Mootha_Dandakore_Movie-270x360.jpg"
                                    alt="thumbnails">
                                <img class="premium-badge ng-scope" alt="premium"
                                    src='{{ asset('image/crown-small.png') }}'>
                            </div>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div class="item ">
                    <a href="/telugu-movies/dagudu-mootha-dandakor-1?media=movie&amp;layout=movies">
                        <div class="item card-item">
                            <div class="image-holder ng-scope" ng-class="{'rounded':item.curved_edges== true}"
                                ng-if="!listItem.media_list_in_list"> <img
                                    src="https://etv-win-image.akamaized.net/etvwin/telugumovies/dagudumoothadandakor/13069/dagudu-mootha-dandakor-Dagudu_Mootha_Dandakore_Movie-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/dagudumoothadandakor/13069/dagudu-mootha-dandakor-Dagudu_Mootha_Dandakore_Movie-270x360.jpg"
                                    alt="thumbnails">
                                <img class="premium-badge ng-scope" alt="premium"
                                    src='{{ asset('image/crown-small.png') }}'>
                            </div>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div class="item ">
                    <a href="/telugu-movies/dagudu-mootha-dandakor-1?media=movie&amp;layout=movies">
                        <div class="item card-item">
                            <div class="image-holder ng-scope" ng-class="{'rounded':item.curved_edges== true}"
                                ng-if="!listItem.media_list_in_list"> <img
                                    src="https://etv-win-image.akamaized.net/etvwin/telugumovies/dagudumoothadandakor/13069/dagudu-mootha-dandakor-Dagudu_Mootha_Dandakore_Movie-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/dagudumoothadandakor/13069/dagudu-mootha-dandakor-Dagudu_Mootha_Dandakore_Movie-270x360.jpg"
                                    alt="thumbnails">
                                <img class="premium-badge ng-scope" alt="premium"
                                    src='{{ asset('image/crown-small.png') }}'>
                            </div>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div class="item ">
                    <a href="/telugu-movies/dagudu-mootha-dandakor-1?media=movie&amp;layout=movies">
                        <div class="item card-item">
                            <div class="image-holder ng-scope" ng-class="{'rounded':item.curved_edges== true}"
                                ng-if="!listItem.media_list_in_list"> <img
                                    src="https://etv-win-image.akamaized.net/etvwin/telugumovies/dagudumoothadandakor/13069/dagudu-mootha-dandakor-Dagudu_Mootha_Dandakore_Movie-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/dagudumoothadandakor/13069/dagudu-mootha-dandakor-Dagudu_Mootha_Dandakore_Movie-270x360.jpg"
                                    alt="thumbnails">
                                <img class="premium-badge ng-scope" alt="premium"
                                    src='{{ asset('image/crown-small.png') }}'>
                            </div>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div class="item ">
                    <a href="/telugu-movies/dagudu-mootha-dandakor-1?media=movie&amp;layout=movies">
                        <div class="item card-item">
                            <div class="image-holder ng-scope" ng-class="{'rounded':item.curved_edges== true}"
                                ng-if="!listItem.media_list_in_list"> <img
                                    src="https://etv-win-image.akamaized.net/etvwin/telugumovies/dagudumoothadandakor/13069/dagudu-mootha-dandakor-Dagudu_Mootha_Dandakore_Movie-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/dagudumoothadandakor/13069/dagudu-mootha-dandakor-Dagudu_Mootha_Dandakore_Movie-270x360.jpg"
                                    alt="thumbnails">
                                <img class="premium-badge ng-scope" alt="premium"
                                    src='{{ asset('image/crown-small.png') }}'>
                            </div>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div class="item ">
                    <a href="/telugu-movies/dagudu-mootha-dandakor-1?media=movie&amp;layout=movies">
                        <div class="item card-item">
                            <div class="image-holder ng-scope" ng-class="{'rounded':item.curved_edges== true}"
                                ng-if="!listItem.media_list_in_list"> <img
                                    src="https://etv-win-image.akamaized.net/etvwin/telugumovies/dagudumoothadandakor/13069/dagudu-mootha-dandakor-Dagudu_Mootha_Dandakore_Movie-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/dagudumoothadandakor/13069/dagudu-mootha-dandakor-Dagudu_Mootha_Dandakore_Movie-270x360.jpg"
                                    alt="thumbnails">
                                <img class="premium-badge ng-scope" alt="premium"
                                    src='{{ asset('image/crown-small.png') }}'>
                            </div>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div class="item ">
                    <a href="/telugu-movies/dagudu-mootha-dandakor-1?media=movie&amp;layout=movies">
                        <div class="item card-item">
                            <div class="image-holder ng-scope" ng-class="{'rounded':item.curved_edges== true}"
                                ng-if="!listItem.media_list_in_list"> <img
                                    src="https://etv-win-image.akamaized.net/etvwin/telugumovies/dagudumoothadandakor/13069/dagudu-mootha-dandakor-Dagudu_Mootha_Dandakore_Movie-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/dagudumoothadandakor/13069/dagudu-mootha-dandakor-Dagudu_Mootha_Dandakore_Movie-270x360.jpg"
                                    alt="thumbnails">
                                <img class="premium-badge ng-scope" alt="premium"
                                    src='{{ asset('image/crown-small.png') }}'>
                            </div>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div> --}}
            </div>
        </div>


        {{-- Comedy --}}
       
        <div class="Comedy carousel-list">
            <a href="" class="section-title">Comedy</a>
            <a href="" class="see-all-link left-margin-episode " style="text-decoration: none">+More</a>
            <div class="owl-carousel owl-theme fluid" id="Comedy">
                {{-- @foreach ($comedy as $url => $ind)
                    <div class="item ">
                        <a href="">
                            <div class="item card-item">
                                <div class="image-holder ng-scope">
                                    <img src="{{ $ind }}" lazy-img="{{ $ind }}" alt="thumbnails">
                                    <img class="premium-badge ng-scope"
                                        ng-if="listItem.access_control &amp;&amp; listItem.access_control.is_free===false"
                                        alt="premium" src='{{ asset('image/crown-small.png') }}'>
                                </div>
                            </div>
                        </a>
                        <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                        <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                    </div>
                @endforeach --}}
                <div class="item ">
                    <a ng-href="/telugu-movies/beeruva-1?media=movie&amp;layout=movies"
                        href="/telugu-movies/beeruva-1?media=movie&amp;layout=movies">
                        <div class="item card-item">
                            <div class="image-holder ng-scope">
                                <img src="https://etv-win-image.akamaized.net/etvwin/telugumovies/beeruva/22396/beeruva-Beeruva_Movie-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/beeruva/22396/beeruva-Beeruva_Movie-270x360.jpg"
                                    alt="thumbnails">
                                <img class="premium-badge ng-scope"
                                    ng-if="listItem.access_control &amp;&amp; listItem.access_control.is_free===false"
                                    alt="premium" src='{{ asset('image/crown-small.png') }}'>
                            </div>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div class="item ">
                    <a ng-href="/telugu-movies/beeruva-1?media=movie&amp;layout=movies"
                        href="/telugu-movies/beeruva-1?media=movie&amp;layout=movies">
                        <div class="item card-item">
                            <div class="image-holder ng-scope">
                                <img src="https://etv-win-image.akamaized.net/etvwin/telugumovies/beeruva/22396/beeruva-Beeruva_Movie-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/beeruva/22396/beeruva-Beeruva_Movie-270x360.jpg"
                                    alt="thumbnails">
                                <img class="premium-badge ng-scope"
                                    ng-if="listItem.access_control &amp;&amp; listItem.access_control.is_free===false"
                                    alt="premium" src='{{ asset('image/crown-small.png') }}'>
                            </div>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div class="item ">
                    <a ng-href="/telugu-movies/beeruva-1?media=movie&amp;layout=movies"
                        href="/telugu-movies/beeruva-1?media=movie&amp;layout=movies">
                        <div class="item card-item">
                            <div class="image-holder ng-scope">
                                <img src="https://etv-win-image.akamaized.net/etvwin/telugumovies/beeruva/22396/beeruva-Beeruva_Movie-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/beeruva/22396/beeruva-Beeruva_Movie-270x360.jpg"
                                    alt="thumbnails">
                                <img class="premium-badge ng-scope"
                                    ng-if="listItem.access_control &amp;&amp; listItem.access_control.is_free===false"
                                    alt="premium" src='{{ asset('image/crown-small.png') }}'>
                            </div>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
            </div>
        </div>

        {{-- Romance --}}
        
        <div class="Classic carousel-list">
            <a href="" class="section-title">Romance</a>
            <a href="" class="see-all-link left-margin-episode " style="text-decoration: none">+More</a>
            <div class="owl-carousel owl-theme fluid" id="Romance">
                {{-- @foreach ($Romance as $url => $index)
                    <div class="item">
                        <a href="">
                            <div class="item card-item">
                                <div class="image-holder ng-scope ">
                                    <img src="{{ $index }}" lazy-img="{{ $index }}" alt="thumbnails">
                                    <img class="premium-badge ng-scope"
                                        ng-if="listItem.access_control &amp;&amp; listItem.access_control.is_free===false"
                                        alt="premium" src='{{ asset('image/crown-small.png') }}'>

                                </div>
                            </div>
                        </a>
                        <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                        <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                    </div>
                @endforeach --}}
            </div>
        </div>


        {{-- Classic --}}

      
        <div class="Classic carousel-list">
            <a href="" class="section-title">Classic</a>
            <a href="" class="see-all-link left-margin-episode " style="text-decoration: none">+More</a>
            <div class="owl-carousel owl-theme fluid" id="Classic">
                {{-- @foreach ($classic as $url => $index)
                    <div class="item">
                        <a href="">
                            <div class="item card-item">
                                <div class="image-holder ng-scope ">
                                    <img src="{{ $index }}" lazy-img="{{ $index }}" alt="thumbnails">
                                    <img class="premium-badge ng-scope"
                                        ng-if="listItem.access_control &amp;&amp; listItem.access_control.is_free===false"
                                        alt="premium" src='{{ asset('image/crown-small.png') }}'>

                                </div>
                            </div>
                        </a>
                        <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                        <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                    </div>
                @endforeach --}}

                <div class="item">
                    <a ng-href="/telugu-movies/appu-chesi-pappu-koodu?media=movie&amp;layout=movies"
                        href="/telugu-movies/appu-chesi-pappu-koodu?media=movie&amp;layout=movies">
                        <div class="item card-item" ng-class="{'image-flat':item.curved_edges== true}">
                            <div class="image-holder ng-scope" ng-class="{'rounded':item.curved_edges== true}"
                                ng-if="!listItem.media_list_in_list"> <img
                                    src="https://etv-win-image.akamaized.net/etvwin/telugumovies/appuchesipappukoodu/53882/appu-chesi-pappu-koodu-ACPK_Movie-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/appuchesipappukoodu/53882/appu-chesi-pappu-koodu-ACPK_Movie-270x360.jpg"
                                    alt="thumbnails">
                                <img class="premium-badge ng-scope"
                                    ng-if="listItem.access_control &amp;&amp; listItem.access_control.is_free===false"
                                    alt="premium" src='{{ asset('image/crown-small.png') }}'>

                            </div>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>

                {{-- <div class="item">
                    <a ng-href="/telugu-movies/appu-chesi-pappu-koodu?media=movie&amp;layout=movies"
                        href="/telugu-movies/appu-chesi-pappu-koodu?media=movie&amp;layout=movies">
                        <div class="item card-item" ng-class="{'image-flat':item.curved_edges== true}">
                            <div class="image-holder ng-scope" ng-class="{'rounded':item.curved_edges== true}"
                                ng-if="!listItem.media_list_in_list"> <img
                                    src="https://etv-win-image.akamaized.net/etvwin/telugumovies/appuchesipappukoodu/53882/appu-chesi-pappu-koodu-ACPK_Movie-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/appuchesipappukoodu/53882/appu-chesi-pappu-koodu-ACPK_Movie-270x360.jpg"
                                    alt="thumbnails">
                                <img class="premium-badge ng-scope"
                                    ng-if="listItem.access_control &amp;&amp; listItem.access_control.is_free===false"
                                    alt="premium" src='{{ asset('image/crown-small.png') }}'>

                            </div>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div class="item">
                    <a ng-href="/telugu-movies/appu-chesi-pappu-koodu?media=movie&amp;layout=movies"
                        href="/telugu-movies/appu-chesi-pappu-koodu?media=movie&amp;layout=movies">
                        <div class="item card-item" ng-class="{'image-flat':item.curved_edges== true}">
                            <div class="image-holder ng-scope" ng-class="{'rounded':item.curved_edges== true}"
                                ng-if="!listItem.media_list_in_list"> <img
                                    src="https://etv-win-image.akamaized.net/etvwin/telugumovies/appuchesipappukoodu/53882/appu-chesi-pappu-koodu-ACPK_Movie-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/appuchesipappukoodu/53882/appu-chesi-pappu-koodu-ACPK_Movie-270x360.jpg"
                                    alt="thumbnails">
                                <img class="premium-badge ng-scope"
                                    ng-if="listItem.access_control &amp;&amp; listItem.access_control.is_free===false"
                                    alt="premium" src='{{ asset('image/crown-small.png') }}'>

                            </div>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div class="item">
                    <a ng-href="/telugu-movies/appu-chesi-pappu-koodu?media=movie&amp;layout=movies"
                        href="/telugu-movies/appu-chesi-pappu-koodu?media=movie&amp;layout=movies">
                        <div class="item card-item" ng-class="{'image-flat':item.curved_edges== true}">
                            <div class="image-holder ng-scope" ng-class="{'rounded':item.curved_edges== true}"
                                ng-if="!listItem.media_list_in_list"> <img
                                    src="https://etv-win-image.akamaized.net/etvwin/telugumovies/appuchesipappukoodu/53882/appu-chesi-pappu-koodu-ACPK_Movie-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/appuchesipappukoodu/53882/appu-chesi-pappu-koodu-ACPK_Movie-270x360.jpg"
                                    alt="thumbnails">
                                <img class="premium-badge ng-scope"
                                    ng-if="listItem.access_control &amp;&amp; listItem.access_control.is_free===false"
                                    alt="premium" src='{{ asset('image/crown-small.png') }}'>

                            </div>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div class="item">
                    <a ng-href="/telugu-movies/appu-chesi-pappu-koodu?media=movie&amp;layout=movies"
                        href="/telugu-movies/appu-chesi-pappu-koodu?media=movie&amp;layout=movies">
                        <div class="item card-item" ng-class="{'image-flat':item.curved_edges== true}">
                            <div class="image-holder ng-scope" ng-class="{'rounded':item.curved_edges== true}"
                                ng-if="!listItem.media_list_in_list"> <img
                                    src="https://etv-win-image.akamaized.net/etvwin/telugumovies/appuchesipappukoodu/53882/appu-chesi-pappu-koodu-ACPK_Movie-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/appuchesipappukoodu/53882/appu-chesi-pappu-koodu-ACPK_Movie-270x360.jpg"
                                    alt="thumbnails">
                                <img class="premium-badge ng-scope"
                                    ng-if="listItem.access_control &amp;&amp; listItem.access_control.is_free===false"
                                    alt="premium" src='{{ asset('image/crown-small.png') }}'>

                            </div>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div class="item">
                    <a ng-href="/telugu-movies/appu-chesi-pappu-koodu?media=movie&amp;layout=movies"
                        href="/telugu-movies/appu-chesi-pappu-koodu?media=movie&amp;layout=movies">
                        <div class="item card-item" ng-class="{'image-flat':item.curved_edges== true}">
                            <div class="image-holder ng-scope" ng-class="{'rounded':item.curved_edges== true}"
                                ng-if="!listItem.media_list_in_list"> <img
                                    src="https://etv-win-image.akamaized.net/etvwin/telugumovies/appuchesipappukoodu/53882/appu-chesi-pappu-koodu-ACPK_Movie-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/appuchesipappukoodu/53882/appu-chesi-pappu-koodu-ACPK_Movie-270x360.jpg"
                                    alt="thumbnails">
                                <img class="premium-badge ng-scope"
                                    ng-if="listItem.access_control &amp;&amp; listItem.access_control.is_free===false"
                                    alt="premium" src='{{ asset('image/crown-small.png') }}'>

                            </div>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div> --}}

            </div>
        </div>


        {{-- Folklore --}}
        
        <div class="Folklore carousel-list">
            <a href="" class="section-title">Folklore</a>
            <a href="" class="see-all-link left-margin-episode " style="text-decoration: none">+More</a>
            <div class="owl-carousel owl-theme fluid" id="Folklore">
                {{-- @foreach ($Folklore as $index => $url)
                    <div class="item ">
                        <a href="">
                            <div class="item card-item">
                                <div class="image-holder ng-scope">
                                    <img src="{{ $url }}" lazy-img="{{ $url }}" alt="thumbnails">
                                    <img class="premium-badge ng-scope" alt="premium"
                                        src='{{ asset('image/crown-small.png') }}'>
                                </div>
                            </div>
                        </a>
                        <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                        <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                    </div>
                @endforeach --}}
            </div>
        </div>

        {{-- Action / Thriller --}}
       
        <div class="Action-Thriller carousel-list">
            <a href="" class="section-title"> Action / Thriller</a>
            <a href="" class="see-all-link left-margin-episode " style="text-decoration: none">+More</a>
            <div class="owl-carousel owl-theme fluid" id="Action-thriller">
                {{-- @foreach ($Action_Thriller as $url => $index)
                    <div class="item ">
                        <a href="">
                            <div class="item card-item">
                                <div class="image-holder ng-scope">
                                    <img src="{{ $index }}" lazy-img="{{ $index }}" alt="thumbnails">
                                    <img class="premium-badge ng-scope" alt="premium"
                                        src='{{ asset('image/crown-small.png') }}'>

                                </div>
                            </div>
                        </a>
                        <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                        <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                    </div>
                @endforeach --}}
            </div>
        </div>

        {{-- Latest News --}}
      
        <div class="Latest News carousel-list">
            <a href="" class="section-title">Latest News</a>
            <a href="" class="see-all-link left-margin-episode " style="text-decoration: none">+More</a>
            <div class="owl-carousel owl-theme fluid" id="Latest-News">
                {{-- @foreach ($Latest_News as $index => $news)
                    @if (isset($publishday_news[$index]) && isset($titles_news[$index]))
                        <div class="item ">
                            <a href="">
                                <div class="item card-item">
                                    <div class="image-holder">
                                        <img alt="icon" src="{{ $news }}" lazy-img="{{ $news }}">
                                        <img id="small-play-btn" alt="play"
                                            src='{{ asset('image/play-btn-new-big.png') }}'>
                                    </div>
                                    <h6 ng-if="listItem.show_meta_data=='yes'" class="ng-scope">
                                        <span ng-bind="listItem.title"
                                            class="ng-binding">{{ $titles_news[$index] }}</span>
                                        <span class="gray-dash">|</span>
                                        <format-date date="listItem.release_date_string"
                                            utsdate="listItem.release_date_uts" class="ng-isolate-scope">
                                            <span ng-bind="formattedDate"
                                                class="ng-binding">{{ $publishday_news[$index] }}</span>
                                        </format-date>
                                    </h6>
                                </div>
                            </a>
                            <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                            <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                        </div>
                    @endif
                @endforeach --}}
            </div>
        </div>

        {{-- Food --}}
      
        <div class="Food carousel-list">
            <a href="" class="section-title">Food</a>
            <a href="" class="see-all-link left-margin-episode " style="text-decoration: none">+More</a>
            <div class="owl-carousel owl-theme fluid" id="Food">
                {{-- @foreach ($Food as $index => $url)
                    <div class="item ">
                        <a href="">
                            <div class="item card-item">
                                <div class="image-holder ng-scope">
                                    <img src="{{ $url }}" lazy-img="{{ $url }}" alt="thumbnails">
                                </div>
                            </div>
                        </a>
                        <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                        <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                    </div>
                @endforeach --}}
            </div>
        </div>

        {{-- Health & Fitness --}}
      
        <div class="Health & Fitness carousel-list">
            <a href="" class="section-title">Health & Fitness</a>
            <a href="" class="see-all-link left-margin-episode " style="text-decoration: none">+More</a>
            {{-- <div class="owl-carousel owl-theme fluid" id="Health-FitNess">
                @foreach ($Health as $url => $index)
                    @if (isset($titles_health[$url]))
                        <div class="item ">
                            <a href="channels/etv-life/diet-nutrition/neredu-spritzer-neereeddu-spriddjr">
                                <div class="item card-item">
                                    <div class="image-holder ng-scope">
                                        <img src="{{ $index }}" lazy-img="{{ $index }}" alt="thumbnails">
                                        <img id="small-play-btn" alt="play"
                                            src='{{ asset('image/play-btn-new-big.png') }}'>
                                    </div>

                                    <h6 class="ng-binding ng-scope"> {{ $titles_health[$url] }}
                                    </h6>
                                </div>
                            </a>
                            <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                            <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                        </div>
                    @endif
                @endforeach --}}
            </div>
        </div>
    </div>




    <script src="{{ asset('js/Home.js') }}"></script>

    <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>

    {{-- <script type="text/javascript">
        $("img").lazyload({
            effect : "fadeIn"
        });
    </script> --}}

  {{-- <script src="{{asset('js/apiservice.js')}}"></script> --}}


@endsection
