@extends('layout')
@section('title', 'Video')

@section('content')
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
    <link rel="stylesheet" href="{{ asset('css/videoplayer.css') }}">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/hls.js@Latest"></script>



    <div class=" video-player" style="margin-bottom: 100px;height:400px;">
        <video id="videos" controls>
        </video>

    </div>
    {{-- <script type="text/javascript">
        document.addEventListener('contextmenu', event => event.preventDefault();)
    </script> --}}
    <script type="text/javascript">
       document.addEventListener('DOMContentLoaded', () => {
  var video = document.getElementById('videos');
  var  source="https://www.youtube.com/embed/bTqVqk7FSmY?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1";
  const defaultOptions = {};
  if (Hls.isSupported()) {
    const hls = new Hls();
    hls.loadSource(source);
    hls.on(Hls.Events.MANIFEST_PARSED, function (event, data) {
      const availableQualities = hls.levels.map((l) => l.height)
      defaultOptions.controls =
        [
          'play-large',
          'restart',
          'rewind',
          'play',
          'fast-forward',
          'progress',
          'current-time',
          'duration',
          'mute',
          'volume',
          'settings',
          'pip',
          'airplay',
          'download',
          'fullscreen',
        ];
        defaultOptions.quality={
          default:availableQualities[0],
          options:availableQualities,
          force:true,
          onchange:(ev)=>updateQuality(ev)
        }
        new Plyr(video,defaultOptions);
    });
    hls.attachMedia(video);
    window.hls=hls;
  }
  function updateQuality(newQuality){
    window.hls.levels.forEach(level,levelIndext => {
      if(level.height===newQuality){
        window.hls.currentLevel=levelIndext
      }
    });
  }
})
    </script>
    {{-- <script src="{{ asset('js/Videoplayer.js') }}"></script> --}}


@endsection
