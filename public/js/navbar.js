// const { auto } = require("@popperjs/core");

/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function openNav() {
  document.getElementById("mySidenav").style.display = "block";
   document.getElementById("mySidenav").style.width = auto;
  document.getElementById("mySidenav").style.minWidth='270px';
  document.getElementById('mySidenav').style.maxWidth='800px';
  document.getElementById('mydownload').style.display = 'block';
  // document.getElementById('mydownload').style.width=auto;
}



/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";

  document.getElementById("mySidenav").style.display = "none";
  document.getElementById('mydownload').style.display = 'none';
}
var navBar = document.getElementById('mySidenav');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == navBar) {
    navBar.style.display = "none";
  }
}



// search icon 
function openSearch() {
  document.getElementById("myOverlay").style.display = "block";
}
function closeSearch() {
  document.getElementById('myOverlay').style.display = 'none';
}



// sign in open close
function openSignIN() {
  document.getElementById("SignIN").style.display = "block";
}
function SigninClose(){
 document.getElementById('SignIN').style.display='none'
}
var SignIn = document.getElementById('SignIN');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == SignIn) {
    SignIn.style.display = "none";
  }
}

function toggleUserData() {
  var userDataMenu = document.getElementById("usermenu");
  if (userDataMenu.style.display === "none") {
      userDataMenu.style.display = "block";
  } else {
      userDataMenu.style.display = "none";
  }
}
// sign up or registration form popup page 
function SignUPopen(){
  document.getElementById('SignUPForm').style.display='block';
}
function CloseSignUP(){
  document.getElementById('SignUPForm').style.display='none';
}
var SignUP = document.getElementById('SignUPForm');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == SignUP ) {
    SignUP.style.display = "none";
  }
}




// check password or confirm password
function checkpassword() {
  const password = document.getElementById('password').value;
  const confirmpassword = document.getElementById('confirm-password').value;
  console.log(password, confirmpassword)
  var messsage = document.getElementById('message');
  if (password.length != 0) {
    if (password == confirmpassword) {
      messsage.textContent = 'password match';
      messsage.style.color="#6854"
    } else {
      messsage.textContent = "password don't match";
      messsage.style.color="#ff55"
    }
  }else{
    alert('password can not be empty');
    messsage.textContent="";
  }
}
$(document).ready(function() {
  $('#openFormButton').click(function() {
      $('.rating').toggleClass('show');
      $('.overlay').toggleClass('show');
  });
});