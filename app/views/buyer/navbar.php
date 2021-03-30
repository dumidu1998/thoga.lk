<html>
<head>
<meta name="viewport">
<link rel="stylesheet" href="/thoga.lk/public/stylesheets/buyer/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="/thoga.lk/public/stylesheets/buyer/font-awesome.min.css" rel="stylesheet">	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
    $url= $_SERVER['REQUEST_URI'];

?>
</head>
<body>
<div>
<div class="topnav" id="myTopnav" style="z-index : 1;">
  <div class="nav-left">

    <a href="/thoga.lk/buyer/home" class="navlogo"><img  width=100px src="/thoga.lk/public/images/Farmer/logo1.png" alt="" class = "logo"></a>
    <a href="home" <?php echo (($url== "/thoga.lk/buyer/home")?( "class='active'"):("")); ?>>Home</a>
    <a href="/thoga.lk/forum" <?php echo (($url== "/thoga.lk/buyer/forum")?( "class='active'"):("")); ?>>Forum</a>
    <a href="orders" <?php echo (($url== "/thoga.lk/buyer/orders")?( "class='active'"):("")); ?>>Orders</a>
    <a href="about_us" <?php echo (($url== "/thoga.lk/buyer/about_us")?( "class='active'"):("")); ?>>About Thoga.lk</a>
     <a id="google_translate_element"></a> 
  </div>

  <div class = "nav-right">
    <?php
    // print_r($_SESSION['user']);
      if(isset($_SESSION['user'])){
        

      echo "<a href='logout'><button class='logout'>Log Out</button></a>";
      echo   "<a href='profile'><img src='/thoga.lk/public/images/buyer/b.png' alt='' class = 'user_pic' width=50px></a>";
    
      }else{
      echo "<a href='/thoga.lk'><button class='logout'>SignUp/Login</button></a>";

      }
    ?>
    
        
             
       
    

  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
</div>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav" ) {
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
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en',includedLanguages: 'en,si,ta'}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>
</html>

