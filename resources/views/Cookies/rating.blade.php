<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('css/rating.css')}}">

<div class="overlay"></div> <!-- Add the overlay div -->

<div>
    <button id="openFormButton">rating </button>
</div>
<div class="rating" >
        <input type="radio" name="rating1" id="rating1">
        <label for="rating1" class="fa fa-star"></label>
        <input type="radio" name="rating2" id="rating2">
        <label for="rating3" class="fa fa-star"></label>
        <input type="radio" name="rating3" id="rating3">
        <label for="rating3" class="fa fa-star"></label>
        <input type="radio" name="rating4" id="rating4">
        <label for="rating4" class="fa fa-star"></label>
        <input type="radio" name="rating5" id="rating5">
        <label for="rating5" class="fa fa-star"></label>

        <div class="rate-button">
            <button  class="form-button full-width-button">RATE</button>
        </div>
</div>


<script>

$(document).ready(function() {
    $('#openFormButton').click(function() {
        $('.rating').toggleClass('show');
        $('.overlay').toggleClass('show'); 
    });
});

</script>