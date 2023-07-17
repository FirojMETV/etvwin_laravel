$(document).ready(function() {
    $('#openFormButton').click(function() {
        $('.rating').toggleClass('show'); // Toggle the "show" class to display/hide the feedback form
        $('.overlay').toggleClass('show'); // Toggle the "show" class to display/hide the overlay
    });
});
// Get the rating stars and submit button elements

const stars = document.querySelectorAll(".ratingStar");

stars.forEach(star => {
  star.addEventListener('click', () => {
      const rating = parseInt(star.dataset.rating);
      updateActiveRating(rating);
  });
});

function updateActiveRating(rating) {
  stars.forEach(star => {
      const starRating = parseInt(star.dataset.rating);
      if (starRating <= rating) {
          star.classList.add('active');
      } else {
          star.classList.remove('active');
      }
  });
}
