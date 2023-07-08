
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
  
