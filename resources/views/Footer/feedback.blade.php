@extends('layout')
@section('title', 'FEEDBACK')
<link rel="stylesheet" href="{{ asset('css/feedback.css') }}">

@section('content')
<div class="login-form-dialog ng-scope" style="padding-top:100px">
    <h1 class="ekt-dialog-header" id="ngdialog3-aria-labelledby">Feedback</h1>
    <form class="ekt-dialog-form ng-pristine ng-invalid ng-invalid-required ng-valid-maxlength ng-valid-pattern"
        name="feedbackform">
        <div class="signin-error-area feedback-text-color">
            <p class="ng-binding">
                Your opinions, your
                feedback, your suggestions, let them flow.
                This is your space. It will help us in improving the website.
            </p>
        </div><!-- ngIf: feedbackCtrl.isGuestUser -->
        <md-input-container ng-if="feedbackCtrl.isGuestUser" class="md-block ng-scope">
            <label for="input-color" class="md-required">Email</label>
            <input ng-model="feedbackCtrl.email_id" id="input-color" style="margin:0;" name="email" required=""
                ng-pattern="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/" type="text"
                class="ng-pristine ng-untouched md-input ng-empty ng-invalid ng-invalid-required ng-valid-pattern"
                aria-invalid="true">
            <div class="md-errors-spacer">

            </div>
            <div ng-messages="feedbackform.email.$error" role="alert" multiple=""
                class="md-input-messages-animation md-auto-hide ng-active" aria-live="assertive">
                <!-- ngMessage: pattern -->
                <!-- ngMessage: required -->
                <div ng-message="required" class="custom-error-msg md-input-message-animation ng-scope"><span
                        class="icon-error_info">
                    </span>
                    This field cannot be blank.
                </div>
            </div>
        </md-input-container><!-- end ngIf: feedbackCtrl.isGuestUser -->
        <md-input-container class="full-width-button">
            <label for="select_23" class="md-placeholder md-required">Select
                any Channel
            </label>
            <md-select required="" name="channelname" aria-label="none" ng-model="feedbackCtrl.channelname"
                class="ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" tabindex="0"
                aria-disabled="false" role="listbox" aria-expanded="false" aria-multiselectable="false" id="select_23"
                aria-owns="select_container_24" aria-invalid="true" aria-required="true">
                <md-select-value class="md-select-value md-select-placeholder" id="select_value_label_22">
                    <span>Select
                        any Channel
                    </span>
                    <span class="md-select-icon" aria-hidden="true">
                    </span>
                </md-select-value>
                <div class="md-select-menu-container" aria-hidden="true" id="select_container_24">
                    <md-select-menu class="_md">
                        <md-content class="_md">
                            <!-- ngRepeat: item in feedbackCtrl.channelList -->
                            <md-option value="ETV Telugu" ng-click="feedbackCtrl.loadShows(item)"
                                ng-repeat="item in feedbackCtrl.channelList" tabindex="0"
                                class="ng-scope md-ink-ripple" role="option" aria-selected="false"
                                id="select_option_25" style="">
                                <div class="md-text ng-binding"> ETV Telugu</div>
                            </md-option><!-- end ngRepeat: item in feedbackCtrl.channelList -->
                            <md-option value="ETV Plus" ng-click="feedbackCtrl.loadShows(item)"
                                ng-repeat="item in feedbackCtrl.channelList" tabindex="0"
                                class="ng-scope md-ink-ripple" role="option" aria-selected="false"
                                id="select_option_26" style="">
                                <div class="md-text ng-binding"> ETV Plus</div>
                            </md-option><!-- end ngRepeat: item in feedbackCtrl.channelList -->
                            <md-option value="ETV Cinema" ng-click="feedbackCtrl.loadShows(item)"
                                ng-repeat="item in feedbackCtrl.channelList" tabindex="0"
                                class="ng-scope md-ink-ripple" role="option" aria-selected="false"
                                id="select_option_27" style="">
                                <div class="md-text ng-binding">
                                    ETV Cinema</div>
                            </md-option><!-- end ngRepeat: item in feedbackCtrl.channelList -->
                            <md-option value="ETV Abhiruchi" ng-click="feedbackCtrl.loadShows(item)"
                                ng-repeat="item in feedbackCtrl.channelList" tabindex="0"
                                class="ng-scope md-ink-ripple" role="option" aria-selected="false"
                                id="select_option_28" style="">
                                <div class="md-text ng-binding">
                                    ETV Abhiruchi</div>
                            </md-option><!-- end ngRepeat: item in feedbackCtrl.channelList -->
                            <md-option value="ETV Life" ng-click="feedbackCtrl.loadShows(item)"
                                ng-repeat="item in feedbackCtrl.channelList" tabindex="0"
                                class="ng-scope md-ink-ripple" role="option" aria-selected="false"
                                id="select_option_29" style="">
                                <div class="md-text ng-binding">
                                    ETV Life</div>
                            </md-option><!-- end ngRepeat: item in feedbackCtrl.channelList -->
                            <md-option value="ETV Andhra Pradesh" ng-click="feedbackCtrl.loadShows(item)"
                                ng-repeat="item in feedbackCtrl.channelList" tabindex="0"
                                class="ng-scope md-ink-ripple" role="option" aria-selected="false"
                                id="select_option_30" style="">
                                <div class="md-text ng-binding">
                                    ETV Andhra Pradesh</div>
                            </md-option><!-- end ngRepeat: item in feedbackCtrl.channelList -->
                            <md-option value="ETV Telangana" ng-click="feedbackCtrl.loadShows(item)"
                                ng-repeat="item in feedbackCtrl.channelList" tabindex="0"
                                class="ng-scope md-ink-ripple" role="option" aria-selected="false"
                                id="select_option_31" style="">
                                <div class="md-text ng-binding">
                                    ETV Telangana</div>
                            </md-option><!-- end ngRepeat: item in feedbackCtrl.channelList -->
                            <md-option value="ETV Win Exclusive" ng-click="feedbackCtrl.loadShows(item)"
                                ng-repeat="item in feedbackCtrl.channelList" tabindex="0"
                                class="ng-scope md-ink-ripple" role="option" aria-selected="false"
                                id="select_option_32" style="">
                                <div class="md-text ng-binding">
                                    ETV Win Exclusive</div>
                            </md-option><!-- end ngRepeat: item in feedbackCtrl.channelList -->
                        </md-content>
                    </md-select-menu>
                </div>
            </md-select>
            <select class="md-visually-hidden" name="channelname" aria-hidden="true" tabindex="-1">
                <option value="" class="ng-binding">

                </option>
                <option ng-value="feedbackCtrl.channelname" selected="" aria-checked="false"></option>
            </select>
        </md-input-container>

        <md-input-container class="md-block">
            <label for="input-color1" class="md-required">Show Name</label>
            <textarea ng-model="feedbackCtrl.showname" id="input-color1" name="showname" ng-trim="false" required=""
                type="text" maxlength="100"
                class="ng-pristine ng-untouched md-input ng-empty ng-invalid ng-invalid-required ng-valid-maxlength"
                rows="1" aria-invalid="true" style="height: 30px;">
            </textarea>
            <div class="md-resize-handle" style="touch-action: pan-y;"></div>
            <div class="md-errors-spacer"></div>
            <div ng-messages="feedbackform.showname.$error" role="alert" multiple=""
                class="md-input-messages-animation md-auto-hide ng-active" aria-live="assertive">
                <!-- ngMessage: required -->
                <div ng-message="required" class="custom-error-msg md-input-message-animation ng-scope"><span
                        class="icon-error_info"></span> This field cannot be blank.</div>
            </div>
        </md-input-container>
        <md-input-container class="md-block"> <label for="input-color2" class="md-required">Comments</label>
            <textarea ng-model="feedbackCtrl.comment" id="input-color2" name="comment" ng-trim="false" required=""
                type="text" maxlength="1000"
                class="ng-pristine ng-untouched md-input ng-empty ng-invalid ng-invalid-required ng-valid-maxlength"
                rows="1" aria-invalid="true" style="height: 30px;"></textarea>
            <div class="md-resize-handle" style="touch-action: pan-y;"></div>
            <div class="md-errors-spacer"></div>
            <p class="comment_limiText ng-binding"> / 1000</p>
            <div ng-messages="feedbackform.comment.$error" role="alert" multiple=""
                class="md-input-messages-animation md-auto-hide ng-active" aria-live="assertive">
                <!-- ngMessage: required -->
                <div ng-message="required" class="custom-error-msg md-input-message-animation ng-scope">
                    <span class="icon-error_info">
                    </span>
                    This field cannot be blank.
                </div>
            </div>
        </md-input-container>
        <div class="ekt-submit-button">
            <button ng-disabled="feedbackform.$invalid" ng-click="feedbackCtrl.SubmitFeedback()"
                class="form-button full-width-button blue-button" disabled="disabled">
                SUBMIT</button>
        </div><!-- ngIf: feedbackCtrl.showLoading -->
    </form>
</div>
@endsection