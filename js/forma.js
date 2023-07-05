const menuToggle = document.querySelector('.menu-toggle');
const menu = document.querySelector('.menu');

menuToggle.addEventListener('click', () => {
  menu.classList.toggle('show-menu');
});
var noInnCheckbox = document.getElementById('no_inn');
  var passportBlock = document.getElementById('passport_block');
  noInnCheckbox.addEventListener('change', function() {
    if (this.checked) {
      passportBlock.style.display = 'block';
      document.getElementById('inn').disabled = true;
    } else {
      passportBlock.style.display = 'none';
      document.getElementById('inn').disabled = false;
    }
  });
function toggleInn() {
    var innField = document.getElementById("inn");
    var passportField = document.getElementById("passport");
    var noInnCheckbox = document.getElementById("no_inn");
    
    if (noInnCheckbox.checked) {
      innField.style.display = "none";
      passportField.style.display = "block";
    } else {
      innField.style.display = "block";
      passportField.style.display = "none";
    }
  }