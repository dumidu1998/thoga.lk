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
  <li style="float:right"><a class="active" href="#about" id="login">Login</a></li>
  <li style="float:right"><a class="active" href="#about">Continue as guest</a></li>

</ul>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="/thoga.lk/public/images/login/a.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="/thoga.lk/public/images/login/b.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="/thoga.lk/public/images/login/c.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>





    <div id="modal" class="container login">
    <span class="close">&times;</span>

        <center>
            <img width=300px src="/thoga.lk/public/images/buyer/logo/farmer logo.png" alt="">

        </center>
       <h3>Log In</h3>
       <p align=center>Sign in Thoga.lk or create new account</p>
       
            
       

        <form action="">
            <div class = "login-input">
                <input type="email" class="login-input-control" id="exampleInputEmail1" placeholder="Email address/Username">
            </div>

            <div class="login-input">
                <input type="password" class="login-input-control" id="exampleInputPassword1" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary btn_login">Log in</button>

            <div class = "signup_text">
                Do not have an account ? <a href="signup.php">Sign Up</a>

            </div>

        </form>

    </div>

    
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