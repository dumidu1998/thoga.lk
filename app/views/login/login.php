<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/buyer/style.css">
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/login/login.css">

    <title>Log in</title>
</head>
<body>

<ul>
  <li><a href="#home"><img width="100px" src="/thoga.lk/public/images/buyer/logo/logo thoga.png" alt=""></a></li>
  <li><a href="#contact">Contact Us</a></li>
  <li style="float:right"><a class="active" href="#login" id="login">Login</a></li>
  <li style="float:right"><a class="active" href="buyer/home">Continue as guest</a></li>

</ul>

<!-- <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="/thoga.lk/public/images/login/a.jpg" style="width:100%">
  <div class="text"> 
    <img width="25%" src="/thoga.lk/public/images/buyer/logo/logo thoga.png" alt="">
   <h1>Online Market place for every farmer and buyer</h1> 
   <br>
   <h4>Sign up here and start trading</h4>
   <div class="login_logos">
    <img width="10%" src="/thoga.lk/public/images/buyer/logo/logo thoga.png" alt="">
    <img width="10%" src="/thoga.lk/public/images/buyer/logo/farmer logo.png" alt="">
    <img width="10%" src="/thoga.lk/public/images/buyer/logo/driver.png" alt="">
   </div>

  </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="/thoga.lk/public/images/login/b.jpg" style="width:100%">
  <div class="text">
  <img width="25%" src="/thoga.lk/public/images/buyer/logo/logo thoga.png" alt="">
   <h1>Online Market place for every farmer and buyer</h1> 
   <br>
   <h4>Sign up here and start trading</h4>
   <div class="login_logos">
    <img width="10%" src="/thoga.lk/public/images/buyer/logo/logo thoga.png" alt="">
    <img width="10%" src="/thoga.lk/public/images/buyer/logo/farmer logo.png" alt="">
    <img width="10%" src="/thoga.lk/public/images/buyer/logo/driver.png" alt="">
   </div>
  </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="/thoga.lk/public/images/login/c.jpg" style="width:100%">
  <div class="text">
  <img width="25%" src="/thoga.lk/public/images/buyer/logo/logo thoga.png" alt="">
   <h1>Online Market place for every farmer and buyer</h1> 
   <br>
   <h4>Sign up here and start trading</h4>
   <div class="login_logos">
    <img width="10%" src="/thoga.lk/public/images/buyer/logo/logo thoga.png" alt="">
    <img width="10%" src="/thoga.lk/public/images/buyer/logo/farmer logo.png" alt="">
    <img width="10%" src="/thoga.lk/public/images/buyer/logo/driver.png" alt="">
   </div>
  </div>
</div>

</div> -->
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<?php include("loginForm.php"); ?>
    
</body>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<script>
var btn = document.getElementById("login");
var modal = document.getElementById("modal");
var span = document.getElementsByClassName("close")[0];


btn.onclick = function(){
    modal.style.display = "block";

}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</html>