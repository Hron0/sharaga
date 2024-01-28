// @ts-nocheck
window.onload = function () {
  console.log("I HATE NIGGERS")

  //Checkboxes part
  var resetBtn = document.getElementById('no_fltr');
  var form = document.getElementById('products_form');

  document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
    checkbox.addEventListener('change', function () {
      document.querySelectorAll('input[type="checkbox"]').forEach(otherCheckbox => {
        if (otherCheckbox !== checkbox) {
          otherCheckbox.checked = false;
        }
      });
    });
  });
  //END: Checkboxes part


  //Reset Availability-filter
  const outStockCheckbox = document.getElementById('out_stock')
  const inStockCheckbox = document.getElementById('in_stock')

  function resetFilters() {
    outStockCheckbox.checked = false
    inStockCheckbox.checked = false

    form.submit()
  }

  resetBtn.addEventListener('click', resetFilters);
}