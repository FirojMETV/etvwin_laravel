<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

document.addEventListener('DOMContentLoaded', function() {
    const player = new Plyr('#video-player', {
      controls: ['play', 'progress', 'current-time', 'mute', 'volume','nodownload'],
      hideDownloadButton: true, // Hide the download button
      controlsList:"nodownload" ,
      
    });
  });
  $(document).ready(function() {
    view_urls = 'http://127.0.0.1:8000/video';
    strSrc = view_urls + 'C:/xampp/firoj/webwin_project/public/image/video.mp4';
    strTYPE = 'video/mp4';
    $("#video-player").html('<source src="' + strSrc + '" type="' + strTYPE + '"></source>');
    document.getElementById('video-player').play();
});



document.ready(function () {
  $("#video").aksVideoPlayer({
    file: [
      {
        file: "https://raw.githubusercontent.com/Ahmetaksungur/aksvideoplayer/main/videos/video-1080.mp4",
        label: "1080p"
      },
      {
        file: "https://raw.githubusercontent.com/Ahmetaksungur/aksvideoplayer/main/videos/video-720.mp4",
        label: "720p"
      },
      {
        file: "https://raw.githubusercontent.com/Ahmetaksungur/aksvideoplayer/main/videos/video-540.mp4",
        label: "540p"
      },
      {
        file: "https://raw.githubusercontent.com/Ahmetaksungur/aksvideoplayer/main/videos/video-360.mp4",
        label: "360p"
      },
      {
        file: "https://raw.githubusercontent.com/Ahmetaksungur/aksvideoplayer/main/videos/video-240.mp4",
        label: "240p"
      }
    ],
    width: 900,
    height: 360,
    poster: "https://raw.githubusercontent.com/Ahmetaksungur/aksvideoplayer/main/videos/poster.webp",
    forward: true,
    contextMenu: [
      {
        type: "urlCopy",
        label: "Copy Video Url",
        url: "http://url.com/"
      },
      {
        type: "socialmedia",
        label: "Share on Social Media",
        socials: [
          {
            label: "Facebook",
            url: "",
            colorBg: "#0066ff",
            color: "white",
            icon:
              '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 20"><defs/><path d="M8.174 3.32H10V.14A23.66 23.66 0 007.34 0C4.709 0 2.906 1.656 2.906 4.7v2.8H0v3.555h2.905V20h3.56v-8.945h2.789L9.697 7.5H6.466V5.05c0-1.027.276-1.73 1.708-1.73z" fill-rule="evenodd"/></svg>'
          },
          {
            label: "Twitter",
            url: "",
            colorBg: "#0089ff",
            color: "white",
            icon:
              '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 16"><defs/><path d="M17.944 3.987c.013.175.013.35.013.526C17.957 9.85 13.833 16 6.294 16c-2.322 0-4.48-.662-6.294-1.813.33.038.647.05.99.05 1.916 0 3.68-.637 5.089-1.725-1.802-.037-3.313-1.2-3.833-2.8.254.038.508.063.774.063.368 0 .736-.05 1.079-.137-1.878-.376-3.287-2-3.287-3.963v-.05c.546.3 1.18.488 1.853.512A4.02 4.02 0 01.838 2.775c0-.75.203-1.438.558-2.038a11.71 11.71 0 008.452 4.225 4.493 4.493 0 01-.102-.924c0-2.226 1.828-4.038 4.1-4.038 1.18 0 2.245.487 2.994 1.275A8.145 8.145 0 0019.442.3a4.038 4.038 0 01-1.802 2.225A8.316 8.316 0 0020 1.9a8.74 8.74 0 01-2.056 2.087z" fill-rule="evenodd"/></svg>'
          }
        ]
      },
      {
        type: "iframe",
        label: "Copy Iframe Code",
        iframe: "&lt;iframe&gt;&lt;/iframe&gt;"
      }
    ],
  });
});
