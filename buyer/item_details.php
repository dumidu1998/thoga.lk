<!DOCTYPE html>
<html lang="en">
    <?php 
        if(isset($_POST["add_to_cart"]))  
        {  
             if(isset($_SESSION["shopping_cart"]))  
             {  
                  $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
                  if(!in_array($_GET["id"], $item_array_id))  
                  {  
                       $count = count($_SESSION["shopping_cart"]);  
                       $item_array = array(  
                            'item_id'               =>     $_GET["id"],  
                            'item_name'               =>     $_POST["hidden_name"],  
                            'item_price'          =>     $_POST["hidden_price"],  
                            'item_quantity'          =>     $_POST["quantity"]  
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
                       'item_name'               =>     $_POST["hidden_name"],  
                       'item_price'          =>     $_POST["hidden_price"],  
                       'item_quantity'          =>     $_POST["quantity"]  
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
    
    <link rel="stylesheet" href="Item_Details.css">

</head>
<body>

<div id="myModal" class="modal">

<!-- Modal content -->
    <form action="index.php" method="get"  2>
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="item-img">
                <!-- image -->
                <img src="../imgs/item.jpg" alt="Avatar" style="width:60%">
            </div>
    
            <div class="container">
                <div class="user-details">
                    <div>
                        <!-- name -->
                        <h1 name="name"><a href="">Carrot</a></h1>
                        
                    </div>
                    <div class="farmer_icon">
                        <!-- farmer name -->
                        <img width=60px src="../imgs/icons/farmer.png" alt="">
    
                        <h2><a href="">Dumidu Kasun</a></h2>
                    </div>
    
                </div>
    
                <hr>
    
                <div class="item_des">
                    <!-- description -->
                    This is great carrot from nuwaraeliya nuwaraeliya is a best city to crop plants
                </div>
                <div class="user_address">
                    <!-- location details of the farmer -->
                    <img src="../imgs/icons/location.png" alt="">
                   <p> 388/54 waikkala nuwara eliya</p>
                </div>
    
                <div class="user_no">
                    <!-- location details of the farmer -->
                    <img src="../imgs/icons/telephone.png" alt="">
                   <p> 0775509830</p>
                </div>
    
            </div>
            <div>
                <!-- quantity/price -->
                <input type="hidden" name="hidden_name" value="Carrot" />  
                <input type="hidden" name="hidden_price" value="100" />  

                <input type="number" name="price" value="100" /> 
                <input type="text" name="quantity" class="form-control" value="1" />  
                <button name="add_to_cart" class="checkout_btn">Add to cart</button>
            </div>
            
        </div>

    </form>

</div>
    
</body>
</html>