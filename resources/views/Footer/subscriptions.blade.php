<link rel="stylesheet" href="{{ asset('css/subscription.css') }}">

<div class="ekta-view ng-scope top-large" id="view_begin" ng-class="{'top-large':heightst, 'top-small':!heightst}"
    ng-view="" style="">
    <div class="subscription-container ng-scope">
        <div class="left-margin">
            <h1 class="subs-title">Subscription plans</h1>
        </div>
        <md-radio-group ng-model="subscriptionPlansViewController.selectedPlan"
            class="ng-pristine ng-valid _md ng-not-empty ng-touched" role="radiogroup" tabindex="0"
            aria-invalid="false" aria-activedescendant="radio_11" style="">
            <div class="subscription-plans-list subscription-top-margin">
                <!-- ngRepeat: plan in subscriptionPlansViewController.planPricing -->
                <div class="plans-detail ng-scope" ng-repeat="plan in subscriptionPlansViewController.planPricing"
                    style="">
                    <h1 class="plan-title ng-binding">Basic</h1>
                    <div class="plan-details-wrapper">
                        <!-- ngRepeat: pricing in plan.pricing -->
                        <div class="plan-details-list ng-scope" ng-repeat="pricing in plan.pricing">
                            <div class="plan-amount">
                                <ul class="radiolinks subscribe-radiolinks">
                                    <li class="subscribe-radiobuttons md-checked">
                                        <div style="display: inline-flex">
                                        <input class="subscribe-radio md-checked" ng-value="pricing"
                                            id="radio_11" role="radio" aria-checked="true" value="[object Object]"
                                            aria-label="₹365₹499" type="radio">
                                            <div ng-transclude="" class="md-label">
                                                <span class="plan-price ng-binding ng-scope">₹365
                                                </span>
                                                <span ng-if="pricing.strikedPrice"
                                                    class="striked-value ng-binding ng-scope">₹499
                                                </span>
                                            </div>
                                        </div>
                                        <div class="plans-period-description">
                                            <!-- ngIf: pricing.offerDescription -->
                                            <h3 ng-if="pricing.offerDescription"
                                                class="plans-period ng-binding ng-scope">(Inaugural Offer)</h3>
                                            <!-- end ngIf: pricing.offerDescription -->
                                            <h3 class="plans-period ng-binding">per Year</h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- end ngRepeat: plan in subscriptionPlansViewController.planPricing -->
                <div class="plans-detail ng-scope" ng-repeat="plan in subscriptionPlansViewController.planPricing">
                    <h1 class="plan-title ng-binding">Premium</h1>
                    <div class="plan-details-wrapper">
                        <!-- ngRepeat: pricing in plan.pricing -->
                        <div class="plan-details-list ng-scope" ng-repeat="pricing in plan.pricing">
                            <div class="plan-amount">
                                <ul class="radiolinks subscribe-radiolinks">
                                    <li class="subscribe-radiobuttons">
                                        <div style="display: inline-flex">
                                        <input class="subscribe-radio" ng-value="pricing" id="radio_12"
                                            role="radio" aria-checked="false" value="[object Object]"
                                            aria-label="₹99" type="radio">
                                            <div ng-transclude="" class="md-label"><span
                                                    class="plan-price ng-binding ng-scope">₹99</span>
                                            </div> 
                                    </div>
                                        <div class="plans-period-description">
                                            <!-- ngIf: pricing.offerDescription -->
                                            <h3 class="plans-period ng-binding">per Month</h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- end ngRepeat: pricing in plan.pricing -->
                        <div class="plan-details-list ng-scope" ng-repeat="pricing in plan.pricing">
                            <div class="plan-amount">
                                <ul class="radiolinks subscribe-radiolinks">
                                    <li class="subscribe-radiobuttons">
                                        <div style="display: inline-flex">
                                        <input ng-value="pricing" id="radio_13"
                                            type="radio" aria-checked="false" value="[object Object]"
                                            aria-label="₹499₹699">
                                            {{-- <div class="md-container md-ink-ripple" md-ink-ripple=""
                                                md-ink-ripple-checkbox="">
                                                <div class="md-off"></div>
                                                <div class="md-on"></div>
                                            </div> --}}
                                            <div ng-transclude="" class="md-label">
                                                <span
                                                    class="plan-price ng-binding ng-scope">₹499
                                                </span>
                                                <span ng-if="pricing.strikedPrice"
                                                    class="striked-value ng-binding ng-scope">₹699
                                                </span>
                                                <!-- end ngIf: pricing.strikedPrice -->
                                            </div>
                                        
                                    </div>
                                        <div class="plans-period-description">
                                            <!-- ngIf: pricing.offerDescription -->
                                            <h3 ng-if="pricing.offerDescription"
                                                class="plans-period ng-binding ng-scope">( Inaugural Offer )</h3>
                                            <!-- end ngIf: pricing.offerDescription -->
                                            <h3 class="plans-period ng-binding">per Year</h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- end ngRepeat: pricing in plan.pricing -->
                    </div>
                </div><!-- end ngRepeat: plan in subscriptionPlansViewController.planPricing -->
            </div>
        </md-radio-group>
        <div class="free-days-text">
            <!-- ngIf: subscriptionPlansViewController.selectedPlan.freeDays -->
        </div>
        <div class="subsciption-details text-color-white">
            <table class="features" ng-class="{'short': subscriptionPlansViewController.planCategories.length === 2}">
                <thead class="features-head">
                    <tr>
                        <!-- ngRepeat: category in subscriptionPlansViewController.planCategories -->
                        <th class="plan-category ng-binding ng-scope text-left"
                            ng-class="{'text-left': category === 'Features'}"
                            ng-repeat="category in subscriptionPlansViewController.planCategories" style="">
                            Features</th>
                        <!-- end ngRepeat: category in subscriptionPlansViewController.planCategories -->
                        <th class="plan-category ng-binding ng-scope"
                            ng-class="{'text-left': category === 'Features'}"
                            ng-repeat="category in subscriptionPlansViewController.planCategories" style="">
                            Basic</th><!-- end ngRepeat: category in subscriptionPlansViewController.planCategories -->
                        <th class="plan-category ng-binding ng-scope"
                            ng-class="{'text-left': category === 'Features'}"
                            ng-repeat="category in subscriptionPlansViewController.planCategories"> Premium</th>
                        <!-- end ngRepeat: category in subscriptionPlansViewController.planCategories -->
                    </tr>
                </thead>
                <tbody>
                    <!-- ngRepeat: feature in subscriptionPlansViewController.planDetails -->
                    <tr class="pack-item ng-scope" ng-repeat="feature in subscriptionPlansViewController.planDetails"
                        style="">
                        <td class="plan-info">
                            <h4 ng-bind="feature.info" class="ng-binding">Video Quality</h4>
                        </td>
                        <td class="plan-value">
                            <!-- ngIf: feature.value!=='yes' && feature.value!=='no' -->
                            <h5 ng-if="feature.value!=='yes' &amp;&amp; feature.value!=='no'" ng-bind="feature.value"
                                class="ng-binding ng-scope">HD</h5>
                            <!-- end ngIf: feature.value!=='yes' && feature.value!=='no' -->
                            <!-- ngIf: feature.value=='yes' -->
                            <!-- ngIf: feature.value=='no' -->
                        </td><!-- ngIf: feature.premiumValue -->
                        <td class="plan-value ng-scope" ng-if="feature.premiumValue">
                            <!-- ngIf: feature.premiumValue!=='yes' && feature.premiumValue!=='no' -->
                            <h5 ng-if="feature.premiumValue!=='yes' &amp;&amp; feature.premiumValue!=='no'"
                                ng-bind="feature.premiumValue" class="ng-binding ng-scope">Full HD</h5>
                            <!-- end ngIf: feature.premiumValue!=='yes' && feature.premiumValue!=='no' -->
                            <!-- ngIf: feature.premiumValue=='yes' -->
                            <!-- ngIf: feature.premiumValue=='no' -->
                        </td><!-- end ngIf: feature.premiumValue -->
                    </tr><!-- end ngRepeat: feature in subscriptionPlansViewController.planDetails -->
                    <tr class="pack-item ng-scope" ng-repeat="feature in subscriptionPlansViewController.planDetails">
                        <td class="plan-info">
                            <h4 ng-bind="feature.info" class="ng-binding">Before TV</h4>
                        </td>
                        <td class="plan-value">
                            <!-- ngIf: feature.value!=='yes' && feature.value!=='no' -->
                            <!-- ngIf: feature.value=='yes' --><img ng-if="feature.value=='yes'" alt="image"
                                src="{{ asset('image/tick.png') }}" class="ng-scope">
                            <!-- end ngIf: feature.value=='yes' -->
                            <!-- ngIf: feature.value=='no' -->
                        </td><!-- ngIf: feature.premiumValue -->
                        <td class="plan-value ng-scope" ng-if="feature.premiumValue">
                            <!-- ngIf: feature.premiumValue!=='yes' && feature.premiumValue!=='no' -->
                            <!-- ngIf: feature.premiumValue=='yes' --><img ng-if="feature.premiumValue=='yes'"
                                alt="image" src="{{ asset('image/tick.png') }}" class="ng-scope">
                            <!-- end ngIf: feature.premiumValue=='yes' -->
                            <!-- ngIf: feature.premiumValue=='no' -->
                        </td><!-- end ngIf: feature.premiumValue -->
                    </tr><!-- end ngRepeat: feature in subscriptionPlansViewController.planDetails -->
                    <tr class="pack-item ng-scope" ng-repeat="feature in subscriptionPlansViewController.planDetails">
                        <td class="plan-info">
                            <h4 ng-bind="feature.info" class="ng-binding">Live TV </h4>
                        </td>
                        <td class="plan-value">
                            <!-- ngIf: feature.value!=='yes' && feature.value!=='no' -->
                            <!-- ngIf: feature.value=='yes' --><img ng-if="feature.value=='yes'" alt="image"
                                src="{{ asset('image/tick.png') }}" class="ng-scope">
                            <!-- end ngIf: feature.value=='yes' -->
                            <!-- ngIf: feature.value=='no' -->
                        </td><!-- ngIf: feature.premiumValue -->
                        <td class="plan-value ng-scope" ng-if="feature.premiumValue">

                            <!-- ngIf: feature.premiumValue=='yes' --><img ng-if="feature.premiumValue=='yes'"
                                alt="image" src="{{ asset('image/tick.png') }}" class="ng-scope">

                        </td><!-- end ngIf: feature.premiumValue -->
                    </tr><!-- end ngRepeat: feature in subscriptionPlansViewController.planDetails -->
                    <tr class="pack-item ng-scope" ng-repeat="feature in subscriptionPlansViewController.planDetails">
                        <td class="plan-info">
                            <h4 ng-bind="feature.info" class="ng-binding">Screens</h4>
                        </td>
                        <td class="plan-value">

                            <h5 ng-if="feature.value!=='yes' &amp;&amp; feature.value!=='no'" ng-bind="feature.value"
                                class="ng-binding ng-scope">1 (Mobile only)</h5>

                        </td>
                        <td class="plan-value ng-scope" ng-if="feature.premiumValue">

                            <h5 ng-if="feature.premiumValue!=='yes' &amp;&amp; feature.premiumValue!=='no'"
                                ng-bind="feature.premiumValue" class="ng-binding ng-scope">3</h5>

                        </td><!-- end ngIf: feature.premiumValue -->
                    </tr><!-- end ngRepeat: feature in subscriptionPlansViewController.planDetails -->
                    <tr class="pack-item ng-scope" ng-repeat="feature in subscriptionPlansViewController.planDetails">
                        <td class="plan-info">
                            <h4 ng-bind="feature.info" class="ng-binding">Exclusive</h4>
                        </td>
                        <td class="plan-value">

                            <!-- ngIf: feature.value=='yes' --><img ng-if="feature.value=='yes'" alt="image"
                                src="{{ asset('image/tick.png') }}" class="ng-scope">
                            <!-- end ngIf: feature.value=='yes' -->

                        </td><!-- ngIf: feature.premiumValue -->
                        <td class="plan-value ng-scope" ng-if="feature.premiumValue">

                            <!-- ngIf: feature.premiumValue=='yes' --><img ng-if="feature.premiumValue=='yes'"
                                alt="image" src="{{ asset('image/tick.png') }}" class="ng-scope">

                        </td><!-- end ngIf: feature.premiumValue -->
                    </tr><!-- end ngRepeat: feature in subscriptionPlansViewController.planDetails -->
                </tbody>
            </table>
            <div class="subscription-bottom-div">
                <div class="note-div">
                    <p>HD, Full HD, 4K (2160p) Video Qualities are available only when content is supported in their
                        respective resolutions</p>
                </div>
                <div class="selected-plan-details">
                    <h2 class="selected-plan-name ng-binding">Basic</h2>
                    <h1 class="selected-plan-amount ng-binding">₹365 <span class="selected-plan-period ng-binding">per
                            Year</span></h1>
                </div>
                <div> <button class="subscribe-button"
                        ng-click="subscriptionPlansViewController.openSubscriptions()"><span><img
                                src="{{ asset('image/crown-subscribe.png') }}" class="crown-subscribe"
                                alt="Crown"></span>Subscribe</button></div>
            </div>
        </div>
    </div>
</div>
