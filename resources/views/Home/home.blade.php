@extends('layout')
@section('title', 'Home')
<!-- Include the LazyLoad plugin script -->
<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
{{-- <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.css') }}" /> --}}
{{-- <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}" /> --}}
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<script type="text/javascript" src="{{ URL::asset('js/owl.carousel.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
<link rel="stylesheet" href="{{ URL::asset('css/owl.theme.default.css') }}">


@section('content')
    



<div class="container-fluid" style=" padding-bottom:40px;padding-top:70px; width:100% !important; overflow:auto;">
    <div class="owl-carousel owl-theme" id="main-page">
        <div class="item"> <img class="owl-lazy" data-src="{{ asset('image/tst.jpg') }}"
                data-src-retina="{{ asset('image/tst.jpg') }}" alt=""></div>
        <div class="item"> <img class="owl-lazy" data-src="{{ asset('image/tst.jpg') }}" alt="Slide Image"></div>
        <picture>
            {{-- <source class="owl-lazy" media="(min-width: 300px)" data-srcset="{{ asset('image/sample.jpg') }}"> --}}
            <img class="owl-lazy" data-src="https://placehold.it/350x250&text=3-fallback" alt="">
        </picture>
        <div class="item"> <img class="owl-lazy" data-src="{{ asset('image/tst.jpg') }}" alt="Slide Image"></div>
        <div class="item"> <img class="owl-lazy" data-src="{{ asset('image/tst.jpg') }}" alt="Slide Image"></div>
        <div class="item"> <img class="owl-lazy" data-src="{{ asset('image/tst.jpg') }}" alt="Slide Image"></div>
        <div class="item"> <img class="owl-lazy" data-src="{{ asset('image/tst.jpg') }}" alt="Slide Image"></div>


    </div>
    {{-- WIN-Exclusive --}}
    <div class="WIN Exclusives">
        <a href="" class="section-title">WIN-Exclusive</a>
        <a href="" class="see-all-link left-margin-episode ">+More</a>
        <div class="owl-carousel owl-theme" id="another-carousel">
            <div class="item">
                <img class="owl-lazy" data-src="{{ asset('image/tst.jpg') }}" alt="Slide Image">
            </div>
            <div class="item">
                <img class="owl-lazy" data-src="{{ asset('image/tst.jpg') }}" alt="Slide Image">
            </div>
            <!-- Add more carousel items here -->

        </div>
    </div>
    {{-- Before TV --}}
    <div class="Before TV">

        <a href="" class="section-title">Before TV</a>
        <a href="" class="see-all-link left-margin-episode ">+More</a>
        <div class="owl-carousel owl-theme" id='Before-TV'>
            <div class="item"
                style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; ">
                <img alt="" class="owl-lazy" data-src="{{ asset('image/sample.jpg') }}">
            </div>
            <div class="item">
                <img alt="" class="owl-lazy" data-src="{{ asset('image/sample.jpg') }}">
            </div>
            <div class="item">
                <img alt="" class="owl-lazy" data-src="{{ asset('image/sample.jpg') }}">
            </div>
            <div class="item">
                <img alt="" class="owl-lazy" data-src="{{ asset('image/sample.jpg') }}">
            </div>
            <div class="item">
                <img alt="" class="owl-lazy" data-src="{{ asset('image/sample.jpg') }}">
            </div>
            <div class="item">
                <img alt="" class="owl-lazy" data-src="{{ asset('image/sample.jpg') }}">
            </div>
        </div>
    </div>
    <div class="Live-Tv">
        <h2>Live TV</h2>
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

</div>

<script src="{{ asset('js/Home.js') }}"></script>

<script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
@endsection
