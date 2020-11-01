<html>
<head>
    <title>Booking Successful</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/thoga.lk/public/stylesheets/buyer/booksuc.css">
</head>

<body class="bodyclass2" onload="myFunction()" style="margin:0;">
<?php include("navbar.php"); ?>  
    <center>
    <div id="loader"></div>
    <div style="display:none;" id="myDiv" class="animate-bottom">
	    <h2>Booking complete!</h2>
        <p>We are happy to have you here!</p>
        <img src="/thoga.lk/public/images/buyer/icons/Tick.png" width="180" height="180">
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