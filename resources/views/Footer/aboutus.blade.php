@extends('layout')
@section('title', 'About-Us')
<link rel="stylesheet" href="{{asset('css/aboutus.css')}}">
@section('content')
<div class="ekta-view " id="view_begin" 
ng-class="{'top-large':heightst, 'top-small':!heightst}"
    ng-view="" style="">
    <div class="container ng-scope">
        <div class="list-container">
            <div class="policy-header">
                <h1>About Us</h1>
            </div>
            <div class="policy-content">
                <p>ETV is one of the largest satellite television networks in India with a bouquet of 7 SD and 5 HD
                    channel. Incepted in 1995 with ETV-Telugu, the Network has been maintaining a leading position in
                    delivering quality infotainment with an objective to take entertainment to the doorsteps of the
                    Telugu speaking people across the World.</p><br>
                <p> “ETV Win”, owned and operated by Eenadu Television Private Limited, is an online video platform
                    offering variety of Telugu content from ETV Network channels as well as original productions, with
                    many attractive features.</p><br>
                <p> “ETV Win” is offered through mobile apps on Android and iOS as well as web version compatible with
                    web browsers.</p><br>
                <p> Visitors / Users of “ETV Win” platform can make use of many paid and free features that the platform
                    offers, such as:</p><br>
                <p> • Genre-wise preference setting by the users to watch their favourite shows or serials.</p>
                <p> • Favourite TV Shows and serials from ETV Network channels.</p>
                <p> • Original fresh web series and shows.</p>
                <p> • Video quality based on internet bandwidth.</p>
                <p> • Watch offline.</p>
            </div>
        </div>
    </div>
</div>
