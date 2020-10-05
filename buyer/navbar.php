<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">

<link href="font-awesome.min.css" rel="stylesheet">	
<link href="animate.min.css" rel="stylesheet">
</head>
<body>
<div>
<div class="topnav" id="myTopnav">
  <a href="#home" class="navlogo"><img src="" alt="" class = "logo">Thoga.lk</a>
  <a href="#home" class="active">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <div class = "nav-right">
    <a href="#About us">About us</a>

    <img src="b.png" alt="" class = "user_pic" width=50px>
    

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
</script>

</body>
</html>

