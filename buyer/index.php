<!DOCTYPE html>
<html lang="en">
<?php 
//tet
session_start();
  $total=0;
        if(isset($_GET["add_to_cart"]))  
        { 
             if(isset($_SESSION["shopping_cart"]))  
             {  
                  $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
                  if(!in_array($_GET["id"], $item_array_id))  
                  {  
                       $count = count($_SESSION["shopping_cart"]);  
                       $item_array = array(  
                            'item_id'               =>    $_GET["id"],  
                            'item_name'               =>     $_GET["hidden_name"],  
                            'item_price'          =>     $_GET["hidden_price"],  
                            'item_quantity'          =>     $_GET["quantity"]  
                       );  
                       $_SESSION["shopping_cart"][$count] = $item_array;  
                  }  
                  else  
                  {  
                       echo '<script>alert("Item Already Added")</script>';  
                       echo '<script>window.location="index.php"</script>';  
                  }  
             }  
             else  
             {  
                  $item_array = array(  
                    'item_id'               =>     $_GET["id"],  
                    'item_name'               =>     $_GET["hidden_name"],  
                    'item_price'          =>     $_GET["hidden_price"],  
                    'item_quantity'          =>     $_GET["quantity"]   
                  );  
                  $_SESSION["shopping_cart"][0] = $item_array;  
             } 
        }  
        if(isset($_GET["action"]))  
          {  
                if($_GET["action"] == "delete")  
                {  
                    foreach($_SESSION["shopping_cart"] as $keys => $values)  
                    {  
                          if($values["item_id"] == $_GET["id"])  
                          {  
                              unset($_SESSION["shopping_cart"][$keys]);  
                              echo '<script>window.location="index.php"</script>';  
                          }  
                    }  
                }  
          }  
    ?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="shopping_Cart.css">

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
    <div class="checkout_icon">
      <a href="checkout.php">
        <img width=35px align="center" src="../imgs/icons/cart.png" alt="">

      </a>
    </div>

    

  </div>
  <?php include("item_non_org.php"); ?> 
  <?php include("item_non_org.php"); ?> 

  
  </div>


  <div>
    
    <!-- shopping cart -->
    <div class="cart">
      <h1>Shopping Cart</h1>
      <hr>
      <div style="height:65vh;"> 
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
            <?php echo $values["item_price"]; ?>
          </div>
        </div>
        <div class="cart_item_row-quantity">
          <!-- quantity -->
            <?php echo $values["item_quantity"]; ?>
        </div>
        <div>
          <!-- remove -->
          <form action="index.php" method="get">
            <input type="hidden" name="id" value="<?php echo $values["item_id"];?>">
            <input type="submit" name="action" value="delete">

          </form>
        </div>

      </div>
      <?php
      $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }
                              }
                              else{
                                echo "<div class='emptynote'>Your Cart looks a little Empty</div>";
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