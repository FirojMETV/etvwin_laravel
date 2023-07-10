@extends('layout')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/watchlater.css') }}">
    <div class="ekta-view">
        <div class="container-fluid watch-later ng-scope"
            ng-if="!watchLaterCtrl.isEditable &amp;&amp; watchLaterCtrl.isItemAvailable">
            <div class="custom-margin-container">
                <div class="watch-later-header">
                    <h1>Watch Later</h1>
                </div>
                <div class="watchlater-button-area">
                    <a class="ng-scope" style="">
                        DELETE
                    </a>
                </div>
                <div class="owl-carousel owl-theme fluid" id="Watchlater">

                    <div class="item card-item">
                        <div class="image-holder">
                            <img alt="icon" ng-click="itemClicked(listItem)"
                                src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi66/47286/epi-66-SVL_08Jul23_EP_66-384x216.jpg"
                                lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi66/47286/epi-66-SVL_08Jul23_EP_66-384x216.jpg"
                                role="button" tabindex="0">
                            <img id="small-play-btn" alt="play"src="{{ asset('image/play-btn-new.png') }}">
                            <img class="premium-badge ng-scope" alt="premium" src="{{ asset('image/crown-small.png') }}">
                        </div>
                        <h6 class="ng-scope">
                            <span ng-bind="item.title" class="ng-binding">Epi 66
                            </span>
                            <span ng-if="item.theme != 'video'" class="gray-dash ng-scope">|
                            </span>
                            <format-date ng-if="item.theme != 'video'" date="item.release_date_string"
                                utsdate="item.release_date_uts" class="ng-scope ng-isolate-scope">
                                <span ng-bind="formattedDate" class="ng-binding">08 Jul 23</span>
                            </format-date>
                        </h6>
                    </div>

                    <div class="item card-item">
                        <div class="image-holder">
                            <img alt="icon" ng-click="itemClicked(listItem)"
                                src="https://etv-win-image.akamaized.net/etvwin/serials/shows/rangularatnam/subcategories/season1/episodes/epi515/30202/epi-515-RRTM_10Jul23_EP_515-384x216.jpg"
                                lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/rangularatnam/subcategories/season1/episodes/epi515/30202/epi-515-RRTM_10Jul23_EP_515-384x216.jpg"
                                role="button" tabindex="0">
                            <img id="small-play-btn" alt="play" src="{{ asset('image/play-btn-new.png') }}">
                            <img class="premium-badge ng-scope" src="{{ asset('image/crown-small.png') }}">
                        </div>
                        <h6 ng-if="item.media_type &amp;&amp; item.media_type=='episode'" class="ng-scope">
                            <span ng-bind="item.title" class="ng-binding">
                                Epi 515</span>
                            <span ng-if="item.theme != 'video'" class="gray-dash ng-scope">|</span>

                            <format-date ng-if="item.theme != 'video'" date="item.release_date_string"
                                utsdate="item.release_date_uts" class="ng-scope ng-isolate-scope">
                                <span ng-bind="formattedDate" class="ng-binding">8 hours ago
                                </span>
                            </format-date>

                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="{{ asset('js/watchlater.js') }}"></script>
@endsection
