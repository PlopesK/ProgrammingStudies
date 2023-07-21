/* Scroll */
var body=document.getElementsByTagName("body")[0];
var parent=document.getElementById("before");
var child=document.getElementById("after");

body.onscroll = function(){
if(document.documentElement.scrollTop>=child.offsetTop)
{
    child.style.display="block"
}

};

function reveal() {
    var reveals = document.querySelectorAll(".reveal");
  
    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 150;
  
      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
      } else {
        reveals[i].classList.remove("active");
      }
    }
  }
  
  window.addEventListener("scroll", reveal);

  /* Click */
  var menu = document.querySelectorAll('.title');
  menu[0].addEventListener('click',()=> {
    alert('clicked :D');
  })
  