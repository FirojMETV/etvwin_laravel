
$(document).ready(function(){
$('#Musical_Hits').owlCarousel({
    loop:false,
    lazyLoad:true,
    dots:false,
    items:8,
    nav:false,
    margin:10,
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
});