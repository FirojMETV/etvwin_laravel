$(document).ready(function(){
    $('#Watchlater').owlCarousel({
        loop: true,
        lazyLoad: true,
        mouseDrag: true,
        touchDrag: true,
        nav: true,
        dots:false,
        margin:10,
        // navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        responsive: {
          0: {
            items: 2
          },
          768: {
            items: 4
          },
          1024: {
            items: 6
          }
        }
      });
})