//@ts-nocheck
document.addEventListener('DOMContentLoaded', function() {
    console.log("Filter script connected")
    var form = document.getElementById('products_form');
    var availabilityCheckbox = document.getElementById('in_stock');
    var outOfStockCheckbox = document.getElementById('out_stock');
    var minPriceInput = document.getElementById('min_price');
    var maxPriceInput = document.getElementById('max_price');
    //var sortBySelect = document.getElementById('SortBy');
    var formSubmitTimeout = null; // Variable to hold the current form submission timeout
    var delay = 2000; // Delay in milliseconds (e.g., 0.5 seconds)

    // Function to handle form submission with a delay
    function submitFormWithDelay() {
        if (formSubmitTimeout) {
            clearTimeout(formSubmitTimeout); // Clear any existing submission timeout
        }
        formSubmitTimeout = setTimeout(function() {
            form.submit();
        }, delay);
    }

    // Add event listeners for value changes and submit the form with a delay
    availabilityCheckbox.addEventListener('change', submitFormWithDelay);
    outOfStockCheckbox.addEventListener('change', submitFormWithDelay);
    minPriceInput.addEventListener('input', submitFormWithDelay);
    maxPriceInput.addEventListener('input', submitFormWithDelay);
});
