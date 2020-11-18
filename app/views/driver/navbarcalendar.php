<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/thoga.lk/public/stylesheets/driver/profilenavbar.css">
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="#home" class="navlogo"><img width=65px src="/thoga.lk/public/images/driver/final driver.png" alt="" class = "logo"></a>
  <a href="dashboard">Dashboard</a>
  <a href="calendar" class="active">Calendar</a>
  <a href="forum">Forum</a>
  <a href="about_us">About</a>
  <a id="google_translate_element"></a>
  <div class = "nav-right">
    <a href="">Logout</a>
    
    
    <a href="#"><img src="/thoga.lk/public/images/driver/bell.jpg" alt="" class = "bell_pic" width=24px disabled>
    <a href="profile"><img src="/thoga.lk/public/images/driver/profile.png" alt="" class = "index_pic" width=24px>
    
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
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en',includedLanguages: 'en,si,ta'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>
</html>