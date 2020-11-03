
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/thoga.lk/public/stylesheets/Farmer/pricenavbar.css">
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="#home" class="navlogo"><img width=100px src="/thoga.lk/public/images/Farmer/logo1.png" alt="" class = "logo"></a>
  <a href="#home" class="active">Vegetables</a>
  <a href="#news">Price List</a>
  <a href="#contact">Forum</a>
 
  <div class = "nav-right">
    <a href="#logout">Login</a>
     

    <img src="/thoga.lk/public/images/Farmer/bell.jpg" alt="" class = "user_pic" width=50px>
    <img src="/thoga.lk/public/images/Farmer/profile.png" alt="" class = "user_pic" width=50px>

 


  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>