@extends('layout')
@section('title', 'Video')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/videoplayer.css') }}">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <div class=" video-view" style="margin-bottom: 100px">
        <video id="video-player" controls controlslist='nodownload'>
            <source src="{{ asset('image/video.mp4') }}" type="video/mp4">
        </video>

    </div>
    <script type="text/javascript">
        document.addEventListener('contextmenu', event => event.preventDefault();)
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            view_urls = 'http://127.0.0.1:8000/video';
            strSrc = view_urls + 'C:/xampp/firoj/webwin_project/public/image/video.mp4';
            strTYPE = 'video/mp4';
            $("#video-player").html('<source src="' + strSrc + '" type="' + strTYPE + '"></source>');
            document.getElementById('video-player').play();
        });
    </script>
    <script src="{{ asset('js/Videoplayer.js') }}"></script>
   

@endsection
