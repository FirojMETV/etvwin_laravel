@extends('layout')
@section('title','Video')

@section('content')
<link rel="stylesheet" href="{{asset('css/videoplayer.css')}}">
<div class=" video-view" style="margin-bottom: 100px" >
    <video id="video-player"  player >
        <source src="{{ asset('image/video.mp4') }}" type="video/mp4">
      </video>

</div>
<script src="{{asset('js/Videoplayer.js')}}"></script>
@endsection