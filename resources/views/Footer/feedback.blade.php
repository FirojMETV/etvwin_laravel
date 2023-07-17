{{-- @extends('layout')
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
@endsection --}}

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('css/feedback.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<div class="overlay"></div> <!-- Add the overlay div -->

<div>
    <button id="openFormButton">Open Feedback</button>
</div>


<form class="form">
    <div class='header'>
        <p>FEEDBACK</p>
    </div>
    <div class="title">Your opinions, your feedback,
        your suggestions, let them flow. This is your space.
        It will help
        us in improving the website.</div>
    <select name="etv" id="Plus" placeholder="Your message">
        <option value="Telugu">ETV Telugu</option>
        <option value="Plus">ETV Plus</option>
        <option value="Cinema">ETV Cinema</option>
        <option value="Abhiruchi">ETV Abhiruchi</option>
        <option value="Andhra">ETV Andhra Pradesh</option>
        <option value="Telengana">ETV Telengana</option>
        <option value="Win">ETV Win Exclusive</option>
    </select>
    <input type="email" placeholder="Your email" class="input">
    <textarea placeholder="Your message" id="inputField" 
    oninput="countCharactersAndUpdateCount()" maxlength="1000">
    </textarea>
    {{-- <p style="color: #a4a4a4 ;float: left;margin-left:auto">
        <span id="characterCount"
            style="color: #a4a4a4">
        </span> /1000</p> --}}
        <div id="the-count">
            <span id="current">0</span>
            <span id="maximum">/ 1000</span>
          </div>
    <button>Submit</button> 
</form>





<script src="{{ asset('js/feedback.js') }}"></script>
