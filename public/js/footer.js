
const yearSpan =document.querySelector('#spanYear');
const currentYear = new Date();
yearSpan.innerText=currentYear.getFullYear();


function showSelectedPlan(radio) {
    var outputElement = document.getElementById("selectedValue");
    
    if (radio.value === "Basic") {
      outputElement.textContent = " Basic ₹365 per year";
    } else if (radio.value === "premiumMonthly") {
      outputElement.textContent = " Premium  ₹99 per month";
    } else if (radio.value === "PremiumYearly") {
      outputElement.textContent = " Premium  ₹499 per year";
    }
  }
  

var savebutton = document.getElementById('savebutton');
var readonly = true;
var inputs = document.querySelectorAll('input[type="text"]');
savebutton.addEventListener('click',function(){
    
     for (var i=0; i<inputs.length; i++) {
     inputs[i].toggleAttribute('readonly');
     };

    if (savebutton.innerHTML == "edit") {
      savebutton.innerHTML = "save";
         } else {
      savebutton.innerHTML = "edit";
      }



     
});

// JavaScript code
$(document).ready(function() {
  $(".date-input").on("change", function() {
      var selectedDate = $(this).val();
      if (selectedDate) {
          var picker = $(this).siblings(".picker");
          picker.on("DOMNodeInserted", function() {
              $(".picker-day").each(function() {
                  var dateValue = $(this).attr("data-day");
                  if (dateValue === selectedDate) {
                      $(this).css("background-color", "#ff0000"); // Change the background color as desired
                  }
              });
          });
      }
  });
});
