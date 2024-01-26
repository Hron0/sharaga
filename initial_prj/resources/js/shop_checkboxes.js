window.onload = function() {
    // Get references to the checkboxes
    var checkbox1 = document.getElementById('checkbox1');
    var checkbox2 = document.getElementById('checkbox2');
  
    // Attach a click event listener to each checkbox
    checkbox1.addEventListener('click', function() {
      // When checkbox1 is clicked, uncheck checkbox2
      checkbox2.checked = false;
    });
  
    checkbox2.addEventListener('click', function() {
      // When checkbox2 is clicked, uncheck checkbox1
      checkbox1.checked = false;
    });
  };