@extends('layout')
@section('title', 'FAQ')
<link rel="stylesheet" href="{{ asset('css/faq.css') }}">

@section('content')
<div class="ekta-view ng-scope top-large" id="view_begin" ng-class="{'top-large':heightst, 'top-small':!heightst}"
    ng-view="" style="">
    <div class="container side-padding ng-scope">
        <div class="list-container">
            <div class="policy-header">
                <h1 class="faq-header">Frequently Asked Questions</h1>
            </div>
            <div class="policy-content">
                <p class="question"> What is ETV Win?</p>
                <p> ETV Win is an online Over-the-top (OTT) entertainment video platform in Telugu language, offered by
                    Eenadu Television Private Limited. Apart from TV Shows, serials, infotainment content, ETV Win also
                    offers Events (Live &amp; recorded), movies, etc. Users of ETV Win can stream the content through
                    PCS, Smart Phones, Tablets and connected TVs (Android TV &amp; Fire TV Stick).</p><br>
                <h1 class="faq-headings">Registration - ETV Win</h1><br>
                <p class="question"> How do I register on ETV Win?</p>
                <p>
                    You can sign up for ETV Win by using any of the below methods:
                    <br> 1) Email address, Password
                    creation, Mail Verification &amp; followed by Profile Info<br>
                    2) Mobile Number, Password creation,
                    OTP Verification &amp; followed by Profile info<br>
                    3) Sign up with Google Account<br>
                    4) Sign up
                    with Facebook Account<br>
                </p>
                <br>
                <p class="question"> Is registration for ETV Win chargeable?</p>
                <p> No, Registration to ETV Win is absolutely free. However, as a free user you will not have access to
                    all the content offered by the platform.</p><br>
                <p class="question"> Can I register using a social media account?</p>
                <p> Yes, users can login with their Facebook and Google account when they login from mobile Apps on
                    Android and iOS and from website also.</p><br>
                <p class="question"> Can I change my password?</p>
                <p> In case you have forgotten your password, click on forgot password link and an email would be sent
                    to you with a link to reset password.</p><br>
                <p class="question"> Can I change my registered email ID and mobile number?</p>
                <p> Credentials like email ID and mobile number cannot be changed. For more queries, please write to us
                    at <a href="mailto:support@etvwin.com">support@etvwin.com</a> for assistance on this.</p><br>
                <p class="question"> How to delete my account from ETV Win?</p>
                <p> Provide your registered ID by mentioning the reason to delete the account &amp; mail us at <a
                        href="mailto:support@etvwin.com">support@etvwin.com</a> from your registered mail ID and we will
                    process your request accordingly.</p><br>
                <h1 class="faq-headings">Subscription - ETV Win</h1><br>
                <p class="question"> How many types of membership are there on ETV Win?</p>
                <p> There are two types of membership on ETV Win. Free and paid. Paid membership will allow access to
                    premium content that are available on ETV Win platform from time to time, for a period based upon
                    the package opted. Free membership for certain content is available for any free user, all the time.
                </p><br>
                <p class="question"> How to Subscribe?</p>
                <p> Subscribe on ETV Win with simple steps and enjoy the service on the web, mobile devices &amp; Smart
                    TVs<br></p>
                <ul style="list-style-type:disc;" class="tab-space">
                    <li>Login to ETV Win with your credentials</li>
                    <li>Go to Profile &amp; click on Subscription status</li>
                    <li>Select the plan of your choice</li>
                    <li>Click on Subscribe &amp; make Payment</li>
                    <p class="left-margin-space">Or</p>
                    <li>Login to ETV Win with your credentials</li>
                    <li>Click on any premium content &amp; hit subscribe button</li>
                    <li>Select the plan of your choice</li>
                    <li>Click on Subscribe &amp; make Payment</li>
                </ul><br>
                <p>Soon after the purchase, you will receive the subscription mail confirmation with all details.</p>
                <p></p><br>
                <p class="question"> What are the paid membership packages available on ETV Win, to users?</p>
                <p> In India, currently two plans are available:<br></p>
                <ul>
                    <li><b class="font-bold tab-space">Basic Plan:</b></li>
                </ul>
                <ul style="list-style-type:circle;" class="tab-space-double">
                    <li>Yearly (1 screen - Mobile only) - Rs. 365/-</li>
                </ul><br>
                <ul>
                    <li><b class="font-bold tab-space">Premium Plan:</b></li>
                </ul>
                <ul style="list-style-type:circle;" class="tab-space-double">
                    <li>Monthly (3 screens) - Rs. 99/-</li>
                    <li>Yearly (3 screens) - Rs. 499/-</li>
                </ul>
                <p></p><br>
                <p class="question"> What are the payment modes available on ETV Win?</p>
                <p> <b class="font-bold">Mobile App (Android) &amp; Website:</b> Credit Cards, Debit Cards, Debit Card +
                    ATM Pin, Internet Banking, UPI, PhonePe, G Pay, Amazon Pay</p>
                <p class="question">Mobile App (iOS):</p>
                <p>You can typically use these methods with your Apple ID:</p>
                <ul style="list-style-type:disc;" class="tab-space">
                    <li>Apple Pay</li>
                    <li>Most credit and debit cards</li>
                    <li>Store credit, from redeeming gift cards or from adding funds to your Apple ID</li>
                    <li>Country-specific or region-specific additional methods</li>
                </ul><br>
                <p class="question"> Are the Subscription charges inclusive of taxes?</p>
                <p> Yes, all charges are inclusive of taxes. However, this may change subject to applicable laws.</p>
                <br>
                <p class="question"> Can I watch when I am travelling outside India?</p>
                <p> Our subscriptions and rights to the content are region-specific. Subscription plans purchased in one
                    country will not be valid in another country.</p><br>
                <p class="question">Packages outside India:</p>
                <ul style="list-style-type:disc;" class="tab-space">
                    <li class="font-bold">Premium Plan:</li>
                </ul>
                <ul style="list-style-type:circle;" class="tab-space-double">
                    <li>Monthly (3 screen) - $ 7.99</li>
                    <li>Yearly (3 screens) - $ 39.99</li>
                </ul><br>
                <p class="question"> Where can I get the subscription information?</p>
                <p> You will receive the subscription mail confirmation soon after the purchase.<br> Here's the
                    information you will be able to see:<br> 1. <b class="font-bold">Plan Name</b><br> 2. <b
                        class="font-bold">Plan Price</b><br> 3. <b class="font-bold">Subscription Period</b><br> 4. <b
                        class="font-bold">Payment mode</b><br> 5. <b class="font-bold">Transaction ID</b><br> 6. <b
                        class="font-bold">Next Billing Date</b><br> You can visit the Subscription Page for details like
                    plan details, subscription status &amp; expiry date in mobile apps, web &amp; TV apps.</p><br>
                <p class="question"> How can I get my Invoice?</p>
                <p> Currently the Transaction history &amp; Invoice download option is available only on Website. Please
                    sign in to the website, go to 'My Profile' section, under 'Transactions' Tab click on 'Download
                    Invoice'.</p><br>
                <p class="question"> How to Upgrade your Subscription?</p>
                <p> You can upgrade to the yearly pack at any time, depending on the type of subscription you currently
                    have(monthly) &amp; it is possible only when your subscription period is active. After upgrading,
                    your subscription period will be adjusted considering the pack you have chosen to upgrade and the
                    number of days used in your current subscription.</p>
                <p class="display-centre">Or</p>
                <p>Just wait for your current subscription to end. Once it does, you can purchase another one.</p>
                <p></p><br>
                <p class="question"> How Do I Cancel My Subscription?</p>
                <p> If the subscription is paid via Netbanking, UPI, it does not require cancellation and will expire
                    automatically at the end of the current subscription period.<br></p>
                <ul style="list-style-type:disc;" class="tab-space">
                    <li>All plans are non-refundable</li>
                    <li>Cancellation does not lead to a refund. It only ensures that you will not be charged a renewal
                        fee in future</li>
                    <li>Your access remains active till the end of the current billing period even if you cancel
                        membership midway</li>
                    <li>For any other queries regarding your subscription, please reach out to us at <a
                            href="mailto:support@etvwin.com" style="text-decoration: none;color:#FFC908">support@etvwin.com</a></li>
                </ul>
                <p></p><br>
                <h1 class="faq-headings">Supported Devices</h1><br>
                <p class="question"> What is the minimum requirement to access ETV Win?</p>
                <p> Users need to have decent internet access capable of streaming video content.</p>
                <p class="tab-space"> 1. <b class="font-bold">Android:</b> Minimum Version is Kitkat(4.44)+<br> 2. <b
                        class="font-bold">iPhone:</b> Requires iOS 9.3 or later.<br> 3. <b class="font-bold">iPad:</b>
                    Requires iPadOS 9.3 or later.<br> 4. <b class="font-bold">iPod touch:</b> Requires iOS 9.3 or
                    later.<br> 5. <b class="font-bold">Mac:</b> Requires macOS 11.0 or later and a Mac with Apple M1
                    chip.<br> 6. <b class="font-bold">Android TV &amp; Fire TV Stick:</b> Android 6.0 and above.<br> 7.
                    <b class="font-bold">Windows:</b> Recommended OS versions are 8 and 10.
                </p><br>
                <p class="question"> Does ETV Win support Roku TV?</p>
                <p> As of now ETV Win is not available on Roku TV. ETV Win supports Android TV, Fire TV and Chromecast
                    support.</p><br>
                <p class="question"> On how many devices can I stream simultaneously?</p>
                <p> The number of devices that you can watch ETV Win content depends on your subscription plan, and the
                    platform through which you got the plan.<br><br></p>
                <ul style="list-style-type:disc;" class="tab-space">
                    <li><b class="font-bold">India:</b></li>
                </ul>
                <ul style="list-style-type:circle;" class="tab-space-double">
                    <li><b class="font-bold">One Screen(Mobile only):</b> For only Basic plan users</li>
                    <li><b class="font-bold">Three Screens:</b> For only Premium Pack users</li>
                </ul><br>
                <ul style="list-style-type:disc;" class="tab-space">
                    <li><b class="font-bold">Outside India:</b></li>
                </ul>
                <ul style="list-style-type:circle;" class="tab-space-double">
                    <li><b class="font-bold">Three Screens:</b> For Premium Pack users</li>
                </ul>
                <p></p><br>
                <p class="question"> What is the language of video content on ETV Win?</p>
                <p> Currently ETV Win offers video content in Telugu language only.</p><br>
                <p class="question"> How to get ETV Win on my mobile phone or Tablet?</p>
                <p> Please visit Google App Store for Android based device or Apple Stores for iOS based devices,
                    download and install the App. Once you sign in, you can have access to free content offered by ETV
                    Win. For premium content, you have to subscribe for available packages on ETV Win from time to time.
                </p><br>
                <p class="question"> How to get ETV Win on my PC /Laptop?</p>
                <p> ETV Win is accessible on any PC/Laptop with an Internet connection and a browser like Chrome,
                    Firefox, Internet Explorer, etc. Please type <a href="/home" style="color: #FFC908"
                        target="_blank">“etvwin.com”</a> on your browsers to get started.<br> The following OS and
                    browser versions are supported:<br> <b class="font-bold">a. Mac Browsers</b><br> i. Safari v9.0<br>
                    <b class="font-bold">b. Windows Browsers</b><br> i. Chrome v52.0<br> ii. Firefox v48.0<br> iii. IE10
                    and IE11<br> iv. Edge v38.0<br> <b class="font-bold">c. Android browsers:</b> Chrome OS 56.0<br> <b
                        class="font-bold">d. iOS browsers:</b> Safari 8<br>
                </p><br>
                <h1 class="faq-headings">Access to TV</h1><br>
                <p class="question"> How to access ETV Win content on TV using Chromecast?</p>
                <p></p>
                <ul style="list-style-type:disc;" class="tab-space">
                    <li>At first, make sure that your mobile device and TV screen is connected with the same WiFi</li>
                    <li>Then tap on the Chromecast Icon &amp; select the device you want to cast on</li>
                </ul>
                <p></p><br>
                <p class="question"> How do I get ETV Win in Smart TV?</p>
                <p> To Install ETV Win, please visit the below stores in respective Smart TV platforms:<br></p>
                <ul style="list-style-type:disc;" class="tab-space">
                    <li>Android TV: Visit Google Play Store, Download &amp; Install ETV Win</li>
                    <li>FireTV Stick: Visit Amazon App store, Download &amp; Install ETV Win</li>
                </ul>
                <p></p><br>
                <p class="question"> How do I activate ETV Win in Smart TV?</p>
                <p> Activate the TV in simple steps:<br></p>
                <ul style="list-style-type:disc;" class="tab-space">
                    <li>Visit <a href="/active" style="color: #FFC908 ;text-decoration:none  "
                            target="_blank">https://www.etvwin.com/active</a> by typing the URL in the web browser of
                        your mobile/laptop with your registered ID.</li>
                    <li>Enter the code you see on your TV screen and click on verify</li>
                    <p class="display-centre">Or</p>
                    <li>Log into your ETV Win mobile app/website, then click on <b class="font-bold">Activate TV</b>
                        from the Menu icon &amp; enter the code you see on your TV screen &amp; click on Activate</li>
                </ul>
                <p>Once you verify the device, all your account information will be synced with the device such as your
                    profile, My Subscription, Watchlist etc.</p>
                <p></p><br>
                <h1 class="faq-headings">Content</h1><br>
                <p class="question"> What is the content offered under paid membership?</p>
                <p></p>
                <ul style="list-style-type:disc;" class="tab-space">
                    <li>Never-before-seen Originals</li>
                    <li>Dying-to-know Before TV</li>
                    <li>Live TV - all 7 ETV Channels</li>
                    <li>Exclusive Movies: Gold Collection</li>
                </ul>
                <p></p><br>
                <p class="question"> Do you provide LIVE TV?</p>
                <p> Yes, we provide Live TV of all 7 ETV Channels-</p>
                <ul style="list-style-type:disc;" class="tab-space">
                    <li>ETV Telugu</li>
                    <li>ETV Plus</li>
                    <li>ETV Cinema</li>
                    <li>ETV Abhiruchi</li>
                    <li>ETV Life</li>
                    <li>ETV Telangana</li>
                    <li>ETV Andhra Pradesh</li>
                </ul>
                <p></p><br>
                <p class="question"> Why is some content on ETV channels not available on ETV Win?</p>
                <p> Content available on ETV Win is based on the geography &amp; therefore it is possible that the
                    content you are trying to access is not available in your country.</p><br>
                <p class="question"> Why do some content disappear from your platform?</p>
                <p> Movies/Serials/Shows which are available on ETV Win subject to their digital rights. Once the
                    digital rights expire, we cannot continue to stream that content on our platform and will be removed
                    from ETV Win.</p><br>
                <h1 class="faq-headings">Buffering Issues &amp; Errors</h1><br>
                <p> Buffering issues can be caused due to multiple reasons like internet speed, latency, number of hops,
                    routing, last-mile connectivity issues, etc.</p>
                <ul style="list-style-type:disc;" class="tab-space">
                    <li><b class="font-bold">Android phone/Android TV/Fire TV:</b> If you are facing this issue, please
                        ensure that you are on the latest app version (1.0.0). If not please update the app.</li>
                    <li><b class="font-bold">IOS:</b> If you are facing this issue on IOS, please make sure that you
                        have the latest iOS app version of 1.0 &amp; in order to check for a ETV Win update, go to the
                        <b class="font-bold">App Store</b> and select <b class="font-bold">Updated</b>. If there are
                        any updates available for ETV Win, select <b class="font-bold">Update</b> next to the app.
                    </li>
                    <li><b class="font-bold">Web:</b> If you are facing this issue in website, clear your browser cache
                        on a regular basis to help with stability and performance when viewing on <a href="/home"
                            style="color: #FFC908" target="_blank">https://www.etvwin.com</a>.</li>
                </ul>
                <p></p><br>
                <p class="question"> How can I contact you?</p>
                <p> We are always happy to assist you. Please drop us an email to <a href="mailto:contact@etvwin.com"
                        style="text-decoration: none; color:#FFC908">contact@etvwin.com</a>. We shall respond as soon
                    as possible.
                </p><br>
                <h1 class="faq-headings">Offline Downloads</h1><br>
                <p> Content that can be downloaded will have the Download Button below the Video Player &amp; the
                    downloaded content can be watched later &amp; this feature is currently available on our Mobile apps
                    only.</p><br>
                <p class="question"> Why are offline downloads not available on Smart TV's?</p>
                <p> This functionality is currently not available on Smart TVs.</p><br>
                <p class="question"> How much data does ETV Win consume?</p>
                <p> Due to high resolution content on ETV Win, it may result in high cellular data usage charges from
                    your carrier. If you want to reduce your data consumption, try switching your device to a Wireless
                    Internet ('Wi-Fi') connection.</p><br>
                <p class="question"> Why Downloads are getting stuck?</p>
                <p> This is due to internet fluctuation. So try clearing the app's cache &amp; data and try downloading
                    again.</p><br>
                <p class="question"> Till how long will the downloaded content be available?</p>
                <p> Downloaded content will be available for 6 days on ETV Win.</p><br><br>
            </div>
        </div>
    </div>
</div>
@endsection