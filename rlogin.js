// JQuery begins ...
$(document).ready(function() {

  // Get the popup
  var popup = document.getElementById('rpopup');

  // On click of initial login button
  $('#loginbtn').on("click", function() {
    popup.style.display = 'block';
  });

  // When the user clicks anywhere outside of the popup, close it
  window.onclick = function(event) {
    if (event.target == popup) {
      popup.style.display = "none";
    }
  }
});
