document.addEventListener('DOMContentLoaded', function() {
    const player = new Plyr('#video-player', {
      controls: ['play', 'progress', 'current-time', 'mute', 'volume','nodownload'],
      hideDownloadButton: true, // Hide the download button
      controlsList:"nodownload" ,
      
    });
  });
  