<div class="ekta-view ng-scope top-large" id="view_begin" ng-class="{'top-large':heightst, 'top-small':!heightst}"
    ng-view="" style="">
    <!-- ngIf: !isPageLoading -->
    <div class="list-container ng-scope" ng-if="!isPageLoading" style="">
        <div class="container showDet-container extra-height extra-height-saranyu"
            ng-class="{'extra-height':heightst,'extra-height-saranyu':!detCtrl.playurlyoutube}"
            ng-show="!detCtrl.showComment" aria-hidden="false">
            <div class="main-container details margin-nullify">
                <div class="details-container">
                    <!-- ngIf: detCtrl.showsubscriptionShow -->
                    <!-- ngIf: !detCtrl.playurlyoutube -->
                    <div class="responsive_video_container ng-scope" ng-if="!detCtrl.playurlyoutube">
                        <div class="saranyu_player_wrapper extra-height-player-saranyu"
                            ng-class="{'extra-height-player-saranyu':heightst}">
                            <!-- ngIf: detCtrl.videoLoaded && !detCtrl.Isios && !detCtrl.playurlyoutube -->
                            <media-player id="video_play"
                                ng-if="detCtrl.videoLoaded &amp;&amp; !detCtrl.Isios &amp;&amp; !detCtrl.playurlyoutube"
                                crossorigin="anonymous" mediatype="video"
                                videoobject="{&quot;title&quot;:&quot;Epi 62&quot;,&quot;alternate_title&quot;:&quot;&quot;,&quot;display_title&quot;:&quot;&quot;,&quot;ml_title&quot;:[{&quot;code&quot;:&quot;en&quot;,&quot;text&quot;:&quot;Epi 62&quot;}],&quot;content_id&quot;:&quot;64a24f1070c593fdb9000dac&quot;,&quot;catalog_id&quot;:&quot;59954ae6deedb723e9000024&quot;,&quot;sequence_no&quot;:1,&quot;language&quot;:&quot;telugu&quot;,&quot;state&quot;:&quot;&quot;,&quot;district&quot;:&quot;&quot;,&quot;city&quot;:&quot;&quot;,&quot;item_languages&quot;:&quot;&quot;,&quot;genres&quot;:[&quot;socio_fantasy&quot;,&quot;family_drama&quot;],&quot;tags&quot;:[],&quot;display_genres&quot;:[&quot;Socio Fantasy&quot;,&quot;Family Drama&quot;],&quot;display_tags&quot;:[],&quot;description&quot;:&quot;Sambaiah attempts suicide when Keshav refuses to sign Pranathi's bank loan documents. Kodandaramayya learns about Sambaiah's suicide and visits his house to see him.&quot;,&quot;alternate_description&quot;:&quot;&quot;,&quot;smart_url&quot;:&quot;https://prod.suv.etvwin.com/v2/smart_urls/64a2d19fc7036a0cfa0838a8&quot;,&quot;smarturl_list&quot;:[],&quot;html_list&quot;:[],&quot;thumbnails&quot;:{&quot;high_16_9&quot;:{&quot;url&quot;:&quot;https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi62/94744/epi-62-SVL_04Jul23_EP_62-768x432.jpg&quot;},&quot;medium_16_9&quot;:{&quot;url&quot;:&quot;https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi62/94744/epi-62-SVL_04Jul23_EP_62-384x216.jpg&quot;},&quot;medium_3_4&quot;:{&quot;url&quot;:&quot;https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi62/94744/epi-62-SVL_04Jul23_EP_62-270x360.jpg&quot;},&quot;high_3_4&quot;:{&quot;url&quot;:&quot;https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi62/94744/epi-62-SVL_04Jul23_EP_62-540x720.jpg&quot;},&quot;high_4_3&quot;:{&quot;url&quot;:&quot;https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi62/94744/epi-62-SVL_04Jul23_EP_62-640x480.jpg&quot;},&quot;medium_4_3&quot;:{&quot;url&quot;:&quot;https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi62/94744/epi-62-SVL_04Jul23_EP_62-320x240.jpg&quot;},&quot;web_banner&quot;:{&quot;url&quot;:&quot;https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi62/94744/epi-62-SVL_04Jul23_EP_62-1960x600.jpg&quot;}},&quot;thumbnail_list&quot;:[],&quot;subcategory_id&quot;:&quot;6426b7f170c593b061001157&quot;,&quot;show_theme_id&quot;:&quot;6426b6b970c593b061001153&quot;,&quot;rating&quot;:5,&quot;duration&quot;:60,&quot;duration_string&quot;:&quot;20:01&quot;,&quot;duration_string_sec&quot;:1201,&quot;people&quot;:[],&quot;asset_id&quot;:&quot;SVL_04Jul23_EP_62&quot;,&quot;average_user_rating&quot;:&quot;0.0&quot;,&quot;ott_guidelines&quot;:[&quot;Drama&quot;],&quot;intro_start_time&quot;:&quot;&quot;,&quot;intro_end_time&quot;:&quot;&quot;,&quot;end_credits_start_time&quot;:&quot;&quot;,&quot;intro_start_time_sec&quot;:0,&quot;intro_end_time_sec&quot;:0,&quot;end_credits_start_time_sec&quot;:0,&quot;next_item&quot;:&quot;&quot;,&quot;next_item_theme&quot;:&quot;EpisodeTheme&quot;,&quot;play_url&quot;:{&quot;saranyu&quot;:{&quot;url&quot;:&quot;https://prod.suv.etvwin.com/v3/smart_urls/64a2d19fc7036a0cfa0838a8&quot;}},&quot;play_url_type&quot;:&quot;saranyu&quot;,&quot;custom_fields&quot;:{},&quot;like_count&quot;:2,&quot;view_count&quot;:179,&quot;no_of_user_rated&quot;:0,&quot;poll_obj&quot;:[],&quot;access_control&quot;:{&quot;access_control_id&quot;:&quot;5926c11799728d51a5000137&quot;,&quot;title&quot;:&quot;ETV Win Premium&quot;,&quot;is_free&quot;:false,&quot;ads_available&quot;:false,&quot;start_date&quot;:&quot;2017-05-25T17:00:00.000+00:00&quot;,&quot;end_date&quot;:&quot;2018-01-25T17:00:00.000+00:00&quot;,&quot;login_required&quot;:true,&quot;mid_role_settings&quot;:{&quot;mobile_ads_url&quot;:&quot;https://pubads.g.doubleclick.net/gampad/ads?slotname=/21769336530/ETV_APP_MIDROLL&amp;sz=480x361|480x360&amp;unviewed_position_start=1&amp;env=instream&amp;gdfp_req=1&amp;ad_rule=0&amp;output=xml_vast4&amp;description_url=https://preprod.etvwin.com&amp;vad_type=linear&amp;vpos=midroll&amp;pod=1&amp;min_ad_duration=0&amp;max_ad_duration=999000&amp;ppos=1&amp;lip=true&amp;npa=false&amp;kfa=0&amp;tfcd=0&amp;wta=1&amp;npa=0&quot;,&quot;ads_url&quot;:&quot;https://pubads.g.doubleclick.net/gampad/ads?iu=/21769336530/ETV_WEB_MIDROLL&amp;description_url=https%3A%2F%2Fpreprod.etvwin.com&amp;sz=480x361|480x360&amp;gdfp_req=1&amp;output=xml_vast4&amp;unviewed_position_start=1&amp;env=instream&amp;correlator=&amp;vpos=midroll&amp;wta=1&amp;ad_rule=0&amp;npa=0&quot;,&quot;mid_role_frequency&quot;:5,&quot;active&quot;:true,&quot;type&quot;:&quot;VAST&quot;,&quot;midroll_position&quot;:[240,480,720,960,1200]},&quot;overlay_settings&quot;:{&quot;mobile_ads_url&quot;:null,&quot;ads_url&quot;:&quot;&quot;,&quot;overlay_frequency&quot;:-1,&quot;active&quot;:false,&quot;type&quot;:&quot;&quot;},&quot;vmap_settings&quot;:{&quot;mobile_ads_url&quot;:&quot;https://googleads.g.doubleclick.net/pagead/ads?client=ca-video-pub-5331721978907050&amp;ad_type=video&amp;description_url=https%3A%2F%2Fpreprod.etvwin.com%2F&amp;max_ad_duration=30000&amp;videoad_start_delay=0&amp;vpmute=0&amp;vpa=auto&amp;ad_rule=1&amp;npa=0&quot;,&quot;ads_url&quot;:&quot;https://googleads.g.doubleclick.net/pagead/ads?client=ca-video-pub-5331721978907050&amp;ad_type=video&amp;description_url=https%3A%2F%2Fpreprod.etvwin.com%2F&amp;max_ad_duration=30000&amp;videoad_start_delay=0&amp;vpmute=0&amp;vpa=auto&amp;ad_rule=1&amp;npa=0&quot;},&quot;pre_role_settings&quot;:{&quot;mobile_ads_url&quot;:&quot;https://pubads.g.doubleclick.net/gampad/ads?slotname=/21769336530/ETV_APP_PREROLL&amp;sz=480x361|480x360&amp;unviewed_position_start=1&amp;env=instream&amp;gdfp_req=1&amp;ad_rule=0&amp;output=xml_vast4&amp;description_url=https://preprod.etvwin.com&amp;vad_type=linear&amp;vpos=preroll&amp;pod=1&amp;min_ad_duration=0&amp;max_ad_duration=999000&amp;ppos=1&amp;lip=true&amp;npa=false&amp;kfa=0&amp;tfcd=0&amp;wta=1&amp;npa=0&quot;,&quot;ads_url&quot;:&quot;https://pubads.g.doubleclick.net/gampad/ads?iu=/21769336530/ETV_WEB_PREROLL&amp;description_url=https%3A%2F%2Fpreprod.etvwin.com&amp;sz=480x361|480x360&amp;gdfp_req=1&amp;output=xml_vast4&amp;unviewed_position_start=1&amp;env=instream&amp;correlator=&amp;vpos=preroll&amp;wta=1&amp;ad_rule=0&amp;npa=0&quot;,&quot;active&quot;:true,&quot;type&quot;:&quot;VAST&quot;},&quot;post_role_settings&quot;:{&quot;mobile_ads_url&quot;:&quot;https://pubads.g.doubleclick.net/gampad/ads?slotname=/21769336530/ETV_APP_POSTROLL&amp;sz=480x361|480x360&amp;unviewed_position_start=1&amp;env=instream&amp;gdfp_req=1&amp;ad_rule=0&amp;output=xml_vast4&amp;description_url=https://preprod.etvwin.com&amp;vpos=postroll&amp;pod=1&amp;min_ad_duration=0&amp;max_ad_duration=999000&amp;ppos=1&amp;lip=true&amp;npa=false&amp;kfa=0&amp;tfcd=0&amp;wta=1&amp;npa=0&quot;,&quot;ads_url&quot;:&quot;https://pubads.g.doubleclick.net/gampad/ads?iu=/21769336530/ETV_WEB_POSTROLL&amp;description_url=https%3A%2F%2Fpreprod.etvwin.com&amp;sz=480x361|480x360&amp;gdfp_req=1&amp;output=xml_vast4&amp;unviewed_position_start=1&amp;env=instream&amp;correlator=&amp;vpos=postroll&amp;wta=1&amp;ad_rule=0&amp;npa=0&quot;,&quot;active&quot;:true,&quot;type&quot;:&quot;VAST&quot;}},&quot;watchhistory_interval_sec&quot;:&quot;300&quot;,&quot;promo_asset_id&quot;:&quot;SVL_03Jul23_Promo&quot;,&quot;preview_available&quot;:true,&quot;preview&quot;:{&quot;promo_asset_id&quot;:&quot;SVL_03Jul23_Promo&quot;,&quot;play_url&quot;:{&quot;saranyu&quot;:{&quot;url&quot;:&quot;https://prod.suv.etvwin.com/v3/smart_urls/64a2cd5fc7036a0cfa0838a5&quot;}},&quot;play_url_type&quot;:&quot;saranyu&quot;},&quot;catalog_name&quot;:&quot;Serials&quot;,&quot;show_name&quot;:&quot;Srivalli&quot;,&quot;subcategory_name&quot;:&quot;Season 1&quot;,&quot;short_description&quot;:&quot;Sambaiah attempts suicide when Keshav refuses to sign Pranathi's bank loan documents. Kodandaramayya learns about Sambaiah's suicide and visits his house to see him.&quot;,&quot;keywords&quot;:&quot;Srivalli&quot;,&quot;release_date_string&quot;:&quot;2023-07-04T00:30:00.000+00:00&quot;,&quot;release_date_uts&quot;:1688430600,&quot;media_type&quot;:&quot;episode&quot;,&quot;content_type&quot;:&quot;article&quot;,&quot;part&quot;:1,&quot;total_parts&quot;:1,&quot;friendly_id&quot;:&quot;epi-62-91&quot;,&quot;svod&quot;:[],&quot;tvod&quot;:[],&quot;midrollads_intervals&quot;:[],&quot;published_date&quot;:&quot;2023-07-04T00:29:28.993+00:00&quot;,&quot;unpublished_date&quot;:&quot;&quot;,&quot;language_list&quot;:[&quot;telugu&quot;],&quot;share_url&quot;:&quot;https://www.etvwin.com/tv-serials/srivalli/season-1-10/epi-62-91&quot;,&quot;dynamic_url&quot;:&quot;https://f66tr.app.goo.gl/7tf7upjUunpHkYeC6&quot;,&quot;theme&quot;:&quot;episode&quot;,&quot;view_countable&quot;:false,&quot;like_countable&quot;:false,&quot;commentable&quot;:null,&quot;meta_title&quot;:&quot;&quot;,&quot;meta_description&quot;:&quot;&quot;,&quot;meta_keywords&quot;:&quot;&quot;,&quot;sub_genres&quot;:[],&quot;display_sub_genres&quot;:[],&quot;channel_object&quot;:{&quot;name&quot;:&quot;ETV Telugu&quot;},&quot;seo_url&quot;:&quot;/serials/srivalli/season-1-10/epi-62-91&quot;,&quot;created_at&quot;:&quot;2023-07-03T04:31:13.457Z&quot;,&quot;show_object&quot;:{&quot;friendly_id&quot;:&quot;srivalli&quot;},&quot;catalog_object&quot;:{&quot;friendly_id&quot;:&quot;tv-serials&quot;,&quot;new_friendly_id&quot;:&quot;&quot;,&quot;layout_type&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;},&quot;subcategory_object&quot;:{&quot;parentree&quot;:[{&quot;sub_name&quot;:&quot;Season 1&quot;,&quot;sub_id&quot;:&quot;6426b7f170c593b061001157&quot;,&quot;friendly_id&quot;:&quot;season-1-10&quot;}]},&quot;show_meta_data&quot;:&quot;yes&quot;,&quot;cbfc_rating&quot;:&quot;U&quot;,&quot;display_ott_guidelines&quot;:[&quot;Drama&quot;]}"
                                contenttype="vod" isusersubscribed="false"
                                mediaurl="https://etvwin-s3.akamaized.net/64a2cd5cc7036a0cfa0838a2/4K_playlist.m3u8"
                                class="ng-scope ng-isolate-scope" style="">
                                <div id="video_player">
                                    <div class="sp-main-container-wrapper">
                                        <div class="sp-main-container">
                                            <div class="sp-player-inner" tabindex="0">
                                                <div class="sp-ad-container" style="height: 100%;"><video
                                                        class="sp-ad-dummy-video"></video>
                                                    <div class="sp-ad-top-controlbar">
                                                        <div class="ad-video-title"><span
                                                                class="ad-video-title-text"></span></div>
                                                    </div>
                                                    <div class="sp-ad-video-element">
                                                        <div style="position: absolute;">
                                                            <div style="display: none;"><video title="Advertisement"
                                                                    webkit-playsinline="true" playsinline="true"
                                                                    style="background-color: rgb(0, 0, 0); position: absolute; width: 100%; height: 100%; left: 0px; top: 0px;"></video>
                                                                <div
                                                                    style="position: absolute; width: 100%; height: 100%; left: 0px; top: 0px;">
                                                                </div>
                                                            </div>
                                                            <div style="display: none;"><video title="Advertisement"
                                                                    webkit-playsinline="true" playsinline="true"
                                                                    style="background-color: rgb(0, 0, 0); position: absolute; width: 100%; height: 100%; left: 0px; top: 0px;"></video>
                                                                <div
                                                                    style="position: absolute; width: 100%; height: 100%; left: 0px; top: 0px;">
                                                                </div>
                                                            </div><iframe
                                                                src="https://imasdk.googleapis.com/js/core/bridge3.578.0_en.html#goog_477946535"
                                                                allowfullscreen="" allow="autoplay" id="goog_477946535"
                                                                style="border: 0px; opacity: 0; margin: 0px; padding: 0px; position: relative; color-scheme: light;"></iframe><iframe
                                                                sandbox="allow-scripts allow-same-origin"
                                                                srcdoc="<script src=https://pagead2.googlesyndication.com/omsdk/releases/live/omweb-v1.js></script>
      <script>
          window.addEventListener('message', function(e) {
              if (e.data.type === 'innerBridgeIframeLoaded') {
                  window.frameElement.parentElement
                      .querySelector('#goog_477946535').contentWindow
                      .postMessage({
                          type: 'omidIframeLoaded'
                      }, '*');
              }
          });
      </script>
    "
                                                                style="display: none;"></iframe>
                                                        </div>
                                                    </div>
                                                    <div class="sp-ad-bottom-controlbar"><button
                                                            class="sp-ad-button sp-ad-playpause sp-ad-play"></button><button
                                                            class="sp-ad-button sp-ad-volume-muteunmute sp-ad-unmute"></button>
                                                        <div class="sp-ad-player-time"><span
                                                                class="sp-ad-plyr-currenttime">00:00</span></div><button
                                                            class="sp-ad-button sp-ad-fullscreen-unfullscreen sp-ad-fullscreen"></button>
                                                    </div>
                                                </div>
                                                <div class="sp-media-element"><video preload="metadata" playsinline=""
                                                        src="blob:https://www.etvwin.com/27fcb894-5dee-4f25-a313-95c7bdf3bfd6"></video>
                                                </div>
                                                <div class="sp-player-layers" style="cursor: auto;">
                                                    <div class="sp-player-text-feedback-container"
                                                        style="display: none;"></div>
                                                    <div class="sp-player-poster" style="display: none;"><img
                                                            src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi62/94744/epi-62-SVL_04Jul23_EP_62-320x240.jpg">
                                                    </div>
                                                    <div class="sp-player-bigplay" style="display: block;"></div>
                                                    <div class="sp-player-backward" style="display: block;"></div>
                                                    <div class="playPause play" style="display: block;"></div>
                                                    <div class="sp-player-replay" style="display: none;"></div>
                                                    <div class="sp-player-forward" style="display: block;"></div>
                                                    <div class="sp-player-loading" style="display: none;"></div>
                                                </div>
                                                <div class="sp-player-previewtiles"></div>
                                                <div class="sp-related-videos-control"></div>
                                                <div class="sp-full-controls" style="cursor: auto;">
                                                    <div class="sp-controls-top">
                                                        <div class="sp-content-grading">
                                                            <div class="sp-content-grading-bar" style="height: 45px">
                                                            </div>
                                                            <div class="sp-controls-top-content-grading"><span
                                                                    class="content-grading-title">RATED U</span><span
                                                                    class="content-grading-text"><span>Drama</span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="sp-controls-bottom">
                                                        <div class="sp-controls-bottom-progress-bar"></div>
                                                        <div class="sp-controls-bottom-plyr-controls">
                                                            <div class="sp-button sp-play-pause sp-pause"><button
                                                                    class="sp-play-pause-btn"></button></div>
                                                            <div class="sp-progress-bar-time-rail"
                                                                style="max-width: 470px;"><span
                                                                    class="sp-progress-bar-buffering"></span><span
                                                                    class="sp-progress-bar-loaded"
                                                                    style="width: 100%;"></span><span
                                                                    class="sp-progress-bar-current"
                                                                    style="width: 0.386847%;"></span><span
                                                                    class="sp-progress-bar-cues"></span><span
                                                                    class="sp-progress-bar-handle"
                                                                    style="left: 0px;"></span></div>
                                                            <div class="sp-player-time"><span
                                                                    class="sp-plyr-currenttime">00:00</span>&nbsp;/&nbsp;<span
                                                                    class="sp-plyr-duration">00:20</span></div>
                                                            <div class="sp-quality-switch sp-quality-switch-wrap">
                                                                <button class="sp-quality-switch-btn"></button>
                                                                <div class="sp-quality-switch-wrap sp-quality-switch-popup-wrap"
                                                                    style="display: none;">
                                                                    <div class="active"><button class="active"
                                                                            type="button" label="Auto"
                                                                            index="-1">Auto</button></div>
                                                                    <div><button class="inactive" type="button"
                                                                            label="444" index="0">Low</button>
                                                                    </div>
                                                                    <div><button class="inactive" type="button"
                                                                            label="874"
                                                                            index="1">Medium</button></div>
                                                                    <div><button class="inactive" type="button"
                                                                            label="1667" index="2">HD</button>
                                                                    </div>
                                                                    <div><button class="inactive" type="button"
                                                                            label="3168" index="3">Full
                                                                            HD</button></div>
                                                                </div>
                                                            </div>
                                                            <div class="sp-button sp-volume-btn-wrap sp-unmute"><button
                                                                    class="sp-volume-btn"></button>
                                                                <div class="sp-volume-slider sp-volume-slider-wrap">
                                                                    <div class="sp-volume-current"></div>
                                                                    <div class="sp-volume-handle"></div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="sp-button sp-fullscreen-unfullscreen sp-fullscreen">
                                                                <button class="sp-fullscreen-btn"></button></div>
                                                        </div>
                                                        <div data-progress-style="fill-btn" class="next-episode">
                                                            <div class="btn-txt">UP NEXT</div>
                                                            <div class="btn-progress"
                                                                style="animation: 0s ease 0s 1 normal forwards paused progress-anim;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </media-player>
                          
                            <div class="trailer_promo_head_wrapper">
                             
                                <h3 class="trailer_promo_head ng-binding ng-scope" ng-if="detCtrl.trailer_promo"
                                    style="">You are watching Trailer</h3>
                               
                            </div>
                        </div><!-- ngIf: detCtrl.showsubscription -->
                    </div><!-- end ngIf: !detCtrl.playurlyoutube -->
                    <div class="player-rating-wrapper">
                        <!-- ngIf: detCtrl.playurlyoutube -->
                        <!-- ngIf: detCtrl.playurlyoutube -->
                    </div><!-- ngIf: detCtrl.answered==true -->
                    <!-- ngIf: detCtrl.answered===false -->
                    <div ng-if="detCtrl.answered===false" class="ng-scope">
                        <div class="title-holder">
                            <h1 ng-class="{'title-font-size': detCtrl.videoData.title.length <= 40}"
                                class="ng-binding title-font-size">Epi 62
                                <!-- ngIf: detCtrl.videoData.release_date_string --><span
                                    class="golden-bar meta-golden-bar white-text-color ng-scope"
                                    ng-if="detCtrl.videoData.release_date_string"></span>
                                <!-- end ngIf: detCtrl.videoData.release_date_string -->
                                <!-- ngIf: detCtrl.videoData.release_date_string --><span
                                    class="video-date ng-scope date-font-size"
                                    ng-class="{'date-font-size': detCtrl.videoData.title.length <= 40}"
                                    ng-if="detCtrl.videoData.release_date_string">
                                    <format-date date="detCtrl.videoData.release_date_string"
                                        utsdate="detCtrl.videoData.release_date_uts" class="ng-isolate-scope"><span
                                            ng-bind="formattedDate" class="ng-binding">4 hours ago</span>
                                    </format-date>
                                </span><!-- end ngIf: detCtrl.videoData.release_date_string -->
                            </h1>
                        </div>
                        <div class="videonav">
                            <ul class="videolinks">
                                <!-- ngIf: detCtrl.videoData.channel_object.name -->
                                <li ng-if="detCtrl.videoData.channel_object.name" class="right-margin-alter ng-scope">
                                    <p class="channel-object ng-binding"
                                        ng-bind="detCtrl.videoData.channel_object.name">ETV Telugu</p>
                                </li><!-- end ngIf: detCtrl.videoData.channel_object.name -->
                                <!-- ngIf: detCtrl.videoData.cbfc_rating !== '' -->
                                <li ng-if="detCtrl.videoData.cbfc_rating !== ''" class="ng-scope">
                                    <p class="content-grading left-margin-nullify ng-binding"
                                        ng-bind="detCtrl.videoData.cbfc_rating">U</p>
                                </li><!-- end ngIf: detCtrl.videoData.cbfc_rating !== '' -->
                                <!-- ngIf: detCtrl.gb_view_count -->
                            </ul>
                        </div>
                        <div class="clearfix">
                            <ul class="nav-pills viewerslinks genre-tags">
                                <!-- ngRepeat: value in detCtrl.videoData.display_genres -->
                                <li ng-repeat="value in detCtrl.videoData.display_genres"
                                    class="genre-border meta-genre-border ng-binding ng-scope" ng-bind="value">Socio
                                    Fantasy</li><!-- end ngRepeat: value in detCtrl.videoData.display_genres -->
                                <li ng-repeat="value in detCtrl.videoData.display_genres"
                                    class="genre-border meta-genre-border ng-binding ng-scope" ng-bind="value">Family
                                    Drama</li><!-- end ngRepeat: value in detCtrl.videoData.display_genres -->
                            </ul>
                            <div class="question">
                                <!-- ngIf: detCtrl.videoData.catalog_object.friendly_id == 'etv-life' -->
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="viewersnav">
                            <ul class="viewerslinks">
                                <li ng-class="{comment_padding: !detCtrl.gb_commentable}" class="comment_padding">
                                    <label ng-click="detCtrl.addToPlaylist('like')" class="switch" role="button"
                                        tabindex="0"><input type="checkbox" ng-disabled="detCtrl.isLikeDisabled"
                                            ng-checked="detCtrl.isAddedToLike" class="like-checkbox"
                                            disabled="disabled"><em class="icon-like like-indicator"
                                            aria-hidden="true"></em> <span class="like-count ng-binding ng-hide"
                                            ng-show="detCtrl.videoData.like_count>0 &amp;&amp; detCtrl.videoData.like_countable"
                                            ng-bind="detCtrl.videoData.like_count" aria-hidden="true">2</span></label>
                                </li><!-- ngIf: detCtrl.gb_commentable -->
                                <li class="dropdown share-dropdown comment_padding"
                                    ng-class="{comment_padding: !detCtrl.gb_commentable}"><a
                                        data-toggle="dropdown "><span class="icon-share icon-video-share"></span></a>
                                    <div class="dropdown-menu dropdown-content ng-social-container ng-isolate-scope"
                                        ng-social-buttons="" data-url="detCtrl.videoData.dynamic_url"
                                        data-title="detCtrl.videoData.title"
                                        data-image="detCtrl.videoData.thumbnails.medium_4_3.url">
                                        <ul class="ng-social" ng-transclude="">
                                            <p class="ng-scope"> Share This Video</p>
                                            <li class="ng-social-facebook ng-scope"
                                                ng-click="detCtrl.sendShareAnalytics('Facebook')"
                                                data-toggle="tooltip" title="Facebook" role="button"
                                                tabindex="0"><a
                                                    ng-href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ff66tr.app.goo.gl%2F7tf7upjUunpHkYeC6"
                                                    target="_blank" ng-click="ctrl.clickShare($event, options)"
                                                    class="ng-social-button"
                                                    href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ff66tr.app.goo.gl%2F7tf7upjUunpHkYeC6"><span
                                                        class="ng-social-icon"></span><span class="ng-social-text"
                                                        ng-transclude=""><em class="icon-facebook share-fb ng-scope"
                                                            aria-hidden="true"></em></span></a><span ng-show="count"
                                                    class="ng-social-counter ng-binding ng-hide"
                                                    aria-hidden="true"></span></li>
                                            <div class="copy_text ng-scope ng-hide" ng-show="detCtrl.copy_text"
                                                aria-hidden="true">
                                                <p>Copied website URL</p>
                                            </div>
                                            <li ng-click="detCtrl.copyUrl()" data-toggle="tooltip" title="copy"
                                                class="ng-scope" role="button" tabindex="0"> <img
                                                    src="/assets/img/copy.png" class="copy_image"><span
                                                    id="selecturl"></span></li>
                                            <li class="ng-social-twitter ng-scope"
                                                ng-click="detCtrl.sendShareAnalytics('Twitter')" data-toggle="tooltip"
                                                title="Twitter" role="button" tabindex="0"><a
                                                    ng-href="https://twitter.com/intent/tweet?url=https%3A%2F%2Ff66tr.app.goo.gl%2F7tf7upjUunpHkYeC6&amp;text=Epi%2062"
                                                    target="_blank" ng-click="ctrl.clickShare($event, options)"
                                                    class="ng-social-button"
                                                    href="https://twitter.com/intent/tweet?url=https%3A%2F%2Ff66tr.app.goo.gl%2F7tf7upjUunpHkYeC6&amp;text=Epi%2062"><span
                                                        class="ng-social-icon"></span><span class="ng-social-text"
                                                        ng-transclude=""><em class="icon-twitter share-tw ng-scope"
                                                            aria-hidden="true"></em></span></a> <span ng-show="count"
                                                    class="ng-social-counter ng-binding ng-hide"
                                                    aria-hidden="true"></span></li>
                                            <li data-toggle="tooltip" title="Mail" class="ng-scope"><a
                                                    href="mailto:?subject=Check this video&amp;body=Epi 62 https://f66tr.app.goo.gl/7tf7upjUunpHkYeC6"
                                                    title="Mail"><em data-toggle="tooltip" title="Mail"
                                                        class="icon-mail share-mail" aria-hidden="true"></em></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li ng-class="{comment_padding: !detCtrl.gb_commentable}" class="comment_padding">
                                    <label ng-click="detCtrl.addToPlaylist('watchlater')" class="switch"
                                        role="button" tabindex="0"><input type="checkbox"
                                            ng-disabled="detCtrl.isWatchLaterDisabled"
                                            ng-checked="detCtrl.isAddedToWatchLater" class="watchlater-checkbox"
                                            disabled="disabled"><span class="icon-clock wl-indicator"
                                            aria-hidden="true"></span></label></li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                        <div class="description"> <input type="checkbox" class="read-more-state" id="post-1">
                            <p class="read-more-wrap intro"> <span class="firstline ng-binding"
                                    ng-bind="(detCtrl.videoData.description|limitTo:detCtrl.characterLimit()) + (detCtrl.videoData.description.length>detCtrl.characterLimit() ? '...' : '')">Sambaiah
                                    attempts suicide when Keshav refuses to sign Pranathi's bank loan documents.
                                    Kodandaramayya learns about Sambaiah's suicide and visits his house to see
                                    him.</span><span class="read-more-target ng-binding"
                                    ng-bind="detCtrl.videoData.description">Sambaiah attempts suicide when Keshav
                                    refuses to sign Pranathi's bank loan documents. Kodandaramayya learns about
                                    Sambaiah's suicide and visits his house to see him.</span></p>
                            <!-- ngIf: detCtrl.videoData.description.length>detCtrl.characterLimit() -->
                        </div>
                    </div><!-- end ngIf: detCtrl.answered===false -->
                    <div class="clear"></div>
                    <div class="tabDetails">
                        <div class="carousel-container">
                            <ul class="category">
                                <!-- ngRepeat: videoLists in detCtrl.movieVideolists.catalog_list_items  -->
                            </ul>
                        </div>
                    </div>
                </div><!-- ngIf: detCtrl.relatedExists -->
                <div class="right-section mobile-size ng-scope" ng-if="detCtrl.relatedExists" style="">
                    <!-- ngIf: detCtrl.relatedBlock -->
                    <div ng-if="detCtrl.relatedBlock" class="ng-scope">
                        <sidebar-one>
                            <div>
                                <div class="category related">
                                    <div>
                                        <!-- ngIf: detCtrl.relatedMovie.items.length>0||detCtrl.related.items.length>0 -->
                                        <div ng-if="detCtrl.relatedMovie.items.length>0||detCtrl.related.items.length>0"
                                            class="ng-scope" style=""><a
                                                class="see-all-title related-video-title bottom-adjust ng-binding"
                                                ng-bind="detCtrl.relatedTitle">Related Videos</a></div>
                                        <!-- end ngIf: detCtrl.relatedMovie.items.length>0||detCtrl.related.items.length>0 -->
                                        <!-- ngRepeat: listItem in detCtrl.related.items -->
                                        <div class="tabDetails desktop-size ng-scope"
                                            ng-repeat="listItem in detCtrl.related.items" style=""><a
                                                ng-href="/serials/srivalli/season-1-10/epi-61-88"
                                                href="/serials/srivalli/season-1-10/epi-61-88">
                                                <div class="item card-item">
                                                    <div class="image-holder"> <img
                                                            src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi61/88517/epi-61-SVL_03Jul23_EP_61-384x216.jpg"
                                                            alt="thumbnail"
                                                            lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi61/88517/epi-61-SVL_03Jul23_EP_61-384x216.jpg">
                                                        <!-- ngIf: listItem.media_type=='episode' --><img
                                                            ng-if="listItem.media_type=='episode'" id="small-play-btn"
                                                            alt="play" src="assets/img/play-btn-new.png"
                                                            class="ng-scope">
                                                        <!-- end ngIf: listItem.media_type=='episode' -->
                                                        <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false --><img
                                                            class="premium-badge ng-scope"
                                                            ng-if="listItem.access_control &amp;&amp; listItem.access_control.is_free===false"
                                                            alt="premium" src="assets/img/crown-small.png">
                                                        <!-- end ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                    </div>
                                                    <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                    <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                    <h6 class="blue-text-color ng-scope"
                                                        ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                        <span ng-bind="listItem.title" class="ng-binding">Epi
                                                            61</span> <span class="gray-dash blue-text-color">|</span>
                                                        <format-date date="listItem.release_date_string"
                                                            utsdate="listItem.release_date_uts"
                                                            class="ng-isolate-scope"><span ng-bind="formattedDate"
                                                                class="ng-binding">03 Jul 23</span></format-date>
                                                    </h6>
                                                    <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                </div>
                                            </a></div><!-- end ngRepeat: listItem in detCtrl.related.items -->
                                        <div class="tabDetails desktop-size ng-scope"
                                            ng-repeat="listItem in detCtrl.related.items"><a
                                                ng-href="/serials/srivalli/season-1-10/epi-60-88"
                                                href="/serials/srivalli/season-1-10/epi-60-88">
                                                <div class="item card-item">
                                                    <div class="image-holder"> <img
                                                            src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi60/59204/epi-60-SVL_01Jul23_EP_60-384x216.jpg"
                                                            alt="thumbnail"
                                                            lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi60/59204/epi-60-SVL_01Jul23_EP_60-384x216.jpg">
                                                        <!-- ngIf: listItem.media_type=='episode' --><img
                                                            ng-if="listItem.media_type=='episode'" id="small-play-btn"
                                                            alt="play" src="assets/img/play-btn-new.png"
                                                            class="ng-scope">
                                                        <!-- end ngIf: listItem.media_type=='episode' -->
                                                        <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false --><img
                                                            class="premium-badge ng-scope"
                                                            ng-if="listItem.access_control &amp;&amp; listItem.access_control.is_free===false"
                                                            alt="premium" src="assets/img/crown-small.png">
                                                        <!-- end ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                    </div>
                                                    <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                    <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                    <h6 class="blue-text-color ng-scope"
                                                        ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                        <span ng-bind="listItem.title" class="ng-binding">Epi
                                                            60</span> <span class="gray-dash blue-text-color">|</span>
                                                        <format-date date="listItem.release_date_string"
                                                            utsdate="listItem.release_date_uts"
                                                            class="ng-isolate-scope"><span ng-bind="formattedDate"
                                                                class="ng-binding">01 Jul 23</span></format-date>
                                                    </h6>
                                                    <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                </div>
                                            </a></div><!-- end ngRepeat: listItem in detCtrl.related.items -->
                                        <div class="tabDetails desktop-size ng-scope"
                                            ng-repeat="listItem in detCtrl.related.items"><a
                                                ng-href="/serials/srivalli/season-1-10/epi-59-10"
                                                href="/serials/srivalli/season-1-10/epi-59-10">
                                                <div class="item card-item">
                                                    <div class="image-holder"> <img
                                                            src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi59/47044/epi-59-SVL_30Jun23_EP_59-384x216.jpg"
                                                            alt="thumbnail"
                                                            lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi59/47044/epi-59-SVL_30Jun23_EP_59-384x216.jpg">
                                                        <!-- ngIf: listItem.media_type=='episode' --><img
                                                            ng-if="listItem.media_type=='episode'" id="small-play-btn"
                                                            alt="play" src="assets/img/play-btn-new.png"
                                                            class="ng-scope">
                                                        <!-- end ngIf: listItem.media_type=='episode' -->
                                                        <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false --><img
                                                            class="premium-badge ng-scope"
                                                            ng-if="listItem.access_control &amp;&amp; listItem.access_control.is_free===false"
                                                            alt="premium" src="assets/img/crown-small.png">
                                                        <!-- end ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                    </div>
                                                    <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                    <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                    <h6 class="blue-text-color ng-scope"
                                                        ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                        <span ng-bind="listItem.title" class="ng-binding">Epi
                                                            59</span> <span class="gray-dash blue-text-color">|</span>
                                                        <format-date date="listItem.release_date_string"
                                                            utsdate="listItem.release_date_uts"
                                                            class="ng-isolate-scope"><span ng-bind="formattedDate"
                                                                class="ng-binding">30 Jun 23</span></format-date>
                                                    </h6>
                                                    <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                </div>
                                            </a></div><!-- end ngRepeat: listItem in detCtrl.related.items -->
                                        <div class="tabDetails desktop-size ng-scope"
                                            ng-repeat="listItem in detCtrl.related.items"><a
                                                ng-href="/serials/srivalli/season-1-10/epi-58-86"
                                                href="/serials/srivalli/season-1-10/epi-58-86">
                                                <div class="item card-item">
                                                    <div class="image-holder"> <img
                                                            src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi58/90385/epi-58-SVL_29Jun23_EP_58-384x216.jpg"
                                                            alt="thumbnail"
                                                            lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi58/90385/epi-58-SVL_29Jun23_EP_58-384x216.jpg">
                                                        <!-- ngIf: listItem.media_type=='episode' --><img
                                                            ng-if="listItem.media_type=='episode'" id="small-play-btn"
                                                            alt="play" src="assets/img/play-btn-new.png"
                                                            class="ng-scope">
                                                        <!-- end ngIf: listItem.media_type=='episode' -->
                                                        <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false --><img
                                                            class="premium-badge ng-scope"
                                                            ng-if="listItem.access_control &amp;&amp; listItem.access_control.is_free===false"
                                                            alt="premium" src="assets/img/crown-small.png">
                                                        <!-- end ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                    </div>
                                                    <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                    <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                    <h6 class="blue-text-color ng-scope"
                                                        ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                        <span ng-bind="listItem.title" class="ng-binding">Epi
                                                            58</span> <span class="gray-dash blue-text-color">|</span>
                                                        <format-date date="listItem.release_date_string"
                                                            utsdate="listItem.release_date_uts"
                                                            class="ng-isolate-scope"><span ng-bind="formattedDate"
                                                                class="ng-binding">29 Jun 23</span></format-date>
                                                    </h6>
                                                    <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                </div>
                                            </a></div><!-- end ngRepeat: listItem in detCtrl.related.items -->
                                        <div class="tabDetails desktop-size ng-scope"
                                            ng-repeat="listItem in detCtrl.related.items"><a
                                                ng-href="/serials/srivalli/season-1-10/epi-57-87"
                                                href="/serials/srivalli/season-1-10/epi-57-87">
                                                <div class="item card-item">
                                                    <div class="image-holder"> <img
                                                            src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi57/72956/epi-57-SVL_28Jun23_EP_57-384x216.jpg"
                                                            alt="thumbnail"
                                                            lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi57/72956/epi-57-SVL_28Jun23_EP_57-384x216.jpg">
                                                        <!-- ngIf: listItem.media_type=='episode' --><img
                                                            ng-if="listItem.media_type=='episode'" id="small-play-btn"
                                                            alt="play" src="assets/img/play-btn-new.png"
                                                            class="ng-scope">
                                                        <!-- end ngIf: listItem.media_type=='episode' -->
                                                        <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false --><img
                                                            class="premium-badge ng-scope"
                                                            ng-if="listItem.access_control &amp;&amp; listItem.access_control.is_free===false"
                                                            alt="premium" src="assets/img/crown-small.png">
                                                        <!-- end ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                    </div>
                                                    <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                    <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                    <h6 class="blue-text-color ng-scope"
                                                        ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                        <span ng-bind="listItem.title" class="ng-binding">Epi
                                                            57</span> <span class="gray-dash blue-text-color">|</span>
                                                        <format-date date="listItem.release_date_string"
                                                            utsdate="listItem.release_date_uts"
                                                            class="ng-isolate-scope"><span ng-bind="formattedDate"
                                                                class="ng-binding">28 Jun 23</span></format-date>
                                                    </h6>
                                                    <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                </div>
                                            </a></div><!-- end ngRepeat: listItem in detCtrl.related.items -->
                                        <div class="tabDetails desktop-size ng-scope"
                                            ng-repeat="listItem in detCtrl.related.items"><a
                                                ng-href="/serials/srivalli/season-1-10/epi-56-85"
                                                href="/serials/srivalli/season-1-10/epi-56-85">
                                                <div class="item card-item">
                                                    <div class="image-holder"> <img
                                                            src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi56/80313/epi-56-SVL_27Jun23_EP_56-384x216.jpg"
                                                            alt="thumbnail"
                                                            lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi56/80313/epi-56-SVL_27Jun23_EP_56-384x216.jpg">
                                                        <!-- ngIf: listItem.media_type=='episode' --><img
                                                            ng-if="listItem.media_type=='episode'" id="small-play-btn"
                                                            alt="play" src="assets/img/play-btn-new.png"
                                                            class="ng-scope">
                                                        <!-- end ngIf: listItem.media_type=='episode' -->
                                                        <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false --><img
                                                            class="premium-badge ng-scope"
                                                            ng-if="listItem.access_control &amp;&amp; listItem.access_control.is_free===false"
                                                            alt="premium" src="assets/img/crown-small.png">
                                                        <!-- end ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                    </div>
                                                    <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                    <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                    <h6 class="blue-text-color ng-scope"
                                                        ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                        <span ng-bind="listItem.title" class="ng-binding">Epi
                                                            56</span> <span class="gray-dash blue-text-color">|</span>
                                                        <format-date date="listItem.release_date_string"
                                                            utsdate="listItem.release_date_uts"
                                                            class="ng-isolate-scope"><span ng-bind="formattedDate"
                                                                class="ng-binding">27 Jun 23</span></format-date>
                                                    </h6>
                                                    <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                </div>
                                            </a></div><!-- end ngRepeat: listItem in detCtrl.related.items -->
                                        <div class="tabDetails desktop-size ng-scope"
                                            ng-repeat="listItem in detCtrl.related.items"><a
                                                ng-href="/serials/srivalli/season-1-10/epi-55-84"
                                                href="/serials/srivalli/season-1-10/epi-55-84">
                                                <div class="item card-item">
                                                    <div class="image-holder"> <img
                                                            src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi55/49675/epi-55-SVL_26Jun23_EP_55-384x216.jpg"
                                                            alt="thumbnail"
                                                            lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi55/49675/epi-55-SVL_26Jun23_EP_55-384x216.jpg">
                                                        <!-- ngIf: listItem.media_type=='episode' --><img
                                                            ng-if="listItem.media_type=='episode'" id="small-play-btn"
                                                            alt="play" src="assets/img/play-btn-new.png"
                                                            class="ng-scope">
                                                        <!-- end ngIf: listItem.media_type=='episode' -->
                                                        <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                    </div>
                                                    <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                    <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                    <h6 class="blue-text-color ng-scope"
                                                        ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                        <span ng-bind="listItem.title" class="ng-binding">Epi
                                                            55</span> <span class="gray-dash blue-text-color">|</span>
                                                        <format-date date="listItem.release_date_string"
                                                            utsdate="listItem.release_date_uts"
                                                            class="ng-isolate-scope"><span ng-bind="formattedDate"
                                                                class="ng-binding">26 Jun 23</span></format-date>
                                                    </h6>
                                                    <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                </div>
                                            </a></div><!-- end ngRepeat: listItem in detCtrl.related.items -->
                                        <div class="tabDetails desktop-size ng-scope"
                                            ng-repeat="listItem in detCtrl.related.items"><a
                                                ng-href="/serials/srivalli/season-1-10/epi-54-84"
                                                href="/serials/srivalli/season-1-10/epi-54-84">
                                                <div class="item card-item">
                                                    <div class="image-holder"> <img
                                                            src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi54/90023/epi-54-SVL_24Jun23_EP_54-384x216.jpg"
                                                            alt="thumbnail"
                                                            lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi54/90023/epi-54-SVL_24Jun23_EP_54-384x216.jpg">
                                                        <!-- ngIf: listItem.media_type=='episode' --><img
                                                            ng-if="listItem.media_type=='episode'" id="small-play-btn"
                                                            alt="play" src="assets/img/play-btn-new.png"
                                                            class="ng-scope">
                                                        <!-- end ngIf: listItem.media_type=='episode' -->
                                                        <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                    </div>
                                                    <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                    <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                    <h6 class="blue-text-color ng-scope"
                                                        ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                        <span ng-bind="listItem.title" class="ng-binding">Epi
                                                            54</span> <span class="gray-dash blue-text-color">|</span>
                                                        <format-date date="listItem.release_date_string"
                                                            utsdate="listItem.release_date_uts"
                                                            class="ng-isolate-scope"><span ng-bind="formattedDate"
                                                                class="ng-binding">24 Jun 23</span></format-date>
                                                    </h6>
                                                    <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                </div>
                                            </a></div><!-- end ngRepeat: listItem in detCtrl.related.items -->
                                        <div class="tabDetails desktop-size ng-scope"
                                            ng-repeat="listItem in detCtrl.related.items"><a
                                                ng-href="/serials/srivalli/season-1-10/epi-53-81"
                                                href="/serials/srivalli/season-1-10/epi-53-81">
                                                <div class="item card-item">
                                                    <div class="image-holder"> <img
                                                            src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi53/85301/epi-53-SVL_23Jun23_EP_53-384x216.jpg"
                                                            alt="thumbnail"
                                                            lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi53/85301/epi-53-SVL_23Jun23_EP_53-384x216.jpg">
                                                        <!-- ngIf: listItem.media_type=='episode' --><img
                                                            ng-if="listItem.media_type=='episode'" id="small-play-btn"
                                                            alt="play" src="assets/img/play-btn-new.png"
                                                            class="ng-scope">
                                                        <!-- end ngIf: listItem.media_type=='episode' -->
                                                        <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                    </div>
                                                    <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                    <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                    <h6 class="blue-text-color ng-scope"
                                                        ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                        <span ng-bind="listItem.title" class="ng-binding">Epi
                                                            53</span> <span class="gray-dash blue-text-color">|</span>
                                                        <format-date date="listItem.release_date_string"
                                                            utsdate="listItem.release_date_uts"
                                                            class="ng-isolate-scope"><span ng-bind="formattedDate"
                                                                class="ng-binding">23 Jun 23</span></format-date>
                                                    </h6>
                                                    <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                </div>
                                            </a></div><!-- end ngRepeat: listItem in detCtrl.related.items -->
                                        <div class="tabDetails desktop-size ng-scope"
                                            ng-repeat="listItem in detCtrl.related.items"><a
                                                ng-href="/serials/srivalli/season-1-10/epi-52-81"
                                                href="/serials/srivalli/season-1-10/epi-52-81">
                                                <div class="item card-item">
                                                    <div class="image-holder"> <img
                                                            src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi52/80161/epi-52-SVL_22Jun23_EP_52-384x216.jpg"
                                                            alt="thumbnail"
                                                            lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi52/80161/epi-52-SVL_22Jun23_EP_52-384x216.jpg">
                                                        <!-- ngIf: listItem.media_type=='episode' --><img
                                                            ng-if="listItem.media_type=='episode'" id="small-play-btn"
                                                            alt="play" src="assets/img/play-btn-new.png"
                                                            class="ng-scope">
                                                        <!-- end ngIf: listItem.media_type=='episode' -->
                                                        <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                    </div>
                                                    <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                    <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                    <h6 class="blue-text-color ng-scope"
                                                        ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                        <span ng-bind="listItem.title" class="ng-binding">Epi
                                                            52</span> <span class="gray-dash blue-text-color">|</span>
                                                        <format-date date="listItem.release_date_string"
                                                            utsdate="listItem.release_date_uts"
                                                            class="ng-isolate-scope"><span ng-bind="formattedDate"
                                                                class="ng-binding">22 Jun 23</span></format-date>
                                                    </h6>
                                                    <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                </div>
                                            </a></div><!-- end ngRepeat: listItem in detCtrl.related.items -->
                                        <div class="tabDetails desktop-size ng-scope"
                                            ng-repeat="listItem in detCtrl.related.items"><a
                                                ng-href="/serials/srivalli/season-1-10/epi-51-81"
                                                href="/serials/srivalli/season-1-10/epi-51-81">
                                                <div class="item card-item">
                                                    <div class="image-holder"> <img
                                                            src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi51/58359/epi-51-SVL_21Jun23_EP_51-384x216.jpg"
                                                            alt="thumbnail"
                                                            lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi51/58359/epi-51-SVL_21Jun23_EP_51-384x216.jpg">
                                                        <!-- ngIf: listItem.media_type=='episode' --><img
                                                            ng-if="listItem.media_type=='episode'" id="small-play-btn"
                                                            alt="play" src="assets/img/play-btn-new.png"
                                                            class="ng-scope">
                                                        <!-- end ngIf: listItem.media_type=='episode' -->
                                                        <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                    </div>
                                                    <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                    <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                    <h6 class="blue-text-color ng-scope"
                                                        ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                        <span ng-bind="listItem.title" class="ng-binding">Epi
                                                            51</span> <span class="gray-dash blue-text-color">|</span>
                                                        <format-date date="listItem.release_date_string"
                                                            utsdate="listItem.release_date_uts"
                                                            class="ng-isolate-scope"><span ng-bind="formattedDate"
                                                                class="ng-binding">21 Jun 23</span></format-date>
                                                    </h6>
                                                    <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                </div>
                                            </a></div><!-- end ngRepeat: listItem in detCtrl.related.items -->
                                        <div class="tabDetails desktop-size ng-scope"
                                            ng-repeat="listItem in detCtrl.related.items"><a
                                                ng-href="/serials/srivalli/season-1-10/epi-50-81"
                                                href="/serials/srivalli/season-1-10/epi-50-81">
                                                <div class="item card-item">
                                                    <div class="image-holder"> <img
                                                            src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi50/79639/epi-50-SVL_20Jun23_EP_50-384x216.jpg"
                                                            alt="thumbnail"
                                                            lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi50/79639/epi-50-SVL_20Jun23_EP_50-384x216.jpg">
                                                        <!-- ngIf: listItem.media_type=='episode' --><img
                                                            ng-if="listItem.media_type=='episode'" id="small-play-btn"
                                                            alt="play" src="assets/img/play-btn-new.png"
                                                            class="ng-scope">
                                                        <!-- end ngIf: listItem.media_type=='episode' -->
                                                        <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                    </div>
                                                    <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                    <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                    <h6 class="blue-text-color ng-scope"
                                                        ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                        <span ng-bind="listItem.title" class="ng-binding">Epi
                                                            50</span> <span class="gray-dash blue-text-color">|</span>
                                                        <format-date date="listItem.release_date_string"
                                                            utsdate="listItem.release_date_uts"
                                                            class="ng-isolate-scope"><span ng-bind="formattedDate"
                                                                class="ng-binding">20 Jun 23</span></format-date>
                                                    </h6>
                                                    <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                </div>
                                            </a></div><!-- end ngRepeat: listItem in detCtrl.related.items -->
                                        <div class="tabDetails desktop-size ng-scope"
                                            ng-repeat="listItem in detCtrl.related.items"><a
                                                ng-href="/serials/srivalli/season-1-10/epi-49-10"
                                                href="/serials/srivalli/season-1-10/epi-49-10">
                                                <div class="item card-item">
                                                    <div class="image-holder"> <img
                                                            src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi49/81500/epi-49-SVL_19Jun23_EP_49-384x216.jpg"
                                                            alt="thumbnail"
                                                            lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi49/81500/epi-49-SVL_19Jun23_EP_49-384x216.jpg">
                                                        <!-- ngIf: listItem.media_type=='episode' --><img
                                                            ng-if="listItem.media_type=='episode'" id="small-play-btn"
                                                            alt="play" src="assets/img/play-btn-new.png"
                                                            class="ng-scope">
                                                        <!-- end ngIf: listItem.media_type=='episode' -->
                                                        <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                    </div>
                                                    <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                    <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                    <h6 class="blue-text-color ng-scope"
                                                        ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                        <span ng-bind="listItem.title" class="ng-binding">Epi
                                                            49</span> <span class="gray-dash blue-text-color">|</span>
                                                        <format-date date="listItem.release_date_string"
                                                            utsdate="listItem.release_date_uts"
                                                            class="ng-isolate-scope"><span ng-bind="formattedDate"
                                                                class="ng-binding">19 Jun 23</span></format-date>
                                                    </h6>
                                                    <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                </div>
                                            </a></div><!-- end ngRepeat: listItem in detCtrl.related.items -->
                                        <div class="tabDetails desktop-size ng-scope"
                                            ng-repeat="listItem in detCtrl.related.items"><a
                                                ng-href="/serials/srivalli/season-1-10/epi-48-10"
                                                href="/serials/srivalli/season-1-10/epi-48-10">
                                                <div class="item card-item">
                                                    <div class="image-holder"> <img
                                                            src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi48/11165/epi-48-SVL_17Jun23_EP_48-384x216.jpg"
                                                            alt="thumbnail"
                                                            lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi48/11165/epi-48-SVL_17Jun23_EP_48-384x216.jpg">
                                                        <!-- ngIf: listItem.media_type=='episode' --><img
                                                            ng-if="listItem.media_type=='episode'" id="small-play-btn"
                                                            alt="play" src="assets/img/play-btn-new.png"
                                                            class="ng-scope">
                                                        <!-- end ngIf: listItem.media_type=='episode' -->
                                                        <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                    </div>
                                                    <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                    <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                    <h6 class="blue-text-color ng-scope"
                                                        ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                        <span ng-bind="listItem.title" class="ng-binding">Epi
                                                            48</span> <span class="gray-dash blue-text-color">|</span>
                                                        <format-date date="listItem.release_date_string"
                                                            utsdate="listItem.release_date_uts"
                                                            class="ng-isolate-scope"><span ng-bind="formattedDate"
                                                                class="ng-binding">17 Jun 23</span></format-date>
                                                    </h6>
                                                    <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                </div>
                                            </a></div><!-- end ngRepeat: listItem in detCtrl.related.items -->
                                        <div class="tabDetails desktop-size ng-scope"
                                            ng-repeat="listItem in detCtrl.related.items"><a
                                                ng-href="/serials/srivalli/season-1-10/epi-47-10"
                                                href="/serials/srivalli/season-1-10/epi-47-10">
                                                <div class="item card-item">
                                                    <div class="image-holder"> <img
                                                            src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi47/54172/epi-47-SVL_16Jun23_EP_47-384x216.jpg"
                                                            alt="thumbnail"
                                                            lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi47/54172/epi-47-SVL_16Jun23_EP_47-384x216.jpg">
                                                        <!-- ngIf: listItem.media_type=='episode' --><img
                                                            ng-if="listItem.media_type=='episode'" id="small-play-btn"
                                                            alt="play" src="assets/img/play-btn-new.png"
                                                            class="ng-scope">
                                                        <!-- end ngIf: listItem.media_type=='episode' -->
                                                        <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                    </div>
                                                    <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                    <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                    <h6 class="blue-text-color ng-scope"
                                                        ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                        <span ng-bind="listItem.title" class="ng-binding">Epi
                                                            47</span> <span class="gray-dash blue-text-color">|</span>
                                                        <format-date date="listItem.release_date_string"
                                                            utsdate="listItem.release_date_uts"
                                                            class="ng-isolate-scope"><span ng-bind="formattedDate"
                                                                class="ng-binding">16 Jun 23</span></format-date>
                                                    </h6>
                                                    <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                </div>
                                            </a></div><!-- end ngRepeat: listItem in detCtrl.related.items -->
                                        <div class="tabDetails desktop-size ng-scope"
                                            ng-repeat="listItem in detCtrl.related.items"><a
                                                ng-href="/serials/srivalli/season-1-10/epi-46-71"
                                                href="/serials/srivalli/season-1-10/epi-46-71">
                                                <div class="item card-item">
                                                    <div class="image-holder"> <img
                                                            src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi46/33335/epi-46-SVL_15Jun23_EP_46-384x216.jpg"
                                                            alt="thumbnail"
                                                            lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi46/33335/epi-46-SVL_15Jun23_EP_46-384x216.jpg">
                                                        <!-- ngIf: listItem.media_type=='episode' --><img
                                                            ng-if="listItem.media_type=='episode'" id="small-play-btn"
                                                            alt="play" src="assets/img/play-btn-new.png"
                                                            class="ng-scope">
                                                        <!-- end ngIf: listItem.media_type=='episode' -->
                                                        <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                    </div>
                                                    <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                    <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                    <h6 class="blue-text-color ng-scope"
                                                        ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                        <span ng-bind="listItem.title" class="ng-binding">Epi
                                                            46</span> <span class="gray-dash blue-text-color">|</span>
                                                        <format-date date="listItem.release_date_string"
                                                            utsdate="listItem.release_date_uts"
                                                            class="ng-isolate-scope"><span ng-bind="formattedDate"
                                                                class="ng-binding">15 Jun 23</span></format-date>
                                                    </h6>
                                                    <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                </div>
                                            </a></div><!-- end ngRepeat: listItem in detCtrl.related.items -->
                                        <div class="tabDetails desktop-size ng-scope"
                                            ng-repeat="listItem in detCtrl.related.items"><a
                                                ng-href="/serials/srivalli/season-1-10/epi-45-10"
                                                href="/serials/srivalli/season-1-10/epi-45-10">
                                                <div class="item card-item">
                                                    <div class="image-holder"> <img
                                                            src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi45/18031/epi-45-SVL_14Jun23_EP_45-384x216.jpg"
                                                            alt="thumbnail"
                                                            lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi45/18031/epi-45-SVL_14Jun23_EP_45-384x216.jpg">
                                                        <!-- ngIf: listItem.media_type=='episode' --><img
                                                            ng-if="listItem.media_type=='episode'" id="small-play-btn"
                                                            alt="play" src="assets/img/play-btn-new.png"
                                                            class="ng-scope">
                                                        <!-- end ngIf: listItem.media_type=='episode' -->
                                                        <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                    </div>
                                                    <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                    <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                    <h6 class="blue-text-color ng-scope"
                                                        ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                        <span ng-bind="listItem.title" class="ng-binding">Epi
                                                            45</span> <span class="gray-dash blue-text-color">|</span>
                                                        <format-date date="listItem.release_date_string"
                                                            utsdate="listItem.release_date_uts"
                                                            class="ng-isolate-scope"><span ng-bind="formattedDate"
                                                                class="ng-binding">14 Jun 23</span></format-date>
                                                    </h6>
                                                    <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                </div>
                                            </a></div><!-- end ngRepeat: listItem in detCtrl.related.items -->
                                        <div class="tabDetails desktop-size ng-scope"
                                            ng-repeat="listItem in detCtrl.related.items"><a
                                                ng-href="/serials/srivalli/season-1-10/epi-44-68"
                                                href="/serials/srivalli/season-1-10/epi-44-68">
                                                <div class="item card-item">
                                                    <div class="image-holder"> <img
                                                            src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi44/27105/epi-44-SVL_13Jun23_EP_44-384x216.jpg"
                                                            alt="thumbnail"
                                                            lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi44/27105/epi-44-SVL_13Jun23_EP_44-384x216.jpg">
                                                        <!-- ngIf: listItem.media_type=='episode' --><img
                                                            ng-if="listItem.media_type=='episode'" id="small-play-btn"
                                                            alt="play" src="assets/img/play-btn-new.png"
                                                            class="ng-scope">
                                                        <!-- end ngIf: listItem.media_type=='episode' -->
                                                        <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                    </div>
                                                    <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                    <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                    <h6 class="blue-text-color ng-scope"
                                                        ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                        <span ng-bind="listItem.title" class="ng-binding">Epi
                                                            44</span> <span class="gray-dash blue-text-color">|</span>
                                                        <format-date date="listItem.release_date_string"
                                                            utsdate="listItem.release_date_uts"
                                                            class="ng-isolate-scope"><span ng-bind="formattedDate"
                                                                class="ng-binding">13 Jun 23</span></format-date>
                                                    </h6>
                                                    <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                </div>
                                            </a></div><!-- end ngRepeat: listItem in detCtrl.related.items -->
                                        <div class="tabDetails desktop-size ng-scope"
                                            ng-repeat="listItem in detCtrl.related.items"><a
                                                ng-href="/serials/srivalli/season-1-10/epi-43-10"
                                                href="/serials/srivalli/season-1-10/epi-43-10">
                                                <div class="item card-item">
                                                    <div class="image-holder"> <img
                                                            src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi43/11020/epi-43-SVL_12Jun23_EP_43-384x216.jpg"
                                                            alt="thumbnail"
                                                            lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi43/11020/epi-43-SVL_12Jun23_EP_43-384x216.jpg">
                                                        <!-- ngIf: listItem.media_type=='episode' --><img
                                                            ng-if="listItem.media_type=='episode'" id="small-play-btn"
                                                            alt="play" src="assets/img/play-btn-new.png"
                                                            class="ng-scope">
                                                        <!-- end ngIf: listItem.media_type=='episode' -->
                                                        <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                    </div>
                                                    <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                    <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                    <h6 class="blue-text-color ng-scope"
                                                        ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                        <span ng-bind="listItem.title" class="ng-binding">Epi
                                                            43</span> <span class="gray-dash blue-text-color">|</span>
                                                        <format-date date="listItem.release_date_string"
                                                            utsdate="listItem.release_date_uts"
                                                            class="ng-isolate-scope"><span ng-bind="formattedDate"
                                                                class="ng-binding">12 Jun 23</span></format-date>
                                                    </h6>
                                                    <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                </div>
                                            </a></div><!-- end ngRepeat: listItem in detCtrl.related.items -->
                                        <div class="tabDetails desktop-size ng-scope"
                                            ng-repeat="listItem in detCtrl.related.items"><a
                                                ng-href="/serials/srivalli/season-1-10/epi-42-10"
                                                href="/serials/srivalli/season-1-10/epi-42-10">
                                                <div class="item card-item">
                                                    <div class="image-holder"> <img
                                                            src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi42/93869/epi-42-SVL_10Jun23_EP_42-384x216.jpg"
                                                            alt="thumbnail"
                                                            lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi42/93869/epi-42-SVL_10Jun23_EP_42-384x216.jpg">
                                                        <!-- ngIf: listItem.media_type=='episode' --><img
                                                            ng-if="listItem.media_type=='episode'" id="small-play-btn"
                                                            alt="play" src="assets/img/play-btn-new.png"
                                                            class="ng-scope">
                                                        <!-- end ngIf: listItem.media_type=='episode' -->
                                                        <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                    </div>
                                                    <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                    <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                    <h6 class="blue-text-color ng-scope"
                                                        ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                        <span ng-bind="listItem.title" class="ng-binding">Epi
                                                            42</span> <span class="gray-dash blue-text-color">|</span>
                                                        <format-date date="listItem.release_date_string"
                                                            utsdate="listItem.release_date_uts"
                                                            class="ng-isolate-scope"><span ng-bind="formattedDate"
                                                                class="ng-binding">10 Jun 23</span></format-date>
                                                    </h6>
                                                    <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                </div>
                                            </a></div><!-- end ngRepeat: listItem in detCtrl.related.items -->
                                        <!-- ngRepeat: listItem in detCtrl.relatedMovie.items -->
                                        <div class="related-grid tab-size">
                                            <!-- ngIf: detCtrl.related.items.length>0 -->
                                            <div class="see-all-div ng-scope" ng-if="detCtrl.related.items.length>0"
                                                style=""> <a class="see-all-link"
                                                    ng-click="detCtrl.seeAllEpisodes(detCtrl.related,detCtrl.relatedTitle)">+
                                                    More</a></div><!-- end ngIf: detCtrl.related.items.length>0 -->
                                            <data-owl-carousel
                                                class="owl-carousel owl-theme margin-adjustment owl-loaded owl-drag"
                                                id="home-carousel" data-options="detCtrl.twoItemCarouselStrict">
                                                <div >
                                                    <div class="owl-stage"
                                                        style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;">
                                                        <div class="owl-item">
                                                            <div owl-carousel-item=""
                                                                ng-repeat="listItem in detCtrl.related.items"
                                                                class="item ng-scope" style=""><a
                                                                    ng-href="/serials/srivalli/season-1-10/epi-61-88"
                                                                    href="/serials/srivalli/season-1-10/epi-61-88">
                                                                    <div class="item card-item">
                                                                        <div class="image-holder"> <img
                                                                                src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi61/88517/epi-61-SVL_03Jul23_EP_61-384x216.jpg"
                                                                                alt="thumbnail"
                                                                                lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi61/88517/epi-61-SVL_03Jul23_EP_61-384x216.jpg">
                                                                            <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false --><img
                                                                                class="premium-badge ng-scope"
                                                                                ng-if="listItem.access_control &amp;&amp; listItem.access_control.is_free===false"
                                                                                alt="premium"
                                                                                src="assets/img/crown-small.png">
                                                                            <!-- end ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                                            <!-- ngIf: listItem.media_type=='episode' --><img
                                                                                ng-if="listItem.media_type=='episode'"
                                                                                id="small-play-btn" alt="play"
                                                                                src="assets/img/play-btn-new.png"
                                                                                class="ng-scope">
                                                                            <!-- end ngIf: listItem.media_type=='episode' -->
                                                                        </div>
                                                                        <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                                        <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                        <h6 class="blue-text-color ng-scope"
                                                                            ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                                            <span ng-bind="listItem.title"
                                                                                class="ng-binding">Epi 61</span> <span
                                                                                class="gray-dash blue-text-color">|</span>
                                                                            <format-date
                                                                                date="listItem.release_date_string"
                                                                                utsdate="listItem.release_date_uts"
                                                                                class="ng-isolate-scope"><span
                                                                                    ng-bind="formattedDate"
                                                                                    class="ng-binding">03 Jul 23</span>
                                                                            </format-date>
                                                                        </h6>
                                                                        <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div owl-carousel-item=""
                                                                ng-repeat="listItem in detCtrl.related.items"
                                                                class="item ng-scope" style=""><a
                                                                    ng-href="/serials/srivalli/season-1-10/epi-60-88"
                                                                    href="/serials/srivalli/season-1-10/epi-60-88">
                                                                    <div class="item card-item">
                                                                        <div class="image-holder"> <img
                                                                                src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi60/59204/epi-60-SVL_01Jul23_EP_60-384x216.jpg"
                                                                                alt="thumbnail"
                                                                                lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi60/59204/epi-60-SVL_01Jul23_EP_60-384x216.jpg">
                                                                            <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false --><img
                                                                                class="premium-badge ng-scope"
                                                                                ng-if="listItem.access_control &amp;&amp; listItem.access_control.is_free===false"
                                                                                alt="premium"
                                                                                src="assets/img/crown-small.png">
                                                                            <!-- end ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                                            <!-- ngIf: listItem.media_type=='episode' --><img
                                                                                ng-if="listItem.media_type=='episode'"
                                                                                id="small-play-btn" alt="play"
                                                                                src="assets/img/play-btn-new.png"
                                                                                class="ng-scope">
                                                                            <!-- end ngIf: listItem.media_type=='episode' -->
                                                                        </div>
                                                                        <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                                        <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                        <h6 class="blue-text-color ng-scope"
                                                                            ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                                            <span ng-bind="listItem.title"
                                                                                class="ng-binding">Epi 60</span> <span
                                                                                class="gray-dash blue-text-color">|</span>
                                                                            <format-date
                                                                                date="listItem.release_date_string"
                                                                                utsdate="listItem.release_date_uts"
                                                                                class="ng-isolate-scope"><span
                                                                                    ng-bind="formattedDate"
                                                                                    class="ng-binding">01 Jul 23</span>
                                                                            </format-date>
                                                                        </h6>
                                                                        <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div owl-carousel-item=""
                                                                ng-repeat="listItem in detCtrl.related.items"
                                                                class="item ng-scope" style=""><a
                                                                    ng-href="/serials/srivalli/season-1-10/epi-59-10"
                                                                    href="/serials/srivalli/season-1-10/epi-59-10">
                                                                    <div class="item card-item">
                                                                        <div class="image-holder"> <img
                                                                                src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi59/47044/epi-59-SVL_30Jun23_EP_59-384x216.jpg"
                                                                                alt="thumbnail"
                                                                                lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi59/47044/epi-59-SVL_30Jun23_EP_59-384x216.jpg">
                                                                            <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false --><img
                                                                                class="premium-badge ng-scope"
                                                                                ng-if="listItem.access_control &amp;&amp; listItem.access_control.is_free===false"
                                                                                alt="premium"
                                                                                src="assets/img/crown-small.png">
                                                                            <!-- end ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                                            <!-- ngIf: listItem.media_type=='episode' --><img
                                                                                ng-if="listItem.media_type=='episode'"
                                                                                id="small-play-btn" alt="play"
                                                                                src="assets/img/play-btn-new.png"
                                                                                class="ng-scope">
                                                                            <!-- end ngIf: listItem.media_type=='episode' -->
                                                                        </div>
                                                                        <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                                        <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                        <h6 class="blue-text-color ng-scope"
                                                                            ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                                            <span ng-bind="listItem.title"
                                                                                class="ng-binding">Epi 59</span> <span
                                                                                class="gray-dash blue-text-color">|</span>
                                                                            <format-date
                                                                                date="listItem.release_date_string"
                                                                                utsdate="listItem.release_date_uts"
                                                                                class="ng-isolate-scope"><span
                                                                                    ng-bind="formattedDate"
                                                                                    class="ng-binding">30 Jun 23</span>
                                                                            </format-date>
                                                                        </h6>
                                                                        <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div owl-carousel-item=""
                                                                ng-repeat="listItem in detCtrl.related.items"
                                                                class="item ng-scope" style=""><a
                                                                    ng-href="/serials/srivalli/season-1-10/epi-58-86"
                                                                    href="/serials/srivalli/season-1-10/epi-58-86">
                                                                    <div class="item card-item">
                                                                        <div class="image-holder"> <img
                                                                                src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi58/90385/epi-58-SVL_29Jun23_EP_58-384x216.jpg"
                                                                                alt="thumbnail"
                                                                                lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi58/90385/epi-58-SVL_29Jun23_EP_58-384x216.jpg">
                                                                            <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false --><img
                                                                                class="premium-badge ng-scope"
                                                                                ng-if="listItem.access_control &amp;&amp; listItem.access_control.is_free===false"
                                                                                alt="premium"
                                                                                src="assets/img/crown-small.png">
                                                                            <!-- end ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                                            <!-- ngIf: listItem.media_type=='episode' --><img
                                                                                ng-if="listItem.media_type=='episode'"
                                                                                id="small-play-btn" alt="play"
                                                                                src="assets/img/play-btn-new.png"
                                                                                class="ng-scope">
                                                                            <!-- end ngIf: listItem.media_type=='episode' -->
                                                                        </div>
                                                                        <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                                        <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                        <h6 class="blue-text-color ng-scope"
                                                                            ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                                            <span ng-bind="listItem.title"
                                                                                class="ng-binding">Epi 58</span> <span
                                                                                class="gray-dash blue-text-color">|</span>
                                                                            <format-date
                                                                                date="listItem.release_date_string"
                                                                                utsdate="listItem.release_date_uts"
                                                                                class="ng-isolate-scope"><span
                                                                                    ng-bind="formattedDate"
                                                                                    class="ng-binding">29 Jun 23</span>
                                                                            </format-date>
                                                                        </h6>
                                                                        <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div owl-carousel-item=""
                                                                ng-repeat="listItem in detCtrl.related.items"
                                                                class="item ng-scope" style=""><a
                                                                    ng-href="/serials/srivalli/season-1-10/epi-57-87"
                                                                    href="/serials/srivalli/season-1-10/epi-57-87">
                                                                    <div class="item card-item">
                                                                        <div class="image-holder"> <img
                                                                                src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi57/72956/epi-57-SVL_28Jun23_EP_57-384x216.jpg"
                                                                                alt="thumbnail"
                                                                                lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi57/72956/epi-57-SVL_28Jun23_EP_57-384x216.jpg">
                                                                            <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false --><img
                                                                                class="premium-badge ng-scope"
                                                                                ng-if="listItem.access_control &amp;&amp; listItem.access_control.is_free===false"
                                                                                alt="premium"
                                                                                src="assets/img/crown-small.png">
                                                                            <!-- end ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                                            <!-- ngIf: listItem.media_type=='episode' --><img
                                                                                ng-if="listItem.media_type=='episode'"
                                                                                id="small-play-btn" alt="play"
                                                                                src="assets/img/play-btn-new.png"
                                                                                class="ng-scope">
                                                                            <!-- end ngIf: listItem.media_type=='episode' -->
                                                                        </div>
                                                                        <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                                        <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                        <h6 class="blue-text-color ng-scope"
                                                                            ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                                            <span ng-bind="listItem.title"
                                                                                class="ng-binding">Epi 57</span> <span
                                                                                class="gray-dash blue-text-color">|</span>
                                                                            <format-date
                                                                                date="listItem.release_date_string"
                                                                                utsdate="listItem.release_date_uts"
                                                                                class="ng-isolate-scope"><span
                                                                                    ng-bind="formattedDate"
                                                                                    class="ng-binding">28 Jun 23</span>
                                                                            </format-date>
                                                                        </h6>
                                                                        <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div owl-carousel-item=""
                                                                ng-repeat="listItem in detCtrl.related.items"
                                                                class="item ng-scope" style=""><a
                                                                    ng-href="/serials/srivalli/season-1-10/epi-56-85"
                                                                    href="/serials/srivalli/season-1-10/epi-56-85">
                                                                    <div class="item card-item">
                                                                        <div class="image-holder"> <img
                                                                                src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi56/80313/epi-56-SVL_27Jun23_EP_56-384x216.jpg"
                                                                                alt="thumbnail"
                                                                                lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi56/80313/epi-56-SVL_27Jun23_EP_56-384x216.jpg">
                                                                            <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false --><img
                                                                                class="premium-badge ng-scope"
                                                                                ng-if="listItem.access_control &amp;&amp; listItem.access_control.is_free===false"
                                                                                alt="premium"
                                                                                src="assets/img/crown-small.png">
                                                                            <!-- end ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                                            <!-- ngIf: listItem.media_type=='episode' --><img
                                                                                ng-if="listItem.media_type=='episode'"
                                                                                id="small-play-btn" alt="play"
                                                                                src="assets/img/play-btn-new.png"
                                                                                class="ng-scope">
                                                                            <!-- end ngIf: listItem.media_type=='episode' -->
                                                                        </div>
                                                                        <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                                        <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                        <h6 class="blue-text-color ng-scope"
                                                                            ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                                            <span ng-bind="listItem.title"
                                                                                class="ng-binding">Epi 56</span> <span
                                                                                class="gray-dash blue-text-color">|</span>
                                                                            <format-date
                                                                                date="listItem.release_date_string"
                                                                                utsdate="listItem.release_date_uts"
                                                                                class="ng-isolate-scope"><span
                                                                                    ng-bind="formattedDate"
                                                                                    class="ng-binding">27 Jun
                                                                                    23</span></format-date>
                                                                        </h6>
                                                                        <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div owl-carousel-item=""
                                                                ng-repeat="listItem in detCtrl.related.items"
                                                                class="item ng-scope" style=""><a
                                                                    ng-href="/serials/srivalli/season-1-10/epi-55-84"
                                                                    href="/serials/srivalli/season-1-10/epi-55-84">
                                                                    <div class="item card-item">
                                                                        <div class="image-holder"> <img
                                                                                src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi55/49675/epi-55-SVL_26Jun23_EP_55-384x216.jpg"
                                                                                alt="thumbnail"
                                                                                lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi55/49675/epi-55-SVL_26Jun23_EP_55-384x216.jpg">
                                                                            <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                                            <!-- ngIf: listItem.media_type=='episode' --><img
                                                                                ng-if="listItem.media_type=='episode'"
                                                                                id="small-play-btn" alt="play"
                                                                                src="assets/img/play-btn-new.png"
                                                                                class="ng-scope">
                                                                            <!-- end ngIf: listItem.media_type=='episode' -->
                                                                        </div>
                                                                        <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                                        <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                        <h6 class="blue-text-color ng-scope"
                                                                            ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                                            <span ng-bind="listItem.title"
                                                                                class="ng-binding">Epi 55</span> <span
                                                                                class="gray-dash blue-text-color">|</span>
                                                                            <format-date
                                                                                date="listItem.release_date_string"
                                                                                utsdate="listItem.release_date_uts"
                                                                                class="ng-isolate-scope"><span
                                                                                    ng-bind="formattedDate"
                                                                                    class="ng-binding">26 Jun
                                                                                    23</span></format-date>
                                                                        </h6>
                                                                        <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div owl-carousel-item=""
                                                                ng-repeat="listItem in detCtrl.related.items"
                                                                class="item ng-scope" style=""><a
                                                                    ng-href="/serials/srivalli/season-1-10/epi-54-84"
                                                                    href="/serials/srivalli/season-1-10/epi-54-84">
                                                                    <div class="item card-item">
                                                                        <div class="image-holder"> <img
                                                                                src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi54/90023/epi-54-SVL_24Jun23_EP_54-384x216.jpg"
                                                                                alt="thumbnail"
                                                                                lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi54/90023/epi-54-SVL_24Jun23_EP_54-384x216.jpg">
                                                                            <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                                            <!-- ngIf: listItem.media_type=='episode' --><img
                                                                                ng-if="listItem.media_type=='episode'"
                                                                                id="small-play-btn" alt="play"
                                                                                src="assets/img/play-btn-new.png"
                                                                                class="ng-scope">
                                                                            <!-- end ngIf: listItem.media_type=='episode' -->
                                                                        </div>
                                                                        <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                                        <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                        <h6 class="blue-text-color ng-scope"
                                                                            ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                                            <span ng-bind="listItem.title"
                                                                                class="ng-binding">Epi 54</span> <span
                                                                                class="gray-dash blue-text-color">|</span>
                                                                            <format-date
                                                                                date="listItem.release_date_string"
                                                                                utsdate="listItem.release_date_uts"
                                                                                class="ng-isolate-scope"><span
                                                                                    ng-bind="formattedDate"
                                                                                    class="ng-binding">24 Jun
                                                                                    23</span></format-date>
                                                                        </h6>
                                                                        <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div owl-carousel-item=""
                                                                ng-repeat="listItem in detCtrl.related.items"
                                                                class="item ng-scope" style=""><a
                                                                    ng-href="/serials/srivalli/season-1-10/epi-53-81"
                                                                    href="/serials/srivalli/season-1-10/epi-53-81">
                                                                    <div class="item card-item">
                                                                        <div class="image-holder"> <img
                                                                                src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi53/85301/epi-53-SVL_23Jun23_EP_53-384x216.jpg"
                                                                                alt="thumbnail"
                                                                                lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi53/85301/epi-53-SVL_23Jun23_EP_53-384x216.jpg">
                                                                            <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                                            <!-- ngIf: listItem.media_type=='episode' --><img
                                                                                ng-if="listItem.media_type=='episode'"
                                                                                id="small-play-btn" alt="play"
                                                                                src="assets/img/play-btn-new.png"
                                                                                class="ng-scope">
                                                                            <!-- end ngIf: listItem.media_type=='episode' -->
                                                                        </div>
                                                                        <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                                        <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                        <h6 class="blue-text-color ng-scope"
                                                                            ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                                            <span ng-bind="listItem.title"
                                                                                class="ng-binding">Epi 53</span> <span
                                                                                class="gray-dash blue-text-color">|</span>
                                                                            <format-date
                                                                                date="listItem.release_date_string"
                                                                                utsdate="listItem.release_date_uts"
                                                                                class="ng-isolate-scope"><span
                                                                                    ng-bind="formattedDate"
                                                                                    class="ng-binding">23 Jun
                                                                                    23</span></format-date>
                                                                        </h6>
                                                                        <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div owl-carousel-item=""
                                                                ng-repeat="listItem in detCtrl.related.items"
                                                                class="item ng-scope" style=""><a
                                                                    ng-href="/serials/srivalli/season-1-10/epi-52-81"
                                                                    href="/serials/srivalli/season-1-10/epi-52-81">
                                                                    <div class="item card-item">
                                                                        <div class="image-holder"> <img
                                                                                src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi52/80161/epi-52-SVL_22Jun23_EP_52-384x216.jpg"
                                                                                alt="thumbnail"
                                                                                lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi52/80161/epi-52-SVL_22Jun23_EP_52-384x216.jpg">
                                                                            <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                                            <!-- ngIf: listItem.media_type=='episode' --><img
                                                                                ng-if="listItem.media_type=='episode'"
                                                                                id="small-play-btn" alt="play"
                                                                                src="assets/img/play-btn-new.png"
                                                                                class="ng-scope">
                                                                            <!-- end ngIf: listItem.media_type=='episode' -->
                                                                        </div>
                                                                        <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                                        <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                        <h6 class="blue-text-color ng-scope"
                                                                            ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                                            <span ng-bind="listItem.title"
                                                                                class="ng-binding">Epi 52</span> <span
                                                                                class="gray-dash blue-text-color">|</span>
                                                                            <format-date
                                                                                date="listItem.release_date_string"
                                                                                utsdate="listItem.release_date_uts"
                                                                                class="ng-isolate-scope"><span
                                                                                    ng-bind="formattedDate"
                                                                                    class="ng-binding">22 Jun
                                                                                    23</span></format-date>
                                                                        </h6>
                                                                        <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div owl-carousel-item=""
                                                                ng-repeat="listItem in detCtrl.related.items"
                                                                class="item ng-scope" style=""><a
                                                                    ng-href="/serials/srivalli/season-1-10/epi-51-81"
                                                                    href="/serials/srivalli/season-1-10/epi-51-81">
                                                                    <div class="item card-item">
                                                                        <div class="image-holder"> <img
                                                                                src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi51/58359/epi-51-SVL_21Jun23_EP_51-384x216.jpg"
                                                                                alt="thumbnail"
                                                                                lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi51/58359/epi-51-SVL_21Jun23_EP_51-384x216.jpg">
                                                                            <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                                            <!-- ngIf: listItem.media_type=='episode' --><img
                                                                                ng-if="listItem.media_type=='episode'"
                                                                                id="small-play-btn" alt="play"
                                                                                src="assets/img/play-btn-new.png"
                                                                                class="ng-scope">
                                                                            <!-- end ngIf: listItem.media_type=='episode' -->
                                                                        </div>
                                                                        <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                                        <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                        <h6 class="blue-text-color ng-scope"
                                                                            ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                                            <span ng-bind="listItem.title"
                                                                                class="ng-binding">Epi 51</span> <span
                                                                                class="gray-dash blue-text-color">|</span>
                                                                            <format-date
                                                                                date="listItem.release_date_string"
                                                                                utsdate="listItem.release_date_uts"
                                                                                class="ng-isolate-scope"><span
                                                                                    ng-bind="formattedDate"
                                                                                    class="ng-binding">21 Jun
                                                                                    23</span></format-date>
                                                                        </h6>
                                                                        <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div owl-carousel-item=""
                                                                ng-repeat="listItem in detCtrl.related.items"
                                                                class="item ng-scope" style=""><a
                                                                    ng-href="/serials/srivalli/season-1-10/epi-50-81"
                                                                    href="/serials/srivalli/season-1-10/epi-50-81">
                                                                    <div class="item card-item">
                                                                        <div class="image-holder"> <img
                                                                                src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi50/79639/epi-50-SVL_20Jun23_EP_50-384x216.jpg"
                                                                                alt="thumbnail"
                                                                                lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi50/79639/epi-50-SVL_20Jun23_EP_50-384x216.jpg">
                                                                            <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                                            <!-- ngIf: listItem.media_type=='episode' --><img
                                                                                ng-if="listItem.media_type=='episode'"
                                                                                id="small-play-btn" alt="play"
                                                                                src="assets/img/play-btn-new.png"
                                                                                class="ng-scope">
                                                                            <!-- end ngIf: listItem.media_type=='episode' -->
                                                                        </div>
                                                                        <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                                        <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                        <h6 class="blue-text-color ng-scope"
                                                                            ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                                            <span ng-bind="listItem.title"
                                                                                class="ng-binding">Epi 50</span> <span
                                                                                class="gray-dash blue-text-color">|</span>
                                                                            <format-date
                                                                                date="listItem.release_date_string"
                                                                                utsdate="listItem.release_date_uts"
                                                                                class="ng-isolate-scope"><span
                                                                                    ng-bind="formattedDate"
                                                                                    class="ng-binding">20 Jun
                                                                                    23</span></format-date>
                                                                        </h6>
                                                                        <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div owl-carousel-item=""
                                                                ng-repeat="listItem in detCtrl.related.items"
                                                                class="item ng-scope" style=""><a
                                                                    ng-href="/serials/srivalli/season-1-10/epi-49-10"
                                                                    href="/serials/srivalli/season-1-10/epi-49-10">
                                                                    <div class="item card-item">
                                                                        <div class="image-holder"> <img
                                                                                src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi49/81500/epi-49-SVL_19Jun23_EP_49-384x216.jpg"
                                                                                alt="thumbnail"
                                                                                lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi49/81500/epi-49-SVL_19Jun23_EP_49-384x216.jpg">
                                                                            <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                                            <!-- ngIf: listItem.media_type=='episode' --><img
                                                                                ng-if="listItem.media_type=='episode'"
                                                                                id="small-play-btn" alt="play"
                                                                                src="assets/img/play-btn-new.png"
                                                                                class="ng-scope">
                                                                            <!-- end ngIf: listItem.media_type=='episode' -->
                                                                        </div>
                                                                        <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                                        <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                        <h6 class="blue-text-color ng-scope"
                                                                            ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                                            <span ng-bind="listItem.title"
                                                                                class="ng-binding">Epi 49</span> <span
                                                                                class="gray-dash blue-text-color">|</span>
                                                                            <format-date
                                                                                date="listItem.release_date_string"
                                                                                utsdate="listItem.release_date_uts"
                                                                                class="ng-isolate-scope"><span
                                                                                    ng-bind="formattedDate"
                                                                                    class="ng-binding">19 Jun
                                                                                    23</span></format-date>
                                                                        </h6>
                                                                        <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div owl-carousel-item=""
                                                                ng-repeat="listItem in detCtrl.related.items"
                                                                class="item ng-scope" style=""><a
                                                                    ng-href="/serials/srivalli/season-1-10/epi-48-10"
                                                                    href="/serials/srivalli/season-1-10/epi-48-10">
                                                                    <div class="item card-item">
                                                                        <div class="image-holder"> <img
                                                                                src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi48/11165/epi-48-SVL_17Jun23_EP_48-384x216.jpg"
                                                                                alt="thumbnail"
                                                                                lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi48/11165/epi-48-SVL_17Jun23_EP_48-384x216.jpg">
                                                                            <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                                            <!-- ngIf: listItem.media_type=='episode' --><img
                                                                                ng-if="listItem.media_type=='episode'"
                                                                                id="small-play-btn" alt="play"
                                                                                src="assets/img/play-btn-new.png"
                                                                                class="ng-scope">
                                                                            <!-- end ngIf: listItem.media_type=='episode' -->
                                                                        </div>
                                                                        <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                                        <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                        <h6 class="blue-text-color ng-scope"
                                                                            ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                                            <span ng-bind="listItem.title"
                                                                                class="ng-binding">Epi 48</span> <span
                                                                                class="gray-dash blue-text-color">|</span>
                                                                            <format-date
                                                                                date="listItem.release_date_string"
                                                                                utsdate="listItem.release_date_uts"
                                                                                class="ng-isolate-scope"><span
                                                                                    ng-bind="formattedDate"
                                                                                    class="ng-binding">17 Jun
                                                                                    23</span></format-date>
                                                                        </h6>
                                                                        <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div owl-carousel-item=""
                                                                ng-repeat="listItem in detCtrl.related.items"
                                                                class="item ng-scope" style=""><a
                                                                    ng-href="/serials/srivalli/season-1-10/epi-47-10"
                                                                    href="/serials/srivalli/season-1-10/epi-47-10">
                                                                    <div class="item card-item">
                                                                        <div class="image-holder"> <img
                                                                                src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi47/54172/epi-47-SVL_16Jun23_EP_47-384x216.jpg"
                                                                                alt="thumbnail"
                                                                                lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi47/54172/epi-47-SVL_16Jun23_EP_47-384x216.jpg">
                                                                            <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                                            <!-- ngIf: listItem.media_type=='episode' --><img
                                                                                ng-if="listItem.media_type=='episode'"
                                                                                id="small-play-btn" alt="play"
                                                                                src="assets/img/play-btn-new.png"
                                                                                class="ng-scope">
                                                                            <!-- end ngIf: listItem.media_type=='episode' -->
                                                                        </div>
                                                                        <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                                        <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                        <h6 class="blue-text-color ng-scope"
                                                                            ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                                            <span ng-bind="listItem.title"
                                                                                class="ng-binding">Epi 47</span> <span
                                                                                class="gray-dash blue-text-color">|</span>
                                                                            <format-date
                                                                                date="listItem.release_date_string"
                                                                                utsdate="listItem.release_date_uts"
                                                                                class="ng-isolate-scope"><span
                                                                                    ng-bind="formattedDate"
                                                                                    class="ng-binding">16 Jun
                                                                                    23</span></format-date>
                                                                        </h6>
                                                                        <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div owl-carousel-item=""
                                                                ng-repeat="listItem in detCtrl.related.items"
                                                                class="item ng-scope" style=""><a
                                                                    ng-href="/serials/srivalli/season-1-10/epi-46-71"
                                                                    href="/serials/srivalli/season-1-10/epi-46-71">
                                                                    <div class="item card-item">
                                                                        <div class="image-holder"> <img
                                                                                src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi46/33335/epi-46-SVL_15Jun23_EP_46-384x216.jpg"
                                                                                alt="thumbnail"
                                                                                lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi46/33335/epi-46-SVL_15Jun23_EP_46-384x216.jpg">
                                                                            <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                                            <!-- ngIf: listItem.media_type=='episode' --><img
                                                                                ng-if="listItem.media_type=='episode'"
                                                                                id="small-play-btn" alt="play"
                                                                                src="assets/img/play-btn-new.png"
                                                                                class="ng-scope">
                                                                            <!-- end ngIf: listItem.media_type=='episode' -->
                                                                        </div>
                                                                      
                                                                        <h6 class="blue-text-color ng-scope"
                                                                            ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                                            <span ng-bind="listItem.title"
                                                                                class="ng-binding">Epi 46</span> <span
                                                                                class="gray-dash blue-text-color">|</span>
                                                                            <format-date
                                                                                date="listItem.release_date_string"
                                                                                utsdate="listItem.release_date_uts"
                                                                                class="ng-isolate-scope"><span
                                                                                    ng-bind="formattedDate"
                                                                                    class="ng-binding">15 Jun
                                                                                    23</span></format-date>
                                                                        </h6>
                                                                        <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div owl-carousel-item=""
                                                                ng-repeat="listItem in detCtrl.related.items"
                                                                class="item ng-scope" style=""><a
                                                                    ng-href="/serials/srivalli/season-1-10/epi-45-10"
                                                                    href="/serials/srivalli/season-1-10/epi-45-10">
                                                                    <div class="item card-item">
                                                                        <div class="image-holder"> <img
                                                                                src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi45/18031/epi-45-SVL_14Jun23_EP_45-384x216.jpg"
                                                                                alt="thumbnail"
                                                                                lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi45/18031/epi-45-SVL_14Jun23_EP_45-384x216.jpg">
                                                                            <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                                            <!-- ngIf: listItem.media_type=='episode' --><img
                                                                                ng-if="listItem.media_type=='episode'"
                                                                                id="small-play-btn" alt="play"
                                                                                src="assets/img/play-btn-new.png"
                                                                                class="ng-scope">
                                                                            <!-- end ngIf: listItem.media_type=='episode' -->
                                                                        </div>
                                                                        <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                                        <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                        <h6 class="blue-text-color ng-scope"
                                                                            ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                                            <span ng-bind="listItem.title"
                                                                                class="ng-binding">Epi 45</span> <span
                                                                                class="gray-dash blue-text-color">|</span>
                                                                            <format-date
                                                                                date="listItem.release_date_string"
                                                                                utsdate="listItem.release_date_uts"
                                                                                class="ng-isolate-scope"><span
                                                                                    ng-bind="formattedDate"
                                                                                    class="ng-binding">14 Jun
                                                                                    23</span></format-date>
                                                                        </h6>
                                                                        <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div owl-carousel-item=""
                                                                ng-repeat="listItem in detCtrl.related.items"
                                                                class="item ng-scope" style=""><a
                                                                    ng-href="/serials/srivalli/season-1-10/epi-44-68"
                                                                    href="/serials/srivalli/season-1-10/epi-44-68">
                                                                    <div class="item card-item">
                                                                        <div class="image-holder"> <img
                                                                                src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi44/27105/epi-44-SVL_13Jun23_EP_44-384x216.jpg"
                                                                                alt="thumbnail"
                                                                                lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi44/27105/epi-44-SVL_13Jun23_EP_44-384x216.jpg">
                                                                            <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                                            <!-- ngIf: listItem.media_type=='episode' --><img
                                                                                ng-if="listItem.media_type=='episode'"
                                                                                id="small-play-btn" alt="play"
                                                                                src="assets/img/play-btn-new.png"
                                                                                class="ng-scope">
                                                                            <!-- end ngIf: listItem.media_type=='episode' -->
                                                                        </div>
                                                                        <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                                        <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                        <h6 class="blue-text-color ng-scope"
                                                                            ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                                            <span ng-bind="listItem.title"
                                                                                class="ng-binding">Epi 44</span> <span
                                                                                class="gray-dash blue-text-color">|</span>
                                                                            <format-date
                                                                                date="listItem.release_date_string"
                                                                                utsdate="listItem.release_date_uts"
                                                                                class="ng-isolate-scope"><span
                                                                                    ng-bind="formattedDate"
                                                                                    class="ng-binding">13 Jun
                                                                                    23</span></format-date>
                                                                        </h6>
                                                                        <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div owl-carousel-item=""
                                                                ng-repeat="listItem in detCtrl.related.items"
                                                                class="item ng-scope" style=""><a
                                                                    ng-href="/serials/srivalli/season-1-10/epi-43-10"
                                                                    href="/serials/srivalli/season-1-10/epi-43-10">
                                                                    <div class="item card-item">
                                                                        <div class="image-holder"> <img
                                                                                src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi43/11020/epi-43-SVL_12Jun23_EP_43-384x216.jpg"
                                                                                alt="thumbnail"
                                                                                lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi43/11020/epi-43-SVL_12Jun23_EP_43-384x216.jpg">
                                                                            <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                                            <!-- ngIf: listItem.media_type=='episode' --><img
                                                                                ng-if="listItem.media_type=='episode'"
                                                                                id="small-play-btn" alt="play"
                                                                                src="assets/img/play-btn-new.png"
                                                                                class="ng-scope">
                                                                            <!-- end ngIf: listItem.media_type=='episode' -->
                                                                        </div>
                                                                        <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                                        <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                        <h6 class="blue-text-color ng-scope"
                                                                            ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                                            <span ng-bind="listItem.title"
                                                                                class="ng-binding">Epi 43</span> <span
                                                                                class="gray-dash blue-text-color">|</span>
                                                                            <format-date
                                                                                date="listItem.release_date_string"
                                                                                utsdate="listItem.release_date_uts"
                                                                                class="ng-isolate-scope"><span
                                                                                    ng-bind="formattedDate"
                                                                                    class="ng-binding">12 Jun
                                                                                    23</span></format-date>
                                                                        </h6>
                                                                        <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                        <div class="owl-item">
                                                            <div owl-carousel-item=""
                                                                ng-repeat="listItem in detCtrl.related.items"
                                                                class="item ng-scope" style=""><a
                                                                    ng-href="/serials/srivalli/season-1-10/epi-42-10"
                                                                    href="/serials/srivalli/season-1-10/epi-42-10">
                                                                    <div class="item card-item">
                                                                        <div class="image-holder"> <img
                                                                                src="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi42/93869/epi-42-SVL_10Jun23_EP_42-384x216.jpg"
                                                                                alt="thumbnail"
                                                                                lazy-img="https://etv-win-image.akamaized.net/etvwin/serials/shows/srivalli/subcategories/season1/episodes/epi42/93869/epi-42-SVL_10Jun23_EP_42-384x216.jpg">
                                                                            <!-- ngIf: listItem.access_control && listItem.access_control.is_free===false -->
                                                                            <!-- ngIf: listItem.media_type=='episode' --><img
                                                                                ng-if="listItem.media_type=='episode'"
                                                                                id="small-play-btn" alt="play"
                                                                                src="assets/img/play-btn-new.png"
                                                                                class="ng-scope">
                                                                            <!-- end ngIf: listItem.media_type=='episode' -->
                                                                        </div>
                                                                        <!-- ngIf: listItem.show_meta_data=='yes' && listItem.media_type && listItem.media_type!='episode' -->
                                                                        <!-- ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                        <h6 class="blue-text-color ng-scope"
                                                                            ng-if="listItem.media_type &amp;&amp; listItem.media_type=='episode' &amp;&amp; listItem.show_meta_data=='yes'">
                                                                            <span ng-bind="listItem.title"
                                                                                class="ng-binding">Epi 42</span> <span
                                                                                class="gray-dash blue-text-color">|</span>
                                                                            <format-date
                                                                                date="listItem.release_date_string"
                                                                                utsdate="listItem.release_date_uts"
                                                                                class="ng-isolate-scope"><span
                                                                                    ng-bind="formattedDate"
                                                                                    class="ng-binding">10 Jun
                                                                                    23</span></format-date>
                                                                        </h6>
                                                                        <!-- end ngIf: listItem.media_type && listItem.media_type=='episode' && listItem.show_meta_data=='yes' -->
                                                                    </div>
                                                                </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                                
                                            </data-owl-carousel>
                                        </div>
                                        <div class="related-grid tab-size">
                                            <!-- ngIf: detCtrl.relatedMovie.items.length>0 -->
                                            <data-owl-carousel class="owl-carousel owl-theme margin-adjustment"
                                                id="home-carousel" data-options="detCtrl.threeItemCarousel">
                                                <!-- ngRepeat: listItem in detCtrl.relatedMovie.items -->
                                            </data-owl-carousel>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="related-gradient"></div>
                            </div>
                        </sidebar-one>
                    </div><!-- end ngIf: detCtrl.relatedBlock -->
                </div><!-- end ngIf: detCtrl.relatedExists -->
                <!-- ngIf: detCtrl.gb_commentable -->
            </div>
        </div>
    </div><!-- end ngIf: !isPageLoading -->
</div>
