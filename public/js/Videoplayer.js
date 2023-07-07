 <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

 document.addEventListener('DOMContentLoaded', function() {
     const player = new Plyr('#video-player', {
       controls: ['play', 'progress', 'current-time', 'mute', 'volume','nodownload'],       hideDownloadButton: true, // Hide the download button
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



