@extends('layout')
<link rel="stylesheet" href="{{ asset('css/more.css') }}">
<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/owl.carousel.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
<link rel="stylesheet" href="{{ URL::asset('css/owl.theme.default.css') }}">

@section('content')
    <div class="ekta-view">
        <div class="container-fluid">
            <div class="yellow-bar movie-musical-hits" style="">
                <div>
                    <a class="see-all-title dropdown-padding dropdown ng-binding ng-scope">
                        Musical Hits
                    </a>
                </div>
            </div>
            <div class="see-all-container">
                <div class="owl-carousel owl-theme fluid" id='Musical_Hits'>
                    <a href="/telugu-movies/sammohanam?media=movie&amp;layout=movies">
                        <div class="item card-item description-line">
                            <div class="image-holder ng-scope">
                                <img src="https://etv-win-image.akamaized.net/etvwin/telugumovies/sammohanam/11885/sammohanam-Sammohanam_Movie-270x360.jpg"
                                    lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/sammohanam/11885/sammohanam-Sammohanam_Movie-270x360.jpg"
                                    alt="thumbnails">
                                <img class="premium-badge ng-scope" alt="premium"
                                    src="{{ asset('image/crown-small.png') }}">
                            </div>
                        </div>
                    </a>
                    <div class="item card-item description-line">
                        <div class="image-holder ng-scope">
                            <img src="https://etv-win-image.akamaized.net/etvwin/telugumovies/sammohanam/11885/sammohanam-Sammohanam_Movie-270x360.jpg"
                                lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/sammohanam/11885/sammohanam-Sammohanam_Movie-270x360.jpg"
                                alt="thumbnails">
                            <img class="premium-badge ng-scope" alt="premium"
                                src="{{ asset('image/crown-small.png') }}">
                        </div>
                    </div>
                    <div class="item card-item description-line">
                        <div class="image-holder ng-scope">
                            <img src="https://etv-win-image.akamaized.net/etvwin/telugumovies/sammohanam/11885/sammohanam-Sammohanam_Movie-270x360.jpg"
                                lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/sammohanam/11885/sammohanam-Sammohanam_Movie-270x360.jpg"
                                alt="thumbnails">
                            <img class="premium-badge ng-scope" alt="premium"
                                src="{{ asset('image/crown-small.png') }}">
                        </div>
                    </div>
                    <div class="item  description-line">
                        <div class="image-holder ng-scope">
                            <img src="https://etv-win-image.akamaized.net/etvwin/telugumovies/sammohanam/11885/sammohanam-Sammohanam_Movie-270x360.jpg"
                                lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/sammohanam/11885/sammohanam-Sammohanam_Movie-270x360.jpg"
                                alt="thumbnails">
                            <img class="premium-badge ng-scope" alt="premium"
                                src="{{ asset('image/crown-small.png') }}">
                        </div>
                    </div>
                    <div class="item  description-line">
                        <div class="image-holder ng-scope">
                            <img src="https://etv-win-image.akamaized.net/etvwin/telugumovies/sammohanam/11885/sammohanam-Sammohanam_Movie-270x360.jpg"
                                lazy-img="https://etv-win-image.akamaized.net/etvwin/telugumovies/sammohanam/11885/sammohanam-Sammohanam_Movie-270x360.jpg"
                                alt="thumbnails">
                            <img class="premium-badge ng-scope" alt="premium"
                                src="{{ asset('image/crown-small.png') }}">
                        </div>
                    </div>

                </div>


                <div class="clear"></div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/more.js') }}"></script>
@endsection
