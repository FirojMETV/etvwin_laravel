<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

document.addEventListener('DOMContentLoaded', function () {
  const player = new Plyr('#video-player', {
    controls: ['play', 'progress', 'current-time', 'mute', 'volume', 'nodownload'], hideDownloadButton: true, // Hide the download button
    controlsList: "nodownload",

  });
});
$(document).ready(function () {
  view_urls = 'http://127.0.0.1:8000/video';
  strSrc = view_urls + 'C:/xampp/firoj/webwin_project/public/image/video.mp4';
  strTYPE = 'video/mp4';
  $("#video-player").html('<source src="' + strSrc + '" type="' + strTYPE + '"></source>');
  document.getElementById('video-player').play();
});

document.addEventListener('DOMContentLoaded', () => {
  var video = document.getElementById('videos');
  var source = 'asset/image/videots/video.m3u8';
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

