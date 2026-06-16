// Toggle class active
const NavbarNav = document.querySelector(".navbar-nav");
// hamburger di klik ye bbi
document.querySelector("#hamburger-menu").onclick = () => {
  NavbarNav.classList.toggle("active");
};

// klik mana aj biar keluar hehwehwe
const hamburger = document.querySelector("#hamburger-menu");

document.addEventListener("click", function (e) {
  if (!hamburger.contains(e.target) && !NavbarNav.contains(e.target)) {
    NavbarNav.classList.remove("active");
  }
});

//Percobaan membuat show more
function myFunction(){
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "...Read more";
    moreText.style.display = "none";
  }
  else{
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
function myFunction1(){
  var dots = document.getElementById("dots1");
  var moreText = document.getElementById("more1");
  var btnText = document.getElementById("myBtn1");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "...Read more";
    moreText.style.display = "none";
  }
  else{
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
function myFunction2(){
  var dots = document.getElementById("dots2");
  var moreText = document.getElementById("more2");
  var btnText = document.getElementById("myBtn2");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "...Read more";
    moreText.style.display = "none";
  }
  else{
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
function myFunction3(){
  var dots = document.getElementById("dots3");
  var moreText = document.getElementById("more3");
  var btnText = document.getElementById("myBtn3");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "...Read more";
    moreText.style.display = "none";
  }
  else{
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
function myFunction4(){
  var dots = document.getElementById("dots4");
  var moreText = document.getElementById("more4");
  var btnText = document.getElementById("myBtn4");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "...Read more";
    moreText.style.display = "none";
  }
  else{
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
function myFunction5(){
  var dots = document.getElementById("dots5");
  var moreText = document.getElementById("more5");
  var btnText = document.getElementById("myBtn5");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "...Read more";
    moreText.style.display = "none";
  }
  else{
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
function myFunction6(){
  var dots = document.getElementById("dots6");
  var moreText = document.getElementById("more6");
  var btnText = document.getElementById("myBtn6");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "...Read more";
    moreText.style.display = "none";
  }
  else{
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
function myFunction7(){
  var dots = document.getElementById("dots7");
  var moreText = document.getElementById("more7");
  var btnText = document.getElementById("myBtn7");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "...Read more";
    moreText.style.display = "none";
  }
  else{
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
//Membuat slide show otomatis
var slideIndex = 1;
showSlide(slideIndex);

function nextslide(n){
showSlide(slideIndex += n);
}
function dotslide(n){
showSlide(slideIndex = n);
}
function showSlide(n) {
var i;
var slides = document.getElementsByClassName("imgslide");
var dot = document.getElementsByClassName("dot");

if (n > slides.length) {
    slideIndex = 1
}
if (n < 1) {
    slideIndex = slides.length;
}
for (i = 0; i < slides.length; i++) {
    
    slides[i].style.display = "none";
}

for (i = 0; i < slides.length; i++) { 
    dot[i].className = dot[i].className.replace(" active", "");
}
slides[slideIndex - 1].style.display = "block";
dot[slideIndex - 1].className += " active";    
}