// Get references to the relevant elements
const selectAllCheckbox = document.getElementById("select-all-checkbox");
const filterCheckboxes = document.querySelectorAll(".filter-checkbox");
const bothRadio = document.querySelector('input[name="radio"][value="Both"]');

// Add event listeners to handle the behavior
bothRadio.addEventListener("change", () => {
  if (bothRadio.checked) {
    // If "Both" radio button is checked, enable the "Select all" checkbox
    selectAllCheckbox.disabled = false;
  } else {
    // If "Both" radio button is unchecked, disable and uncheck the "Select all" checkbox
    selectAllCheckbox.disabled = true;
    selectAllCheckbox.checked = false;
    // Also, uncheck all other checkboxes
    filterCheckboxes.forEach((checkbox) => {
      checkbox.checked = false;
    });
  }
});

selectAllCheckbox.addEventListener("change", () => {
  // When "Select all" checkbox is clicked
  // Select/deselect all checkboxes based on its state
  filterCheckboxes.forEach((checkbox) => {
    checkbox.checked = selectAllCheckbox.checked;
  });
});

// JavaScript Query for getting selected filter options
function getSelectedFilters() {
  const selectedFilters = [];
  filterCheckboxes.forEach((checkbox) => {
    if (checkbox.checked) {
      selectedFilters.push(checkbox.value);
    }
  });
  return selectedFilters;
}

// Example usage of the query
const applyButton = document.querySelector(".form-button.blue-button");
applyButton.addEventListener("click", () => {
  const selectedFilters = getSelectedFilters();
  // Do something with the selected filters, e.g., send to the server or apply on the client-side
  console.log(selectedFilters);
});