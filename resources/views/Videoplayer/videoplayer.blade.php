{{-- @extends('layout')
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
    <script type="text/javascript">
        document.addEventListener('contextmenu', event => event.preventDefault();)
    </script>
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
    <script src="{{ asset('js/Videoplayer.js') }}"></script>


@endsection --}}

<html>

<head>

    <link type="text/css" rel="stylesheet" href="{{ asset('css/Videoplayer.css') }}">
    <style>
        *,
        ::after,
        ::before {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            font-size: 20px;
            line-height: 1.5;
            -webkit-tap-highlight-color: transparent;
        }

        body {
            background: #fff;
            color: #111;
            font-size: 0.8rem;
            overflow-x: hidden;
            text-rendering: optimizeLegibility;
            font-family: Gilroy-Medium;
        }
    </style>
</head>

<body>

    <div id="video"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://imasdk.googleapis.com/js/sdkloader/ima3.js"></script>
    <script src="{{ asset('js/Videoplayer.js') }}"></script>
    <script>
        $("#video").aksVideoPlayer({
            file: [{
                    file: "{{ asset('js/videos/video-1080.mp4') }}",
                    label: "1080p"
                },
                {
                    file: "{{ asset('js/videos/video-720.mp4') }}",
                    label: "720p"
                },
                {
                    file: "{{ asset('js/videos/video-540.mp4') }}",
                    label: "540p"
                },
                {
                    file: "{{ asset('js/videos/video-360.mp4') }}",
                    label: "360p"
                },
                {
                    file: "{{ asset('js/videos/video-240.mp4') }}",
                    label: "240p"
                }
            ],
            width: 840,
            height: 460,
            poster: "{{ asset('js/videos/poster.webp') }}",
            forward: true,
            ads: [{
                    type: "google",
                    // url: 'https://pubads.g.doubleclick.net/gampad/ads?sz=640x480&' +
                    //     'iu=/124319096/external/single_ad_samples&ciu_szs=300x250&impl=s&gdfp_req=1&' +
                    //     'env=vp&output=vast&unviewed_position_start=1&cust_params=' +
                    //     'deployment%3Ddevsite%26sample_ct%3Dskippablelinear&correlator='

                    url: 'https://pubads.g.doubleclick.net/gampad/ads?sz=640x480&' +
                        'iu=/124319096/external/single_ad_samples&ciu_szs=300x250&impl=s&gdfp_req=1&' +
                        'env=vp&output=vast&unviewed_position_start=1&cust_params=' +
                        'deployment%3Ddevsite%26sample_ct%3Dskippablelinear&correlator='
                    // url:'https://pubads.g.doubleclick.net/gampad/ads?sz=640x480&' +
                    // 'iu=/124319096/external/ad_rule_samples&ciu_szs=300x250&ad_rule=1&' +
                    // 'impl=s&gdfp_req=1&env=vp&output=vmap&unviewed_position_start=1&' +
                    // 'cust_params=deployment%3Ddevsite%26sample_ar%3Dpremidpost&' +
                    // 'cmsid=496&vid=short_onecue&correlator='

                },
                {
                    type: "image",
                    src: "https://raw.githubusercontent.com/Ahmetaksungur/aksvideoplayer/main/videos/ads.png",
                    width: 320,
                    height: 50,
                    link: "http://ahmetaksungur.com/",
                    time: "00:20"
                },
                {
                    type: "video",
                    src: "https://raw.githubusercontent.com/Ahmetaksungur/aksvideoplayer/main/videos/videoads.mp4",
                    link: "http://ahmetaksungur.com/",
                    time: "00:35",
                    adstimer: "6"
                },
                {
                    type: "video",
                    src: "https://raw.githubusercontent.com/Ahmetaksungur/aksvideoplayer/main/videos/videoads.mp4",
                    link: "http://ahmetaksungur.com/",
                    time: "01:35",
                    adstimer: "6"
                }
            ],

        });
    </script>

</body>

</html>
