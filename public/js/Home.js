

$(document).ready(function() {
  $('#main-page').owlCarousel({
    items:1,
    loop: false, // Enable loop
    lazyLoad: true, // Enable lazy loading
    mouseDrag: true, // Disable mouse drag
    touchDrag: true, // Enable touch drag
    nav: true, // Show navigation buttons
    stagePadding:50,
    margin: 10,
    autoWidth:true,
    autoplayHoverPause: false,
    center:true,
    // navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'], // Customize navigation icons
    responsive: {
      0: {
        items: 1 // Number of items to show on different screen sizes
      },
      768: {
        items: 1
      },
      1024: {
        items: 1
      }
    }
  });

  $('#another-carousel').owlCarousel({
    loop: true,
    lazyLoad: true,
    mouseDrag: true,
    touchDrag: true,
    nav: true,
    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    responsive: {
      0: {
        items: 2
      },
      768: {
        items: 2
      },
      1024: {
        items: 2
      }
    }
  });
  $('#Before-TV').owlCarousel({
    loop:true,
    lazyLoad:true,
    mouseDrag:true,
    nav:false,
    dots:false,
    navText:['<>','</>'],
    responsive:{
        0:{
            items:2
        },
        668:{
            items:6
        },
        1024:{
            items:6
        }
    }
  })
  $('#Live-TV').owlCarousel({
    loop:false,
    lazyLoad:true,
    dots:false,
    items:7,
    responsive:{
        0:{
            items:3
        },
        668:{
            items:7
        },
        1024:{
            items:7
        }
    }
  })
});

