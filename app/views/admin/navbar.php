<html>
<head>
<meta name="viewport">
<link rel="stylesheet" href="/thoga.lk/public/stylesheets/admin/navbar.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="/thoga.lk/public/stylesheets/font-awesome.min.css" rel="stylesheet">	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div>
<?php
  session_start();
  $url= $_SERVER['REQUEST_URI'];
  if(isset($_SESSION['admin_uname']) && $_SESSION['usertype']=='admin'){
    // header("location:/thoga.lk/adminlogin?logintogo=1");
  }else{
    header("location:/thoga.lk/adminlogin?logintogo=1");
  }
?>
<div class="topnav" id="myTopnav">
  <a href="/thoga.lk/admin" class="navlogo"><img  width=100px src="/thoga.lk/public/images/admin/logo thoga.png" alt="" class = "logo"></a>
  <a href="/thoga.lk/admin" class="<?php echo ($url=='/thoga.lk/admin')?'active':'';?>">Dashboard</a>
  <a href="/thoga.lk/admin#dapplications" >Requests</a>
  <a href="/thoga.lk/admin/admanager" class="<?php echo ($url=='/thoga.lk/admin/admanager')?'active':'';?>">Ad Management</a>
  <a href="/thoga.lk/forum" target="_blank">Forum</a>
  <div class = "nav-right">
    <a href="/thoga.lk/logout">Log Out</a>

    <img src="/thoga.lk/public/images/admin/b.png" alt="" class="user_pic" width=50px>
    

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

