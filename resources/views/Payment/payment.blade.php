<link rel="stylesheet" href="{{ asset('css/payment.css') }}">

<div class="login-form-dialog">

    <div class="ng-scope" style="">
        <h1 class="ekt-dialog-header">
            Confirm
        </h1>
        <form class="ekt-dialog-form promocode-dialog ng-valid ng-dirty ng-valid-parse ng-submitted" style="">
            <div class="promocode-error-area ng-hide" aria-hidden="true">
                <p class="ng-binding"></p>
            </div>
            <div class="plan-title-area">
                <h1 class="ng-binding">Premium
                    <span class="ng-binding">₹99</span>
                </h1>
                <h2 class="ng-binding">
                    per Month
                </h2>
            </div>
            <md-input-container class="md-block promo-code-box ng-scope md-input-has-value">

                <label for="input-color">Enter Promo Code</label>
                <input id="input-color" name="promocode" type="text"
                    class="ng-valid md-input ng-not-empty ng-dirty ng-valid-parse ng-touched" style="">
                <div class="md-errors-spacer">
                </div>
                <a class="ng-binding">
                    APPLY</a>
            </md-input-container>
            <p class="error-msg ng-binding ng-scope" style="">
                Invalid Coupon</p>

            <div class="discount-area">

                <h1 class="ng-scope"> Discount
                    <span class="ng-binding">₹0</span>
                </h1>
                <h1>
                    Total Amount Payable
                    <span class="ng-binding">₹99</span>
                </h1>
            </div>
            <div class="ekt-submit-button button-flex">
                <button class="form-button full-width-button blue-button decrease-font-size">MAKE PAYMENT</button>
                <button class="form-button full-width-button blue-button decrease-font-size">CANCEL</button>
            </div>
        </form>
    </div>

</div>


{{-- <div class="login-form-dialog">
    <div class="error-dialog ng-scope" style="">
        <div class="ekt-dialog-form promocode-dialog">
            <p class="">
                Oops! You're unable to upgrade your account right now.
                Looks like your payment is still pending. Please contact our customer support.
            </p>
            <div class="ekt-submit-button">
                <button class="form-button full-width-button blue-button decrease-font-size">
                    OK
                </button>
            </div>
        </div>
    </div>
</div> --}}
