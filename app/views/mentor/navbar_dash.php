
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/thoga.lk/public/stylesheets/Farmer/navbar_dash.css">
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="dash" class="navlogo"><img width=80px src="/thoga.lk/public/images/Farmer/logo1.png" alt="" class = "logo"></a>
  <a href="dash" class="active">Dashboard</a>
  <a href="view_price">Price List</a>
  <a href="forum">Forum</a>
  <a href="add_item">Add Item</a>
  <a href="listed">Listed Items</a>
  <div class="trans" id="google_translate_element"></div>
  
 
 
  <div class = "nav-right">
    <a href="#logout">Logout</a>
     

    <img src="/thoga.lk/public/images/Farmer/bell.jpg" alt="" class = "user_pic" width=45px>
    <img src="/thoga.lk/public/images/Farmer/profile.png" alt="" class = "user_pic" width=45px>

 


  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en',includedLanguages:'en,si,ta'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<style>
.goog-logo-link, .goog-logo-link:link, .goog-logo-link:visited, .goog-logo-link:hover, .goog-logo-link:active{
    display: none;
  }

.goog-te-banner{
  display: none;
}
.goog-te-banner-frame{
  display:none;
}
.goog-te-gadget{
  font-size:0px;
}
  </style>

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