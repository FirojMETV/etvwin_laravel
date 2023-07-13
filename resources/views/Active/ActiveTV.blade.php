
@extends('layout')
<link rel="stylesheet" href="{{asset('css/activeTv.css')}}">
@section('content')
    

<div class="ekta-view ng-scope top-large" id="view_begin" 
    ng-view="" style="">
    <div class="tvactive ng-scope"  style="">
        <div class="tvactive_box">
            <div class="outer_box">
                <div class="codebox ng-hide"  aria-hidden="true">
                    <div class="success">
                        <h5 class="activation-success ng-binding"></h5>
                    </div>
                </div>
                <div class="codebox" aria-hidden="false">
                    <div class="success">
                        <h4 class="try-again-text ng-binding"></h4>
                    </div>
                </div> <img class="activate-tv-main-icon" src="{{asset('image/activate-tv-main-icon.png')}}" alt="">
                <h4>Activate ETV WIN on your TV</h4>
                <div class="codebox">
                    <h6 class="enter-code-text">Enter the Activation code displayed on your TV screen</h6>
                    <form name="verifytvForm" class="ng-pristine ng-valid ng-valid-maxlength">
                        <div class="input-group center-align">
                            <input type="text"
                                class="activate-tv-input ng-pristine ng-valid ng-empty ng-valid-maxlength ng-touched"
                                id="first_char" placeholder="-" maxlength="1" style="">
                            <input type="text"
                                class="activate-tv-input ng-pristine ng-untouched ng-valid ng-empty ng-valid-maxlength"
                                placeholder="-" id="second_char" maxlength="1" >
                            <input type="text"
                                class="activate-tv-input ng-pristine ng-untouched ng-valid ng-empty ng-valid-maxlength"
                                placeholder="-" id="third_char" maxlength="1" >
                            <input type="text"
                                class="activate-tv-input ng-pristine ng-untouched ng-valid ng-empty ng-valid-maxlength"
                                placeholder="-" id="fourth_char" maxlength="1" >
                            <input type="text"
                                class="activate-tv-input ng-pristine ng-untouched ng-valid ng-empty ng-valid-maxlength"
                                placeholder="-" id="fifth_char" maxlength="1" >
                            <input
                            maxlength="1" 
                                type="text" placeholder="-"
                                class="activate-tv-input ng-pristine ng-untouched ng-valid ng-empty ng-valid-maxlength"
                                id="sixth_char">
                        </div>
                        <div class="text-center light">
                            <button type="submit" class="verify_txt" id="verify_tv_code">
                                Activate
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection