<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="profilenavbar.css">
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="#home" class="navlogo"><img width=70px src="final driver.png" alt="" class = "logo"></a>
  <a href="driverdashboard.php">Dashboard</a>
  <a href="drivercalendar.php"" class="active">Calendar</a>
  <a href="#contact">Forum</a>
  
  <div class = "nav-right">
    <a href="">Logout</a>
    
    
    <a href="driveruserprofile.php"><img src="bell.jpg" alt="" class = "bell_pic" width=25px>
    <a href="driveruserprofile.php"><img src="profile.png" alt="" class = "index_pic" width=25px>
    
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