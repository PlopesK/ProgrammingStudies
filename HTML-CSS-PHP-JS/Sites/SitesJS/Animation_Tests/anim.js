/* Click */
$(document).ready(function () {
  let menu = document.querySelectorAll(".title");
  $(menu[0]).on("click", function (event) {
    alert("clicked :D");
  });
});

/* Scroll */
const body = document.getElementsByTagName("body")[0];
const parent = document.getElementById("before");
const child = document.getElementById("after");

function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    }
  }
}

window.addEventListener("scroll", reveal);
