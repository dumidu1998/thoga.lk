<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
  <title>Document</title>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body style="background-image: url('../imgs/background.jpg');">


  <?php include("navbar.php"); ?>




<div class="wrapper">
  <div>
  <div class="organic_container">
    <div class="btn_organic org_active">
      <a href="">Non-Organic</a>
    </div>
    <div class="btn_organic">
      <a href="">Organic</a>

    </div>

    

  </div>
  <?php include("item_non_org.php"); ?>
  <?php include("item_details.php"); ?>
  <?php include("item_non_org.php"); ?>
  <?php include("item_non_org.php"); ?>
  </div>


  <div>
    <!-- shopping cart -->
    <div class="cart">
      <h1>Shopping Cart</h1>
      <hr>

    </div>

  </div>
</div>




  
<script>
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>




















</body>

</html>