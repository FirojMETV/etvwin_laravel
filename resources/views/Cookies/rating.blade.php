
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/rating.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   
<div class="overlay"></div> <!-- Add the overlay div -->

<div>
    <button id="openFormButton">Rating</button>
</div>

<div id="ratingContainer" class='rating'>
    <div id="ratingStars">
        <span class="ratingStar" data-rating="1">&#9733;</span>
        <span class="ratingStar" data-rating="2">&#9733;</span>
        <span class="ratingStar" data-rating="3">&#9733;</span>
        <span class="ratingStar" data-rating="4">&#9733;</span>
        <span class="ratingStar" data-rating="5">&#9733;</span>
    </div>
    <button id="submitRating" class="form-button full-width-button">RATE</button>
</div>
<script src="{{asset('js/rating.js')}}"></script>



