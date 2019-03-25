// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};
let timelineBar = document.querySelector(".timeline__bar");

function myFunction() {
  let winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.height = scrolled + "%";
} 
