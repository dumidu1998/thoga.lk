<html>
<head>
<meta name="viewport">
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="font-awesome.min.css" rel="stylesheet">	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div>
<div class="topnav" id="myTopnav">
  <a href="index.php" class="navlogo"><img  width=100px src="../imgs/logo/logo thoga.png" alt="" class = "logo"></a>
  <a href="index.php" class="active">Home</a>
  <a href="news.php">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <div class = "nav-right">
    <a href="#About us">About us</a>

    <a href="Buyer_user_profile.php"><img src="b.png" alt="" class = "user_pic" width=50px></a>
    

  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
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
// function myFunction() {
//   var x = document.getElementById("nav-right");
//   if (x.className === "nav-right") {
//     x.className += " responsive";
//   } else {
//     x.className = "nav-right";
//   }
// }
</script>

</body>
</html>

