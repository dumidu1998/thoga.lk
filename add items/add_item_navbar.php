<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="add_itemstyle.css">
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="#home" class="navlogo"><img width=100px src="logo.png" alt="" class = "logo"></a>
  <a href="#home" class="active">Dashboard</a>
  <a href="#news">Price List</a>
  <a href="#contact">Forum</a>
  
  <div class = "nav-right">
    <a href="">Logout</a>

    <img src="bell.jpg" alt="" class = "bell_pic" width=45px>
    <img src="profile.png" alt="" class = "index_pic" width=45px>
    

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

