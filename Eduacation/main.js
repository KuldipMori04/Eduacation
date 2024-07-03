let hamMenuIcon = document.getElementById("ham-menu");
let navBar = document.getElementById("nav-bar");
let navLinks = navBar.querySelectorAll("li");

hamMenuIcon.addEventListener("click", () => {
  navBar.classList.toggle("active");
  hamMenuIcon.classList.toggle("fa-times");
});
navLinks.forEach((navLinks) => {
  navLinks.addEventListener("click", () => {
    navBar.classList.remove("active");
    hamMenuIcon.classList.toggle("fa-times");
  });
});



// ==popUp===
var Preloder = document.getElementById('loading');
function myFunction() {
  Preloder.style.display = 'none';
};

$(document).ready(function () {
  setTimeout(function () {
    $('#popUpMain').css('display', 'block');
  }, 5000);
});

$('.submit').click(function () {
  $('#popUpMain').css('display', 'none');
});