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
            </div>
          <div >

          </div>
           
        
        
            <textarea id="inputField" oninput="countCharactersAndUpdateCount()" maxlength="1000"></textarea>
            <p  style="color: aliceblue">Character count: <span id="characterCount"></span> /1000</p>

            <div class="ekt-submit-button">
                <button ng-disabled="feedbackform.$invalid" ng-click="feedbackCtrl.SubmitFeedback()"
                    class="form-button full-width-button blue-button" disabled="disabled">
                    SUBMIT</button>
            </div><!-- ngIf: feedbackCtrl.showLoading -->
        </form>
    </div>
    <script src="{{ asset('js/feedback.js') }}"></script>
@endsection
