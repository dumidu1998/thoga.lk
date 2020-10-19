<!DOCTYPE html>
<html lang="en">
<?php 
//tet
session_start();
  $_SESSION['dd']=1;
    
        if(isset($_GET["add_to_cart"]))  
        { echo"aaa"; 
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
                       echo "hey";


                  }  
                  else  
                  {  
                       echo '<script>alert("Item Already Added")</script>';  
                       echo '<script>window.location="index.php"</script>';  
                       echo "hello";
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
                  print_r($_SESSION["shopping_cart"]);
             } 
             print_r($_SESSION["shopping_cart"]); 
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
        <?php 
        // print_r($item_array);
        print_r($_SESSION["shopping_cart"][0]);
        print_r($_SESSION["shopping_cart"][1]);
        ?>
      <div class="cart_item_row">
        <div>
          <!-- name -->
          caroot  
          <div>
            <!-- unit price -->
            Rs. 1000
          </div>
        </div>
        <div>
          <!-- quantity -->
          100kg
        </div>
        <div>
          <!-- remove -->
          <input type="button" name="action" value="remove">
        </div>

      </div>

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
</script>




















</body>

</html>