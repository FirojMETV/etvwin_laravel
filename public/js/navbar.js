/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function openNav() {
  document.getElementById("mySidenav").style.display = "block";
  document.getElementById("mySidenav").style.width = "270px";
 
  document.getElementById('mydownload').style.display='block';
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";

  document.getElementById("mySidenav").style.display = "none";
  document.getElementById('mydownload').style.display='none';
}
 
// search icon 
function openSearch(){
  document.getElementById("myOverlay").style.display="block";
}
function closeSearch(){
  document.getElementById('myOverlay').style.display='none';
}

