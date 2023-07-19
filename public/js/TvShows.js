
function toggleLike(label, likeMessage, unlikeMessage, iconType) {
    var checkbox = label.querySelector('.like-checkbox');
    var icon = label.querySelector('.fa' + iconType);
    var likeCount = label.querySelector('.like-count');
    var count = parseInt(likeCount.textContent);

    if (checkbox.checked) {
      return; // If already liked, do nothing
    }

    icon.style.color = 'red'; // Change color to red
    checkbox.checked = true;
    count++;
    showNotification(likeMessage);

    likeCount.textContent = count;
    likeCount.classList.toggle('ng-hide', count === 0);
  }

  function toggleFollow(span) {
    var slider = span.previousElementSibling;
    var followText = span.textContent;

    if (slider.classList.contains('follow-active')) {
      slider.classList.remove('follow-active');
      span.textContent = 'Follow';
      showNotification('You unfollowed!');
    } else {
      slider.classList.add('follow-active');
      span.textContent = 'Following';
      showNotification('You followed!');
    }
  }

  function showNotification(message) {
    alert(message);
  }
  function showNotification(message) {
    Toastify({
      text: message,
      duration: 500, // Set the duration in milliseconds (3 seconds in this example)
      close: true, // Set to true to enable automatic close
      gravity: 'top', // Set the position to bottom
      position: 'center', // Set the position to right
      backgroundColor: 'linear-gradient(to right, #adb5bd, #fdfd)', // Set the background color using a gradient
      className: 'custom-toast', // Add a custom class to the toast for additional styling
    }).showToast();
  }