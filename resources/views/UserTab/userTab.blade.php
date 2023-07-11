@extends('layout');
@section('content')

    <link rel="stylesheet" href="{{ asset('css/UserTabs.css') }}">

    <div class="ekta-view ng-scope top-small" id="view_begin" ng-class="{'top-large':heightst, 'top-small':!heightst}"
        ng-view="" style="">

        <div class="container ng-scope" ng-if="profileCtrl.isLogged">
            <div class="margin-container">
                <div class="profile-header">
                    <h1>My Profile</h1>
                </div>
                <div class="mob-photo-container">
                    <div class="blur-bg" style="background-image:url('{{ asset('image/usericon.png') }}')">
                    </div>
                    <div class="image-section profile-image-section">
                        <img alt="image" class="img-circle" id="rounded-image-mob"
                            src="{{ asset('image/usericon.png') }}">
                        <input type="file" name="imageselect" class="inputfile" id="imageselect"
                            onchange="angular.element(this).scope().profileCtrl.imageChanged(this)">

                        <div class="cropArea cropAreaMobile ng-scope" ng-if="!profileCtrl.removeCroppingDiv">
                            <img-crop image="image.originalImage" result-image="profileCtrl.userdata.profile_pic"
                                class="ng-isolate-scope">
                                <canvas width="0" height="0" style="margin-top: 0px;">
                                </canvas>
                            </img-crop>
                        </div>
                    </div>
                </div>
                <div class="my-profile-nav">
                    <ul class="nav nav-pills tab-list">
                        <li class=" tab active">
                            <a data-toggle="tab" class="profile-tab" ng-click="profileCtrl.selectTab('info')">INFO</a>
                        </li>

                        <li class="tab" style="">
                            <a data-toggle="tab" class="profile-tab">CHANGE PASSWORD</a>
                        </li class='tab'>

                        <li class="tab">
                            <a data-toggle="tab" class="profile-tab">SUBSCRIPTION</a>
                        </li class='tab'>
                        <li class="tab">
                            <a data-toggle="tab" class="profile-tab">TRANSACTIONS</a>
                        </li>
                    </ul>
                </div>

                <div class="row profile-content">
                    <div class="row my-profile-div tab-content  ">
                        <div id="info" class="ng-scope content">
                            <div id="editprofile" class="profile-edit-section " aria-hidden="true">
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 blur-container">
                                    <div class="blur-bg" style="background-image:url('{{ asset('image/usericon.png') }}')">
                                    </div>
                                    <div class="image-section profile-image-section">
                                        <img alt="image" class="img-circle" id="rounded-image"
                                            src="{{ asset('image/usericon.png') }}"
                                            lazy-img="{{ asset('image/usericon.png') }}" height="200px" width="200px">
                                        <input type="file" name="imageselect" class="inputfile" id="imageselect"
                                            onchange="angular.element(this).scope().profileCtrl.imageChanged(this)"><label
                                            for="imageselect" class="upload-label"><span
                                                class="glyphicon glyphicon-pencil edit-button"
                                                style="left: 7px;top: 5px; color:#000"></span></label> <button
                                            ng-disabled="profileCtrl.isRemoveDisabled" ng-click="profileCtrl.removeImage()"
                                            class="form-button remove-btn-web" disabled="disabled">REMOVE</button>
                                        <div class="cropArea">
                                            <img-crop image="image.originalImage"
                                                result-image="profileCtrl.userdata.profile_pic" class="ng-isolate-scope">
                                                <canvas width="0" height="0" style="margin-top: 0px;"></canvas>
                                            </img-crop>
                                        </div>
                                    </div>
                                </div>
                                {{-- edit form for editting user data   --}}
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 form-section">
                                    <form method="POST">
                                        <div class="login__field">
                                            <label for="name">NAME</label>
                                            <input type="text" id="name" name="name"
                                                class="login__input required-input">
                                            <span class="error-message" style="display: none;"> This field cannot be
                                                blank.</span>
                                        </div>
                                        <div class="login__field">
                                            <label for="dob">DOB</label>
                                            <input type="date" id="dob" name="dob"
                                                class="login__input required-input">
                                            <span class="error-message" style="display: none;"> This field cannot be
                                                blank.</span>
                                        </div>
                                        <div class="login__field">
                                            <label for="location">LOCATION *</label>
                                            <input type="text" id="location" name="location"
                                                class="login__input required-input">
                                            <span class="error-message" style="display: none;"> This field cannot be
                                                blank.</span>
                                        </div>
                                        <div class="login__field">
                                            <label for="gender-select">GENDER</label>
                                            <select name="title" id="gender-select" class="select">
                                                <option value=""> Please choose an option </option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>

                                            </select>
                                        </div>
                                        <div>
                                            <ul class="profile-update-btn profile-update-btn-phone">
                                                <li style="padding-bottom: 8px;">
                                                    <button class="form-button">CANCEL
                                                    </button>
                                                </li>
                                                <li>
                                                    <button id="sub-btn" class="form-button blue-button"
                                                        type="submit">DONE
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            {{-- current user data like profile or subscribtion plan  --}}
                            <div class="profile-section ng-scope" id='user-profile'>
                                <div class="row edit-area">
                                    <button id="edit-button" class="form-buttons profile-edit-button">
                                        EDIT
                                    </button>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 blur-container">
                                        <div class="blur-bg"
                                            style="background-image:url('{{ asset('image/usericon.png') }}')">
                                        </div>
                                        <div class="image-section profile-image-section">

                                            <img alt="image" class="img-circle ng-scope"
                                                src="{{ asset('image/usericon.png') }}"
                                                lazy-img="{{ asset('image/usericon.png') }}" height="200px"
                                                width="200px">

                                            <input type="file" name="imageselect" class="inputfile" id="imageselect">
                                            <label for="imageselect" class="upload-label">
                                                <span class="glyphicon glyphicon-pencil edit-button"
                                                    style="left:7px;top: 5px; color:#000 ;">
                                                </span>
                                            </label>
                                            <div class="cropArea">
                                                <img-crop image="image.originalImage"
                                                    result-image="profileCtrl.userdata.profile_pic"
                                                    class="ng-isolate-scope">
                                                    <canvas width="0" height="0" style="margin-top: 0px;">
                                                    </canvas>
                                                </img-crop>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 form-section">

                                        <div class="label-section ng-scope" style="">
                                            <label>Name</label>
                                            <h3 class="ng-binding">
                                                john
                                            </h3>
                                        </div>
                                        <div class="label-section ng-scope">
                                            <label>Email</label>
                                            <h3 class="ng-binding">
                                                john@email.com</h3>
                                        </div>

                                        <div ng-if="subsub" class="label-section ng-scope">
                                            <label>Subscription
                                                Status</label>
                                            <h3>FREE</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- password Tabs for change password --}}


                        <div class="row chngpassword-div content">
                            <div id="chngpassword">
                                <form method="POST">
                                    <div class="login__field">
                                        <label for="name">
                                            Old Password</label>
                                        <input type="password" id="name" name="name"
                                            class="login__input required-input">
                                        <span class="error-message" style="display: none;"> This field cannot be
                                            blank.</span>

                                    </div>
                                    <div class="login__field">
                                        <label for="name">
                                            New Password</label>
                                        <input type="password" id="name" name="name"
                                            class="login__input required-input">
                                        <span class="error-message" style="display: none;"> This field cannot be
                                            blank.</span>
                                    </div>
                                    <div class="login__field">
                                        <label for="name">
                                            Re-Password</label>
                                        <input type="password" id="name" name="name"
                                            class="login__input required-input">
                                        <span class="error-message" style="display: none;"> This field cannot be
                                            blank.</span>
                                    </div>
                                    <div>
                                        <ul class="profile-update-btn profile-update-btn-phone">
                                            <li style="padding-bottom: 8px;">
                                                <button class="form-button">CANCEL
                                                </button>
                                            </li>
                                            <li>
                                                <button id="sub-btn" class="form-button blue-button"
                                                    type="submit">DONE
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>

                        {{-- Subcription plan details --}}

                        <div class=" row subscription-division content" ng-if="profileCtrl.isTabSelected('subscription')">
                            <div class="subscription-container ng-scope">
                                <div class="subscription-plans-list subscription-top-margin">
                                    <div class="plans-detail " style="">
                                        <h1 class="plan-title ">Basic</h1>
                                        <div class="plan-details-wrapper">
                                            <div class="plan-details-list">
                                                <div class="plan-amount">
                                                    <ul class="radiolinks subscribe-radiolinks">
                                                        <li class="subscribe-radiobuttons md-checked">
                                                            <div style="display: inline-flex">
                                                                <input class="subscribe-radio md-checked"
                                                                    ng-value="pricing" id="Basic" role="radio"
                                                                    name="plan" value="Basic" aria-label="₹365₹499"
                                                                    type="radio" onclick="showSelectedPlan(this)">
                                                                <div ng-transclude="" class="md-label">
                                                                    <span class="plan-price ng-binding ng-scope">₹365
                                                                    </span>
                                                                    <span ng-if="pricing.strikedPrice"
                                                                        class="striked-value ng-binding ng-scope">₹499
                                                                    </span>

                                                                </div>
                                                            </div>
                                                            <div class="plans-period-description">
                                                                <h3 class="plans-period ng-binding ng-scope">(Inaugural
                                                                    Offer)
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
                                                                <input class="subscribe-radio" id="premiumMonthly"
                                                                    name="plan" value="premiumMonthly"
                                                                    aria-label="₹99" type="radio"
                                                                    onclick="showSelectedPlan(this)">
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
                                                                <input ng-value="pricing" id="PremiumYearly"
                                                                    type="radio" name="plan" value="PremiumYearly"
                                                                    aria-label="₹499₹699"
                                                                    onclick="showSelectedPlan(this)">
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
                                                        ng-bind="feature.premiumValue" class="ng-binding ng-scope">Full HD
                                                    </h5>

                                                </td>
                                            </tr>
                                            <tr class="pack-item ng-scope">
                                                <td class="plan-info">
                                                    <h4 ng-bind="feature.info" class="ng-binding">Before TV</h4>
                                                </td>
                                                <td class="plan-value">

                                                    <img ng-if="feature.value=='yes'" alt="image"
                                                        src="{{ asset('image/tick.png') }}" class="ng-scope">

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
                                                    <img ng-if="feature.value=='yes'" alt="image"
                                                        src="{{ asset('image/tick.png') }}" class="ng-scope">
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
                                                    <h5 ng-if="feature.value!=='yes' &amp;&amp; feature.value!=='no'"
                                                        ng-bind="feature.value" class="ng-binding ng-scope">1 (Mobile
                                                        only)</h5>
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

                                                    <img ng-if="feature.value=='yes'" alt="image"
                                                        src="{{ asset('image/tick.png') }}" class="ng-scope">

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
                                        <p style=" color: #fff;">HD, Full HD, 4K (2160p) Video Qualities are available only
                                            when content is supported in their
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


                        {{-- Transaction pages --}}

                        <div class="content row transaction-division">
                            <h1 class="transaction-heading">
                                Transaction Details
                            </h1>
                            <div class="subsciption-details">
                                <table class="features">
                                    <thead class="features-head-transactions">
                                        <tr>
                                            <th class="plan-category-transaction text-left" style="">
                                                Date
                                            </th>

                                            <th class="plan-category-transaction" style="">
                                                Description
                                            </th>

                                            <th class="plan-category-transaction ">
                                                Plan Duration </th>
                                            <th class="plan-category-transaction ">
                                                Status </th>
                                            <th class="plan-category-transaction ">
                                                Amount  </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="pack-item ng-scope" >
                                            <td class="plan-info-transactions">
                                                <h4>Date</h4>
                                            </td>
                                            <td class="plan-value-details">
                                                <h4>
                                                    Plan Details
                                                </h4>
                                            </td>
                                            <td class="plan-value-details" >
                                              <h4>
                                                Duration time
                                                </h4> 
                                            </td>
                                            <td class="plan-value-details" >
                                                <h4>
                                                    Status
                                                  </h4> 
                                              </td>
                                              <td class="plan-value-details" >
                                                <h4>
                                                    &#8377; 
                                                  </h4> 
                                              </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            {{-- <div>
                                <p class="transaction-null">
                                    No records to show
                                </p>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="{{ asset('js/tabs.js') }}"></script>
@endsection
