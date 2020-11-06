<!DOCTYPE html>
<html lang="en">
<?php 
//tet
session_start();

    ?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/thoga.lk/public/stylesheets/buyer/index.css">
  <link rel="stylesheet" href="/thoga.lk/public/stylesheets/buyer/shopping_Cart.css">

  <link rel="stylesheet" href="/thoga.lk/public/stylesheets/buyer/style.css">
</head>

<body style="background-image: url('/thoga.lk/public/images/buyer/background.jpg');">


<?php include("navbar.php"); ?>
  

<div class="wrapper">
  <div>
    <div class="organic_container">
      <div class="btn_organic <?php if($_SERVER['REQUEST_URI']== '/thoga.lk/buyer/home') {echo $class; }?>">
        <a href="/thoga.lk/buyer/home">Organic/Non-Organic</a>
      </div>
      <div class="btn_organic <?php if($_SERVER['REQUEST_URI']== '/thoga.lk/buyer/home/organic') {echo $class; }?>">
        <a href="/thoga.lk/buyer/home/organic">Organic</a>

      </div>

      <div class="checkout_icon">
        <a href="checkout.php">
          <img width=35px align="center" src="/thoga.lk/public/images/buyer/icons/cart.png" alt="">

        </a>
      </div>

      
           
    </div>
  
    <?php include("item_non_org.php"); ?> 
    

  
  </div>

  <?php //print_r($_SESSION["shopping_cart"]); ?>
  <div>
    
    <!-- shopping cart -->
    <div class="cart">
      <h1>Shopping Cart</h1>
      <hr>
      <div style="height:60vh;"> 
        <?php 
        // print_r($item_array);
        if(!empty($_SESSION["shopping_cart"]))  
        {  
           $total = 0; 
          foreach($_SESSION["shopping_cart"] as $keys => $values)  
          {  
         ?>  

        <div class="cart_item_row">
        <div class="cart_item_row-name">
          <!-- name -->
          <?php echo $values["item_name"]; ?>  
          <div class="cart_item_row-up">
            <!-- unit price -->
            Rs. <?php echo $values["item_price"] * $values["item_quantity"] ; ?>
          </div>
        </div>
        <div class="cart_item_row-quantity">
          <!-- quantity -->
            <?php echo $values["item_quantity"]; ?> kg
        </div>
        <div>
          <!-- remove -->
          <form action="/thoga.lk/buyer/cart" method="post">
            <input type="hidden" name="id" value="<?php echo $values["item_id"];?>">
            <input class="input_s" type="submit" name="action" value="delete">

          </form>
        </div>

        </div>
        <?php
        $total = $total + ($values["item_quantity"] * $values["item_price"]);  
      }
    }
      else{
          echo "<div class='emptynote'>Your Cart looks a little Empty </div>";
          $total=0;
          }
        ?>

    </div>
    <a href="checkout.php"><button class="checkout_btn">Checkout &nbsp;&nbsp; Rs: <?php echo $total?></button></a>

    </div>


  </div>
</div>




  
<script>


function closeModal(id) {
  var mod = document.querySelector("#myModal"+id);
  mod.style.display = 'none';
  
}



function openModal(id) {
  var mod = document.querySelector("#myModal"+id);
  mod.style.display = 'block';

}

window.onclick = function(event) {
  if (event.target == mod) {
    mod.style.display = "none";
  }
}
</script>




</body>

</html>