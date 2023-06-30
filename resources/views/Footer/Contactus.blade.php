@extends('layout')
@section('title', 'CONTACT US')
<link rel="stylesheet" href="{{ asset('css/contactus.css') }}">

@section('content')
<div class="ekta-view ng-scope top-large" id="view_begin" 
    ng-view="" style="padding-top: 60px">
    <div class="container ng-scope">
        <div class="list-container">
            <div class="policy-header">
                <h1>Contact Us</h1>
            </div>
            <div class="aboutus-content">
                <img alt="image" src="{{ asset('/image/contactus.png') }}">
                <h1>ETV Win</h1>
                <h2> ETV Building, 2nd Floor</h2>
                <h2>Ramoji Film City</h2>
                <h2>Hyderabad - 501512 - Telangana - India</h2>
                <h2><a href="tel: +91 80080 20555">Phone: +91 80080 20555</a>
                    (Mon-Sun 9 AM - 5:30 PM)</h2>
                <h2><a href="mailto:contact@etvwin.com">E mail : contact@etvwin.com</a>
                </h2>
            </div>
        </div>
    </div>
</div>
@endsection