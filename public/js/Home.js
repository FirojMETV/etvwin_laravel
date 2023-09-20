

function startTimer() {
  setTimeout(function() {
    owlCarousel.addClass("hide-navigation");
  }, 3000); // Adjust this value to match the autoplayTimeout value
};

$(document).ready(function() {
  $('#main-page').owlCarousel({
    items:1,
    loop: false, // Enable loop
    lazyLoad: true, // Enable lazy loading
    mouseDrag: true, // Disable mouse drag
    touchDrag: true, // Enable touch drag
    nav: true, // Show navigation buttons
    stagePadding:80,
    margin: 10,
    autoWidth:false,
    autoplayHoverPause: false,
    center:true,
    autoplay:true,
    center: true,
    // dotsData:["<button>&#65439;</button>"],
    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'], // Customize navigation icons
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

  $('#continue_watching').owlCarousel({
    loop:false,
    lazyLoad:true,
    mouseDrag:true,
    nav:true,
    dots:false,
    responsive:{
      0:{
          items:2
      },
      668:{
          items:2
      },
      1024:{
          items:7
      }
  }
  });
  $('#another-carousel').owlCarousel({
    loop: false,
    lazyLoad: true,
    mouseDrag: true,
    touchDrag: true,
    nav: true,
    dots:false,
    // navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
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
    loop:false,
    lazyLoad:true,
    mouseDrag:true,
    nav:true,
    dots:false,
   
    // navText:['<>','</>'],
    responsive:{
        0:{
            items:2
        },
        668:{
            items:6.5
        },
        1024:{
            items:6.5
        }
    }
  });
  $('#Live-TV').owlCarousel({
    loop:false,
    lazyLoad:true,
    dots:false,
    items:7,
   
    nav:false,
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
  });
  $('#TV-shows-carousel').owlCarousel({
    loop:false,
    lazyLoad:true,
    dots:false,
    items:1,
    nav:true,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        668:{
            items:1
        },
        1024:{
            items:1
        }
    }
  });
  $('#Trending-carousel').owlCarousel({
    loop:false,
    lazyLoad:true,
    dots:false,
    items:8,
    nav:true,
    responsive:{
      0:{
          items:3
      },
      668:{
          items:3
      },
      1024:{
          items:8
      }
  }
  });
  $('#Recommended-for-you').owlCarousel({
    loop:false,
    lazyLoad:true,
    dots:false,
    nav:true,
    responsive:{
      0:{
          items:2
      },
      668:{
          items:2
      },
      1024:{
          items:7
      }
  }
  });
  $('#Top-Movies-carousel').owlCarousel({
    loop:false,
    lazyLoad:true,
    dots:false,
    nav:true,
    responsive:{
      0:{
          items:3
      },
      668:{
          items:3
      },
      1024:{
          items:7
      }
  }
  });
  $('#Family').owlCarousel({
    loop:false,
    lazyLoad:true,
    dots:false,
    nav:true,
    responsive:{
      0:{
          items:3
      },
      668:{
          items:3
      },
      1024:{
          items:7
      }
  }
  });
  $('#Comedy').owlCarousel({
    loop:false,
    lazyLoad:true,
    dots:false,
    nav:true,
    responsive:{
      0:{
          items:3
      },
      668:{
          items:3
      },
      1024:{
          items:7
      }
  }
  });
  $("#Romance").owlCarousel({
    loop:false,
    lazyLoad:true,
    dots:false,
    nav:true,
    responsive:{
      0:{
          items:3
      },
      668:{
          items:3
      },
      1024:{
          items:7
      }
  }
  });
$("#Classic").owlCarousel({
  loop:false,
  lazyLoad:true,
  dots:false,
  nav:true,
  responsive:{
    0:{
        items:3
    },
    668:{
        items:3
    },
    1024:{
        items:7
    }
}
});
$("#Folklore").owlCarousel({
  loop:false,
  lazyLoad:true,
  dots:false,
  nav:true,
  responsive:{
    0:{
        items:3
    },
    668:{
        items:3
    },
    1024:{
        items:7
    }
}
});

$("#Action-thriller").owlCarousel({
  loop:false,
  lazyLoad:true,
  dots:false,
  nav:true,
  responsive:{
    0:{
        items:3
    },
    668:{
        items:3
    },
    1024:{
        items:7
    }
}
});

$("#Latest-News").owlCarousel({
  loop:false,
  lazyLoad:true,
  dots:false,
  nav:true,
  responsive:{
    0:{
        items:2
    },
    668:{
        items:2
    },
    1024:{
        items:7
    }
}
});
$("#Food").owlCarousel({
  loop:false,
  lazyLoad:true,
  dots:false,
  nav:true,
  responsive:{
    0:{
        items:2
    },
    668:{
        items:2
    },
    1024:{
        items:7
    }
}
});
$("#Health-FitNess").owlCarousel({
  loop:false,
  lazyLoad:true,
  dots:false,
  nav:true,
  responsive:{
    0:{
        items:2
    },
    668:{
        items:2
    },
    1024:{
        items:7
    }
}
});
});

