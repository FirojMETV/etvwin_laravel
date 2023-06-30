@extends('layout')
@section('title', 'SUBSCRIPTIONS')


<link rel="stylesheet" href="{{ asset('css/subscription.css') }}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@section('content')


<div class="ekta-view ng-scope top-large" id="view_begin" ng-class="{'top-large':heightst, 'top-small':!heightst}"
    ng-view="" style="">
    <div class="subscription-container ng-scope">
        <div class="left-margin">
            <h1 class="subs-title">Subscription plans</h1>
        </div>
        <div class="subscription-plans-list subscription-top-margin">
            <div class="plans-detail " style="">
                <h1 class="plan-title ">Basic</h1>
                <div class="plan-details-wrapper">
                    <div class="plan-details-list">
                        <div class="plan-amount">
                            <ul class="radiolinks subscribe-radiolinks">
                                <li class="subscribe-radiobuttons md-checked">
                                    <div style="display: inline-flex">
                                        <input class="subscribe-radio md-checked" ng-value="pricing" id="radio_11"
                                            role="radio" name="plan" value="365" aria-label="₹365₹499"
                                            type="radio">
                                        <div ng-transclude="" class="md-label">
                                            <span class="plan-price ng-binding ng-scope">₹365
                                            </span>
                                            <span ng-if="pricing.strikedPrice"
                                                class="striked-value ng-binding ng-scope">₹499
                                            </span>
                                        </div>
                                    </div>
                                    <div class="plans-period-description">
                                        <h3 class="plans-period ng-binding ng-scope">(Inaugural Offer)
                                        </h3>
                                        <h3 class="plans-period ng-binding">per Year
                                        </h3>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="plans-detail ">
                <h1 class="plan-title ">Premium</h1>
                <div class="plan-details-wrapper">
                    <div class="plan-details-list ">
                        <div class="plan-amount">
                            <ul class="radiolinks subscribe-radiolinks">
                                <li class="subscribe-radiobuttons">
                                    <div style="display: inline-flex">
                                        <input class="subscribe-radio" name="plan" value="99" aria-label="₹99"
                                            type="radio">
                                        <div ng-transclude="" class="md-label"><span
                                                class="plan-price ng-binding ng-scope">₹99</span>
                                        </div>
                                    </div>
                                    <div class="plans-period-description">

                                        <h3 class="plans-period ng-binding">per Month</h3>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="plan-details-list ng-scope">
                        <div class="plan-amount">
                            <ul class="radiolinks subscribe-radiolinks">
                                <li class="subscribe-radiobuttons">
                                    <div style="display: inline-flex">
                                        <input ng-value="pricing" id="radio_13" type="radio" name="plan"
                                            value="499" aria-label="₹499₹699">
                                        <div ng-transclude="" class="md-label">
                                            <span class="plan-price ng-binding ng-scope">₹499
                                            </span>
                                            <span class="striked-value ng-binding ng-scope">₹699
                                            </span>
                                        </div>
                                    </div>
                                    <div class="plans-period-description">
                                        <h3 class="plans-period ng-binding ng-scope">
                                            ( Inaugural Offer )
                                        </h3>
                                        <h3 class="plans-period ng-binding">per Year</h3>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="free-days-text">
        </div>
        <div class="subsciption-details text-color-white">
            <table class="features">
                <thead class="features-head">
                    <tr>
                        <th class="plan-category ng-binding ng-scope text-left" style="">
                            Features</th>

                        <th class="plan-category ng-binding ng-scope" style="">
                            Basic</th>
                        <th class="plan-category ng-binding ng-scope"> Premium</th>

                    </tr>
                </thead>
                <tbody>

                    <tr class="pack-item ng-scope" style="">
                        <td class="plan-info">
                            <h4 ng-bind="feature.info" class="ng-binding">Video Quality</h4>
                        </td>
                        <td class="plan-value">
                            <h5 ng-if="feature.value!=='yes' &amp;&amp; feature.value!=='no'"
                                class="ng-binding ng-scope">HD</h5>
                        </td>
                        <td class="plan-value ng-scope">
                            <h5 ng-if="feature.premiumValue!=='yes' &amp;&amp; feature.premiumValue!=='no'"
                                ng-bind="feature.premiumValue" class="ng-binding ng-scope">Full HD</h5>

                        </td>
                    </tr>
                    <tr class="pack-item ng-scope">
                        <td class="plan-info">
                            <h4 ng-bind="feature.info" class="ng-binding">Before TV</h4>
                        </td>
                        <td class="plan-value">

                            <img ng-if="feature.value=='yes'" alt="image" src="{{ asset('image/tick.png') }}"
                                class="ng-scope">

                        </td>
                        <td class="plan-value ng-scope">
                            <img ng-if="feature.premiumValue=='yes'" alt="image"
                                src="{{ asset('image/tick.png') }}" class="ng-scope">
                        </td>
                    </tr>
                    <tr class="pack-item ng-scope">
                        <td class="plan-info">
                            <h4 ng-bind="feature.info" class="ng-binding">Live TV </h4>
                        </td>
                        <td class="plan-value">
                            <img ng-if="feature.value=='yes'" alt="image" src="{{ asset('image/tick.png') }}"
                                class="ng-scope">
                        </td>
                        <td class="plan-value ng-scope">
                            <img ng-if="feature.premiumValue=='yes'" alt="image"
                                src="{{ asset('image/tick.png') }}" class="ng-scope">
                        </td>
                    </tr>
                    <tr class="pack-item ng-scope">
                        <td class="plan-info">
                            <h4 ng-bind="feature.info" class="ng-binding">Screens</h4>
                        </td>
                        <td class="plan-value">
                            <h5 ng-if="feature.value!=='yes' &amp;&amp; feature.value!=='no'" ng-bind="feature.value"
                                class="ng-binding ng-scope">1 (Mobile only)</h5>
                        </td>
                        <td class="plan-value ng-scope">
                            <h5 ng-if="feature.premiumValue!=='yes' &amp;&amp; feature.premiumValue!=='no'"
                                ng-bind="feature.premiumValue" class="ng-binding ng-scope">3</h5>
                        </td>
                    </tr>
                    <tr class="pack-item ng-scope">
                        <td class="plan-info">
                            <h4 ng-bind="feature.info" class="ng-binding">Exclusive</h4>
                        </td>
                        <td class="plan-value">

                            <img ng-if="feature.value=='yes'" alt="image" src="{{ asset('image/tick.png') }}"
                                class="ng-scope">

                        </td>
                        <td class="plan-value ng-scope" ng-if="feature.premiumValue">

                            <img ng-if="feature.premiumValue=='yes'" alt="image"
                                src="{{ asset('image/tick.png') }}" class="ng-scope">

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="subscription-bottom-div">
            <div class="note-div">
                <p>HD, Full HD, 4K (2160p) Video Qualities are available only when content is supported in their
                    respective resolutions</p>
            </div>
            <div class="selected-plan-details">
                <div id="selectedValue" class="selected-plan-amount ">
                </div>
            </div>
            <div>
                <button class="subscribe-button">
                    <span>
                        <img src="{{ asset('image/crown-subscribe.png') }}"
                         class="crown-subscribe" alt="Crown">
                    </span>
                    Subscribe
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('input[type=radio][name=plan]').change(function() {
            var selectedValue = $(this).val();
            $('#selectedValue').text('Selected Plan : ' + selectedValue + '/-');
        });
    });
</script>
@endsection