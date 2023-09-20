@extends('layout')
@section('title', 'Home')

<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<script type="text/javascript" src="{{ URL::asset('js/owl.carousel.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
<link rel="stylesheet" href="{{ URL::asset('css/owl.theme.default.css') }}">


@section('content')




    <div class="container-fluid mt-5" style="padding-top:70px;  overflow:hidden;" >
        <div class="main-page-item">
            <div class="owl-carousel owl-theme fluid " id="main-page">
                <div class="ms-2 me-2">
                    <a href="">
                        <div class="cover-image channel_banner gen_desktop_image"
                        style="background:url(https://etv-win-image.akamaized.net/etvwin/exclusives/shows/dearmegha/subcategories/season1/episodes/dearmegamovie/61949/dear-mega-movie-Dear_megha_Movie-1960x600.jpg);background-repeat: no-repeat;background-position: center 20%;background-size: cover;">
                    </div>
                    <div class="cover-image channel_banner gen_mobile_image"
                        style="background:url(https://etv-win-image.akamaized.net/etvwin/exclusives/shows/dearmegha/subcategories/season1/episodes/dearmegamovie/48056/dear-mega-movie-Dear_megha_Movie-640x480.jpg);background-repeat: no-repeat;">
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
                            <img src="{{asset('image/play-btn-new-big.png')}}" alt="" id="carousel-play-btn">
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
                </div>

            </div>
        </div>
        {{-- WIN-Exclusive --}}
        <div class="WIN-Exclusives carousel-list">
            <a href="" class="section-title">WIN-Exclusive</a>
            <a href="" class="see-all-link left-margin-episode " style="text-decoration: none">+More</a>
            <div class="owl-carousel owl-theme fluid " id="another-carousel">
                <div class="item">
                    <a ng-href="/win-exclusive/kanulu-therichinaa-kanulu-moosinaa"
                        href="/win-exclusive/kanulu-therichinaa-kanulu-moosinaa">
                        <div class="item card-item tv-shows-banner">
                            <div class="image-holder">
                                <div class="cover-image channel_banner gen_desktop_image"
                                    style="background:url(https://etv-win-image.akamaized.net/etvwin/exclusives/shows61367/kanulu-therichinaa-kanulu-moosinaa/images/kanulu-therichinaa-kanulu-moosinaa-1960x600.jpg);
                                    background-repeat: no-repeat;background-position: center 20%;background-size: cover;">
                                </div>
                                <div class="cover-image channel_banner gen_mobile_image"
                                    style="background:url(https://etv-win-image.akamaized.net/etvwin/exclusives/shows61367/kanulu-therichinaa-kanulu-moosinaa/images/kanulu-therichinaa-kanulu-moosinaa-640x480.jpg);background-repeat: no-repeat;">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
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
            </div>
        </div>

        {{-- Before TV --}}
        <div class="Before TV carousel-list">
            <a href="" class="section-title">Before TV</a>
            <a href="" class="see-all-link left-margin-episode " style="text-decoration: none">+More</a>
            <div class="owl-carousel owl-theme fluid" id='Before-TV'>
                <div class="item ng-scope">
                    <a href="/shows/padutha-theeyaga-1/season-22/s22-epi-05" style="text-decoration: none;">
                        <div class="item card-item" ng-class="{'image-flat':item.curved_edges== true}">
                            <div class="image-holder" ng-class="{'rounded':item.curved_edges== true}">
                                <img alt="icon"
                                    src="https://etv-win-image.akamaized.net/etvwin/shows/shows/paduthatheeyaga/subcategories/season22/episodes/epi05/88346/epi-05-PT_03Jul23_EP_05_-384x216.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/shows/shows/paduthatheeyaga/subcategories/season22/episodes/epi05/88346/epi-05-PT_03Jul23_EP_05_-384x216.jpg">
                                <img id="small-play-btn" alt="play" src="{{ asset('image/play-btn-new-big.png') }}"
                                    class="ng-scope">
                                <img class="premium-badge ng-scope" alt="premium"
                                    src='{{ asset('image/crown-small.png') }}'>
                            </div>
                            <h6 ng-if="listItem.show_meta_data=='yes'" class="ng-scope">
                                <span ng-bind="listItem.title" class="ng-binding">S22 | Epi 05</span>
                                <span class="gray-dash">|</span>
                                <format-date class="ng-isolate-scope">
                                    <span ng-bind="formattedDate" class="ng-binding">5 hours
                                        ago</span>
                                </format-date>
                            </h6>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a><a
                        class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
            </div>

        </div>
        {{-- Live Tv --}}
        <div class="Live-Tv carousel-list">
            <a href="" class="section-title">Live Tv</a>
            <a class="see-all-link left-margin-episode  hideMoreBar" style="text-decoration: none">+ More</a>
            <div class="owl-carousel owl-theme" id="Live-TV">
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

            </div>
        </div>
        {{-- TV shows  --}}
        <div class="TV-SHows carousel-list">
            <a href="" class="section-title"> Tv Shows</a>
            <a href="" class="see-all-link left-margin-episode " style="text-decoration: none">+More</a>
            <div class="owl-carousel owl-theme fluid " id="TV-shows-carousel">
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

            </div>

        </div>
        {{-- trending show --}}

        <div class="trending-shows carousel-list">
            <a href="" class="section-title">Trending</a>
            <a href="" class="see-all-link left-margin-episode " style="text-decoration: none">+More</a>
            <div class="owl-carousel owl-theme fluid " id='Trending-carousel'>
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
                </div>


            </div>
        </div>
        {{-- Recommended For You --}}

        <div class="Recommended-For-You carousel-list">
            <a href="" class="section-title">Recommended For You</a>
            <a href="" class="see-all-link left-margin-episode " style="text-decoration: none">+More</a>
            <div class="owl-carousel owl-theme fluid" id="Recommended-for-you">
                <div class="item">
                    <a href="/win-exclusive/kanulu-therichinaa-kanulu-moosinaa/season-1-10/kanulu-therichinaa-kanulu-moosinaa"
                        style="text-decoration: none">
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
                </div>


            </div>
        </div>
        {{-- Top Movies --}}

        <div class="Top-Movies carousel-list">
            <a href="" class="section-title">Top Movies</a>
            <a href="" class="see-all-link left-margin-episode" style="text-decoration: none">+more</a>
            <div class="owl-carousel owl-theme fluid" id="Top-Movies-carousel">
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
            </div>
        </div>
        {{-- Family --}}

        <div class="Family carousel-list">
            <a href="" class="section-title">Family</a>
            <a href="" class="see-all-link left-margin-episode" style="text-decoration: none">+more</a>
            <div class="owl-carousel owl-theme fluid" id="Family">
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


            </div>
        </div>
        {{-- Comedy --}}

        <div class="Comedy carousel-list">
            <a href="" class="section-title">Comedy</a>
            <a href="" class="see-all-link left-margin-episode " style="text-decoration: none">+More</a>
            <div class="owl-carousel owl-theme fluid" id="Comedy">
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

        {{-- Classic --}}
        <div class="Classic carousel-list">
            <a href="" class="section-title">Classic</a>
            <a href="" class="see-all-link left-margin-episode " style="text-decoration: none">+More</a>
            <div class="owl-carousel owl-theme fluid" id="Classic">
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

            </div>

            {{-- Folklore --}}
            <div class="Folklore">
                <a href="" class="section-title">Folklore</a>
                <a href="" class="see-all-link left-margin-episode " style="text-decoration: none">+More</a>
                <div class="owl-carousel owl-theme fluid" id="Folklore">
                    <div class="item ">
                        <a href="/telugu-movies/rudhramadevi-1?media=movie&amp;layout=movies">
                            <div class="item card-item" ng-class="{'image-flat':item.curved_edges== true}">
                                <div class="image-holder ng-scope" ng-class="{'rounded':item.curved_edges== true}"
                                    ng-if="!listItem.media_list_in_list"> <img
                                        src="https://etv-win-image.akamaized.net/etvwin/telugumovies/rudhramadevi/88819/rudhramadevi-Rudhramadevi_Movie-270x360.jpg"
                                        lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/rudhramadevi/88819/rudhramadevi-Rudhramadevi_Movie-270x360.jpg"
                                        alt="thumbnails">
                                    <img class="premium-badge ng-scope" alt="premium"
                                        src='{{ asset('image/crown-small.png') }}'>
                                </div>
                            </div>
                        </a>
                        <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                        <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                    </div>

                </div>
            </div>
        </div>

        {{-- Action / Thriller --}}
        <div class="Action-Thriller carousel-list">
            <a href="" class="section-title"> Action / Thriller</a>
            <a href="" class="see-all-link left-margin-episode " style="text-decoration: none">+More</a>
            <div class="owl-carousel owl-theme fluid" id="Action-thriller">
                <div class="item ">
                    <a href="/telugu-movies/samarasimha-reddy?media=movie&amp;layout=movies">
                        <div class="item card-item">
                            <div class="image-holder ng-scope" ng-if="!listItem.media_list_in_list">
                                <img src="https://etv-win-image.akamaized.net/etvwin/telugumovies/samarasimhareddy/26370/samarasimha-reddy-Samarasimha_Reddy_Movie-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/samarasimhareddy/26370/samarasimha-reddy-Samarasimha_Reddy_Movie-270x360.jpg"
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
                    <a href="/telugu-movies/samarasimha-reddy?media=movie&amp;layout=movies">
                        <div class="item card-item">
                            <div class="image-holder ng-scope" ng-if="!listItem.media_list_in_list">
                                <img src="https://etv-win-image.akamaized.net/etvwin/telugumovies/samarasimhareddy/26370/samarasimha-reddy-Samarasimha_Reddy_Movie-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/samarasimhareddy/26370/samarasimha-reddy-Samarasimha_Reddy_Movie-270x360.jpg"
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
                    <a href="/telugu-movies/samarasimha-reddy?media=movie&amp;layout=movies">
                        <div class="item card-item">
                            <div class="image-holder ng-scope" ng-if="!listItem.media_list_in_list">
                                <img src="https://etv-win-image.akamaized.net/etvwin/telugumovies/samarasimhareddy/26370/samarasimha-reddy-Samarasimha_Reddy_Movie-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/samarasimhareddy/26370/samarasimha-reddy-Samarasimha_Reddy_Movie-270x360.jpg"
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
                    <a href="/telugu-movies/samarasimha-reddy?media=movie&amp;layout=movies">
                        <div class="item card-item">
                            <div class="image-holder ng-scope" ng-if="!listItem.media_list_in_list">
                                <img src="https://etv-win-image.akamaized.net/etvwin/telugumovies/samarasimhareddy/26370/samarasimha-reddy-Samarasimha_Reddy_Movie-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/samarasimhareddy/26370/samarasimha-reddy-Samarasimha_Reddy_Movie-270x360.jpg"
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
                    <a href="/telugu-movies/samarasimha-reddy?media=movie&amp;layout=movies">
                        <div class="item card-item">
                            <div class="image-holder ng-scope" ng-if="!listItem.media_list_in_list">
                                <img src="https://etv-win-image.akamaized.net/etvwin/telugumovies/samarasimhareddy/26370/samarasimha-reddy-Samarasimha_Reddy_Movie-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/samarasimhareddy/26370/samarasimha-reddy-Samarasimha_Reddy_Movie-270x360.jpg"
                                    alt="thumbnails">
                                <img class="premium-badge ng-scope" alt="premium"
                                    src='{{ asset('image/crown-small.png') }}'>

                            </div>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>

            </div>
        </div>

        {{-- Latest News --}}
        <div class="Latest News carousel-list">
            <a href="" class="section-title">Latest News</a>
            <a href="" class="see-all-link left-margin-episode " style="text-decoration: none">+More</a>
            <div class="owl-carousel owl-theme fluid" id="Latest-News">
                <div class="item ">
                    <a ng-href="/news/etv-news/7-am-etv-news-03-jul-23" href="/news/etv-news/7-am-etv-news-03-jul-23">
                        <div class="item card-item">
                            <div class="image-holder">
                                <img alt="icon"
                                    src="https://etv-win-image.akamaized.net/etvwin/news/shows/etvnews/episodes/7ametvnews03jul23/50118/7-am-etv-news-03-jul-23-ETV_7AM_03Jul23-384x216.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/news/shows/etvnews/episodes/7ametvnews03jul23/50118/7-am-etv-news-03-jul-23-ETV_7AM_03Jul23-384x216.jpg">
                                <img id="small-play-btn" alt="play"
                                    src='{{ asset('image/play-btn-new-big.png') }}'>
                            </div>
                            <h6 ng-if="listItem.show_meta_data=='yes'" class="ng-scope">
                                <span ng-bind="listItem.title" class="ng-binding">7 AM ETV News | 03 Jul 23</span>
                                <span class="gray-dash">|</span>
                                <format-date date="listItem.release_date_string" utsdate="listItem.release_date_uts"
                                    class="ng-isolate-scope">
                                    <span ng-bind="formattedDate" class="ng-binding">8 hours
                                        ago</span>
                                </format-date>
                            </h6>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div class="item ">
                    <a ng-href="/news/etv-news/7-am-etv-news-03-jul-23" href="/news/etv-news/7-am-etv-news-03-jul-23">
                        <div class="item card-item">
                            <div class="image-holder">
                                <img alt="icon"
                                    src="https://etv-win-image.akamaized.net/etvwin/news/shows/etvnews/episodes/7ametvnews03jul23/50118/7-am-etv-news-03-jul-23-ETV_7AM_03Jul23-384x216.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/news/shows/etvnews/episodes/7ametvnews03jul23/50118/7-am-etv-news-03-jul-23-ETV_7AM_03Jul23-384x216.jpg">
                                <img id="small-play-btn" alt="play"
                                    src='{{ asset('image/play-btn-new-big.png') }}'>
                            </div>
                            <h6 ng-if="listItem.show_meta_data=='yes'" class="ng-scope">
                                <span ng-bind="listItem.title" class="ng-binding">7 AM ETV News | 03 Jul 23</span>
                                <span class="gray-dash">|</span>
                                <format-date date="listItem.release_date_string" utsdate="listItem.release_date_uts"
                                    class="ng-isolate-scope">
                                    <span ng-bind="formattedDate" class="ng-binding">8 hours
                                        ago</span>
                                </format-date>
                            </h6>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
                <div class="item ">
                    <a ng-href="/news/etv-news/7-am-etv-news-03-jul-23" href="/news/etv-news/7-am-etv-news-03-jul-23">
                        <div class="item card-item">
                            <div class="image-holder">
                                <img alt="icon"
                                    src="https://etv-win-image.akamaized.net/etvwin/news/shows/etvnews/episodes/7ametvnews03jul23/50118/7-am-etv-news-03-jul-23-ETV_7AM_03Jul23-384x216.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/news/shows/etvnews/episodes/7ametvnews03jul23/50118/7-am-etv-news-03-jul-23-ETV_7AM_03Jul23-384x216.jpg">
                                <img id="small-play-btn" alt="play"
                                    src='{{ asset('image/play-btn-new-big.png') }}'>
                            </div>
                            <h6 ng-if="listItem.show_meta_data=='yes'" class="ng-scope">
                                <span ng-bind="listItem.title" class="ng-binding">7 AM ETV News | 03 Jul 23</span>
                                <span class="gray-dash">|</span>
                                <format-date date="listItem.release_date_string" utsdate="listItem.release_date_uts"
                                    class="ng-isolate-scope">
                                    <span ng-bind="formattedDate" class="ng-binding">8 hours
                                        ago</span>
                                </format-date>
                            </h6>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
            </div>
        </div>

        {{-- Food --}}
        <div class="Food carousel-list">
            <a href="" class="section-title">Food</a>
            <a href="" class="see-all-link left-margin-episode " style="text-decoration: none">+More</a>
            <div class="owl-carousel owl-theme fluid" id="Food">
                <div class="item ">
                    <a href="/recipes/drinks-juices">
                        <div class="item card-item">
                            <div class="image-holder ng-scope">
                                <img src="https://s3-ap-southeast-1.amazonaws.com/etv-win-image/etvwin/cataloglist/banner/featuredfood450774570/featuredfood-1960x600.jpg"
                                    lazy-img="https://s3-ap-southeast-1.amazonaws.com/etv-win-image/etvwin/cataloglist/banner/featuredfood450774570/featuredfood-1960x600.jpg"
                                    alt="thumbnails">
                            </div>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
            </div>
        </div>

        {{-- Health & Fitness --}}
        <div class="Health & Fitness carousel-list">
            <a href="" class="section-title">Health & Fitness</a>
            <a href="" class="see-all-link left-margin-episode " style="text-decoration: none">+More</a>
            <div class="owl-carousel owl-theme fluid" id="Health-FitNess">
                <div class="item ">
                    <a href="channels/etv-life/diet-nutrition/neredu-spritzer-neereeddu-spriddjr">
                        <div class="item card-item">
                            <div class="image-holder ng-scope">
                                <img src="https://etv-win-image.akamaized.net/etvwin/etvlife/nereduspritzer/77082/neredu-spritzer--QR_AMR_28Jun23_Recap_2-384x216.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/etvlife/nereduspritzer/77082/neredu-spritzer--QR_AMR_28Jun23_Recap_2-384x216.jpg"
                                    alt="thumbnails">
                                <img id="small-play-btn"
                                    ng-if="listItem.media_type=='episode' || listItem.media_type=='latest_episode' || listItem.media_type=='video'"
                                    alt="play"   src='{{ asset('image/play-btn-new-big.png') }}'>
                            </div>

                            <h6 ng-if="!listItem.media_list_in_list &amp;&amp; listItem.show_meta_data=='yes' &amp;&amp; listItem.media_type &amp;&amp; listItem.media_type!='episode'"
                                ng-bind="listItem.title" class="ng-binding ng-scope">Neredu Spritzer | నేరేడు
                                స్ప్రిడ్జర్
                            </h6>
                        </div>
                    </a>
                    <a class="left carousel-control remove-gradient" role="button" data-slide="prev"></a>
                    <a class="right carousel-control remove-gradient" role="button" data-slide="next"></a>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/Home.js') }}"></script>

    <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
@endsection
