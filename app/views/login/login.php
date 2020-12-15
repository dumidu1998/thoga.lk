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
  <li><a href="#"><img width="100px" src="/thoga.lk/public/images/buyer/logo/logo thoga.png" alt=""></a></li>
  <li><a href="about_us">Contact Us</a></li>
  <li style="float:right"><a class="active" href="#login" id="login">Login</a></li>
  <li style="float:right"><a class="active" href="/thoga.lk/buyer/home">Continue as guest</a></li>

</ul>

<img src="/thoga.lk/public/images/login/d.jpg" style="width:100%">
<div class="text"> 
    <img width="25%" src="/thoga.lk/public/images/buyer/logo/logo thoga.png" alt="">
    <h1>Freshness, Delivered!!</h1> 
   <h3>Find the best quality and deals with us, new in<br> Cyber Market </h3>
   <h4>Sign up here and start trading</h4>
   <div class="login_logos" id="click">
    <img width="10%" src="/thoga.lk/public/images/buyer/logo/logo thoga.png" alt="">
    <img width="10%" src="/thoga.lk/public/images/buyer/logo/farmer logo.png" alt="">
    <img width="10%" src="/thoga.lk/public/images/buyer/logo/driver.png" alt="">
   </div>

  </div>


<?php 
  session_start();
  if(isset($_SESSION['signupstatus'])){
    $status=$_SESSION['signupstatus'];
    if($status==3){include ('sucess.php');
    }elseif($status==4){include('sucess-SMS.php');
    }else{include('failed.php');}
    unset($_SESSION['signupstatus']);
  }
  if(isset($_SESSION['loginerror'])){
    if($_SESSION['loginerror']==1){
      include('failed-login.php');
    }
    unset($_SESSION['loginerror']);
  }

?>
</div>
<br>


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
var click= document.getElementById("click");
var click1= document.getElementById("click1");
var click2= document.getElementById("click2");



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

click.onclick= function(event){
  window.location.href = 'signup';
}
click1.onclick= function(event){
  window.location.href = 'signup';
}
click2.onclick= function(event){
  window.location.href = 'signup';
}

</script>
</html>