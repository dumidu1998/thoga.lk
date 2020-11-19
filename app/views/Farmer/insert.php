<html>
<head>
    <title>insert successfull</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/thoga.lk/public/stylesheets/Farmer/insert.css">
</head>

<body class="bodyclass2" onload="myFunction()" style="margin:0;">
<?php  include("navbar_dash.php"); ?>  
    <center>
    
	    <h2 class="title">Insert Successfully</h2>
        <p class="insert">We are happy to have you here!</p>
        <img src="/thoga.lk/public/images/Farmer/Tick.png" width="180" height="180">
    </div>
    </center>
    
  <script>
  var myVar;
  
  function myFunction() {
	myVar = setTimeout(showPage, 6000);
  }
  
  function showPage() {
	document.getElementById("loader").style.display = "none";
	document.getElementById("myDiv").style.display = "block";
  }
  </script>
</body>
</html>