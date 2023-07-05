@extends('layout')

@section('content')
<link rel="stylesheet" href="{{asset('css/TvShows.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="ekta-view">
<div class="list-container ng-scope" style="">
    <div class="container showDet-container extra-height extra-height-saranyu" aria-hidden="false">
        <div class="main-container details margin-nullify">
            <div class="details-container">
                <div class="responsive_video_container ng-scope">
                    <div class="saranyu_player_wrapper extra-height-player-saranyu">
                        <div 
                        class="video-thumbnail-holder ng-scope" role="button"
                            tabindex="0">
                            <img class="poster-image image-size-reduce" alt="image"
                                src="https://etv-win-image.akamaized.net/etvwin/exclusives/shows/dearmegha/subcategories/season1/episodes/dearmegamovie/48056/dear-mega-movie-Dear_megha_Movie-768x432.jpg"
                                lazy-img="https://etv-win-image.akamaized.net/etvwin/exclusives/shows/dearmegha/subcategories/season1/episodes/dearmegamovie/48056/dear-mega-movie-Dear_megha_Movie-768x432.jpg">
                            <img class="video-thumbnail-play ng-scope" alt="play"
                             src="{{asset('image/play-btn-new-big.png')}}">
                        </div>
                        <div class="trailer_promo_head_wrapper">

                        </div>
                    </div>
                </div>
                <div class="player-rating-wrapper">
                </div>
                <div ng-if="detCtrl.answered===false" class="ng-scope">
                    <div class="title-holder">
                        <h1 ng-class="{'title-font-size': detCtrl.videoData.title.length <= 40}"
                            class="ng-binding title-font-size">Dear Megha
                            <span class="golden-bar meta-golden-bar white-text-color ng-scope"
                                ng-if="detCtrl.videoData.release_date_string">
                            </span>
                            <span class="video-date ng-scope date-font-size"
                                ng-class="{'date-font-size': detCtrl.videoData.title.length <= 40}"
                                ng-if="detCtrl.videoData.release_date_string">
                                <format-date date="detCtrl.videoData.release_date_string"
                                    utsdate="detCtrl.videoData.release_date_uts" class="ng-isolate-scope">
                                    <span ng-bind="formattedDate" class="ng-binding">29 Mar 23
                                    </span>
                                </format-date>
                            </span>
                        </h1>
                    </div>
                    <div class="videonav">
                        <ul class="videolinks">

                            <li class="right-margin-alter ng-scope">
                                <p class="channel-object ng-binding">
                                    ETV Win Exclusive
                                </p>
                            </li>
                            <li class="ng-scope">
                                <p class="content-grading left-margin-nullify ng-binding">
                                    U</p>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix">
                        <ul class="nav-pills viewerslinks genre-tags">

                            <li class="genre-border meta-genre-border ng-binding ng-scope" ng-bind="value">
                                Romance</li>
                        </ul>
                        <div class="question">
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="viewersnav">
                        <ul class="viewerslinks">
                            <li class="comment_padding">
                                <label class="switch" role="button" tabindex="0">
                                    <input type="checkbox" ng-disabled="detCtrl.isLikeDisabled"
                                        ng-checked="detCtrl.isAddedToLike" class="like-checkbox" disabled="disabled">
                                    <em class="icon-like like-indicator fa fa-thumbs-up"   aria-hidden="true">
                                    </em>
                                    <span class="like-count ng-binding ng-hide"  aria-hidden="true">233</span>
                                </label>
                            </li>
                            <li class="dropdown share-dropdown comment_padding">
                                <a data-toggle="dropdown ">
                                    <span class="icon-share fa fa-share-alt icon-video-share"></span>
                                </a>
                                <div class="dropdown-menu dropdown-content ng-social-container ng-isolate-scope"
                                    data-url="detCtrl.videoData.dynamic_url" data-title="detCtrl.videoData.title"
                                    data-image="detCtrl.videoData.thumbnails.medium_4_3.url">
                                    <ul class="ng-social" ng-transclude="">
                                        <p class="ng-scope">
                                            Share This Video
                                        </p>
                                        <li class="ng-social-facebook ng-scope" data-toggle="tooltip" title="Facebook"
                                            role="button" tabindex="0"><a
                                                ng-href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ff66tr.app.goo.gl%2FM2AC72gqh7vg6oX27"
                                                target="_blank" ng-click="ctrl.clickShare($event, options)"
                                                class="ng-social-button"
                                                href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ff66tr.app.goo.gl%2FM2AC72gqh7vg6oX27">
                                                <span
                                                    class="fa fa-facebook"></span>
                                                    <span class="ng-social-text"
                                                    ng-transclude="">
                                                    <em class="icon-facebook share-fb ng-scope"
                                                        aria-hidden="true">
                                                    </em></span>
                                            </a>
                                            <span ng-show="count" class="ng-social-counter ng-binding ng-hide"
                                                aria-hidden="true"></span>
                                        </li>
                                        <div class="copy_text ng-scope ng-hide" aria-hidden="true">
                                            <p>Copied website URL</p>
                                        </div>
                                        <li data-toggle="tooltip" title="copy" class="ng-scope" role="button"
                                            tabindex="0">
                                            <img src="{{asset('image/copy.png')}}" class="copy_image">
                                            <span id="selecturl"></span>
                                        </li>
                                        <li class="ng-social-twitter ng-scope"
                                            ng-click="detCtrl.sendShareAnalytics('Twitter')" data-toggle="tooltip"
                                            title="Twitter" role="button" tabindex="0">
                                            <a ng-href="https://twitter.com/intent/tweet?url=https%3A%2F%2Ff66tr.app.goo.gl%2FM2AC72gqh7vg6oX27&amp;text=Dear%20Megha"
                                                target="_blank" ng-click="ctrl.clickShare($event, options)"
                                                class="ng-social-button"
                                                href="https://twitter.com/intent/tweet?url=https%3A%2F%2Ff66tr.app.goo.gl%2FM2AC72gqh7vg6oX27&amp;text=Dear%20Megha"><span
                                                    class="ng-social-icon"></span>
                                                <span class="ng-social-text" ng-transclude=""><em
                                                        class="icon-twitter share-tw ng-scope"
                                                        aria-hidden="true"></em>
                                                </span></a>
                                            <span ng-show="count" class="ng-social-counter ng-binding ng-hide"
                                                aria-hidden="true"></span>
                                        </li>
                                        <li data-toggle="tooltip" title="Mail" class="ng-scope">
                                            <a href="mailto:?subject=Check this video&amp;body=Dear Megha https://f66tr.app.goo.gl/M2AC72gqh7vg6oX27"
                                                title="Mail">
                                                <em data-toggle="tooltip" title="Mail" class="icon-mail share-mail"
                                                    aria-hidden="true"></em></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li ng-class="{comment_padding: !detCtrl.gb_commentable}" class="comment_padding">
                                <label ng-click="detCtrl.addToPlaylist('watchlater')" class="switch" role="button"
                                    tabindex="0">
                                    <input type="checkbox" class="watchlater-checkbox " disabled="disabled">
                                    <span class=" far fa-clock wl-indicator" aria-hidden="true">
                                    </span></label>
                            </li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                    <div class="description">
                         <input type="checkbox" class="read-more-state" id="post-1">
                        <p class="read-more-wrap intro">
                            <span class="firstline ng-binding">Dear
                                Megha is a romantic drama which will make you lose yourself in the emotional journey of
                                an introvert girl falling in love and how destiny plays with her emotions.
                                Directed by A Sushanth Reddy
                                Music by Gowra Hari
                                Starring Megha Akash, Adith Arun, Arjun Somayajula and more
                            </span>
                            <span class="read-more-target ng-binding" ng-bind="detCtrl.videoData.description">Dear
                                Megha
                                is a romantic drama which will make you lose yourself in the emotional journey of an
                                introvert girl falling in love and how destiny plays with her emotions.
                                Directed by A Sushanth Reddy
                                Music by Gowra Hari
                                Starring Megha Akash, Adith Arun, Arjun Somayajula and more
                            </span>
                        </p>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="tabDetails">
                    <div class="carousel-container">
                        <ul class="category">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
