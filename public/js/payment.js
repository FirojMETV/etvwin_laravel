const promoCodeDiv = document.getElementById("promoCodeDiv");
const promoCodeInput = document.getElementById("promoCodeInput");
const applyLink = document.getElementById("applyLink");
const errorMsg = document.querySelector(".error-msg");
let promoCodeApplied = false;
applyLink.addEventListener("click", function(event) {
  event.preventDefault();
  const promoCodeValue = promoCodeInput.value.trim();

  if (promoCodeValue === "") {
    errorMsg.textContent = "Please enter a promo code.";
    errorMsg.style.display = "block";
  } else {
    // Here you can add your own logic to validate the promo code, e.g., check against a database, etc.
    // For this example, we'll use a hardcoded promo code "DISCOUNT20".
    const validPromoCode = "DISCOUNT20";
    if (promoCodeValue === validPromoCode && !promoCodeApplied) {
      // Apply the promo code and trigger appropriate actions.
      errorMsg.textContent = "Promo code applied successfully. You got 20% discount!";
      errorMsg.style.color = "green"; // Change the error message color to green for success.
      errorMsg.style.display = "block";

      // Set the flag to true to indicate the promo code has been applied.
      promoCodeApplied = true;
    } else {
      if (promoCodeApplied) {
        // If promo code has already been applied, show promo expired message.
        errorMsg.textContent = "Promo code has already been used. It has expired.";
      } else {
        // Invalid promo code.
        errorMsg.textContent = "Invalid promo code.";
      }
      errorMsg.style.color = "#eb0808"; // Reset the error message color to red for failure.
      errorMsg.style.display = "block";
    }
  }

  // Hide the error message after 3 seconds (3000 milliseconds)
  setTimeout(function() {
    errorMsg.style.display = "none";
  }, 13000);
});