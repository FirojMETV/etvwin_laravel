 <!-- Include the Font Awesome CSS if not already included -->

 <link rel="stylesheet" href="{{ URL::asset('css/owl.css') }}" />
<!-- Include the LazyLoad plugin script -->
<script src="{{URL::asset('js/jquery.min.js')}}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript" src="{{ URL::asset('js/owl.carousel.js') }}"></script>

<link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
</head>
    <div class="owl-carousel owl-theme">
            <div class="item"><h4>1</h4></div>
            <div class="item"><h4>2</h4></div>
            <div class="item"><h4>3</h4></div>
            <div class="item"><h4>4</h4></div>
            <div class="item"><h4>5</h4></div>
            <div class="item"><h4>6</h4></div>
            <div class="item"><h4>7</h4></div>
            <div class="item"><h4>8</h4></div>
            <div class="item"><h4>9</h4></div>
            <div class="item"><h4>10</h4></div>
            <div class="item"><h4>11</h4></div>
            <div class="item"><h4>12</h4></div>
            {{-- <img class="owl-lazy" data-src="{{ asset('image/tst.jpg' ) }}" alt="Slide Image">
            <img class="owl-lazy" data-src="{{ asset('image/tst.jpg') }}" alt="Slide Image">
          <img class="owl-lazy" data-src="{{ asset('image/tst.jpg') }}" alt="Slide Image"> --}}      
     </div> 


<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel(
       
        );
    });
</script>
<script src="{{URL:: asset('js/owl.carousel.min.js') }}"></script>  
