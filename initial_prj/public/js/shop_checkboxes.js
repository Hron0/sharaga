// @ts-nocheck
window.onload = function () {
  console.log("I HATE NIGGERS")
  // Get references to the checkboxes
  var inStockCheckbox = document.getElementById('in_stock');
  var outStockCheckbox = document.getElementById('out_stock');
  var resetBtn = document.getElementById('no_fltr');
  var form = document.getElementById('products_form');

  // Function to handle the checkbox click event
  function toggleFirst() {
    if (inStockCheckbox.checked && outStockCheckbox.checked) {
      outStockCheckbox.checked = false
    }
  }

  function toggleSecond() {
    if (inStockCheckbox.checked && outStockCheckbox.checked) {
      inStockCheckbox.checked = false
    }
  }

  function resetFilters() {
    outStockCheckbox.checked = false
    inStockCheckbox.checked = false

    console.log("BLACKKCCKASDA")

    form.submit()
  }

  // Attach the event listener to both checkboxes
  inStockCheckbox.addEventListener('change', toggleFirst);
  outStockCheckbox.addEventListener('change', toggleSecond);
  resetBtn.addEventListener('click', resetFilters);

  console.log("Slider connected")
  const slider = document.getElementById('default-range')

  const fncSlider = () => {
    console.log(slider.value)
  }

  slider.addEventListener('change', fncSlider)
}


/* // Make sure the DOM is fully loaded before running the script
document.addEventListener('DOMContentLoaded', addToggleFunctionality); */