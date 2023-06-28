// public/js/home.js

$(document).ready(function() {
    $('.owl-carousel').owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        nav: true,
        navText: [
            '<i class="fas fa-chevron-left"></i>',
            '<i class="fas fa-chevron-right"></i>'
        ],
        dots: true,
        lazyLoad: true, // Enable lazy loading
        responsive: {
            0: {
                mouseDrag: true,
                touchDrag: true
            }
        }
    });
});
