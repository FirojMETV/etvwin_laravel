
const inputField = document.querySelector('.required-input');
const errorMessage = document.querySelector('.error-message');

inputField.addEventListener('blur', function() {
    if (inputField.value.trim() === '') {
        errorMessage.style.display = 'block';
    } else {
        errorMessage.style.display = 'none';
    }
});


const tabs = document.querySelectorAll('.tab');
const tabContents = document.querySelectorAll('.content');

function changeTab(index) {
    // Hide all tab contents
    tabContents.forEach(content => {
        content.style.display = 'none';
    });

    // Remove the 'active' class from all tabs
    tabs.forEach(tab => {
        tab.classList.remove('active');
    });

    // Show the selected tab content
    tabContents[index].style.display = 'block';

    // Add the 'active' class to the selected tab
    tabs[index].classList.add('active');
}

// Add click event listeners to each tab
tabs.forEach((tab, index) => {
    tab.addEventListener('click', () => {
        changeTab(index);
    });
});





  const userProfile = document.getElementById('user-profile');
  const editProfile = document.getElementById('editprofile');
  const editButton = document.getElementById('edit-button');
  // Function to switch to edit profile view
  function switchToEditProfile() {
    userProfile.style.display = 'none';
    editProfile.style.display = 'block';
  }

  // Function to switch back to user profile view
  function switchToUserProfile() {
    userProfile.style.display = 'none';
    editProfile.style.display = 'block';
  }

  // Add event listeners
  editButton.addEventListener('click', switchToEditProfile);
  saveButton.addEventListener('click', switchToUserProfile);


