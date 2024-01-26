// @ts-nocheck
window.onload = function() {
  console.log("I HATE NIGGERS")
    // Get references to the checkboxes
    var inStockCheckbox = document.getElementById('in_stock');
    var outStockCheckbox = document.getElementById('out_stock');

    // Function to handle the checkbox click event
    function toggleFirst() {
      if(inStockCheckbox.checked && outStockCheckbox.checked) {
        outStockCheckbox.checked = false
      }
    }

    function toggleSecond() {
      if(inStockCheckbox.checked && outStockCheckbox.checked) {
        inStockCheckbox.checked = false
      }
    }

    // Attach the event listener to both checkboxes
    inStockCheckbox.addEventListener('change', toggleFirst);
    outStockCheckbox.addEventListener('change', toggleSecond);
}


/* // Make sure the DOM is fully loaded before running the script
document.addEventListener('DOMContentLoaded', addToggleFunctionality); */