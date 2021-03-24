<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/buyer/summary.css">
    <title>Document</title>
</head>
<body>
    <?php include("navbar.php") ;
    ?>
    <div class="container">
        <center>

            <h2>Invoice no : 12345</h2>
        </center>
        <br>

        <?php
      
         if(isset($_SESSION['delivery_add'])){
           
                      
        ?>
        <div class="addr_container">
            <div class="divider">
                <h4 for="p"> Delivery address :</h4>

                <p> <?php echo ($_SESSION['delivery_add']['add1'])  ?> <?php echo ($_SESSION['delivery_add']['add2'])  ?>,
                <br><?php echo ($_SESSION['delivery_add']['city'])  ?>,<br><?php echo ($_SESSION['delivery_add']['district'])  ?>,<br><?php echo ($_SESSION['delivery_add']['province'])  ?>.</p>
            </div>
            <br>
            <div class="divider">
                
                <h4>Telephone no 1: </h4>
                <p><?php echo ($_SESSION['delivery_add']['contact1'])  ?></p>
            </div>
            <div class="divider">
                <h4>Telephone no 2:</h4>
                <p> <?php echo ($_SESSION['delivery_add']['contact2'])  ?></p>

            </div>

        </div>

        <?php
             
            }
            ?>
        <div class="check">
            <!-- grid -->
            <div class="tbl">
                <!-- basket -->
                <h1>Your basket</h1>
               <?php
            //    print_r($_SESSION['shopping_cart']);
                ?>
                <hr>
                <table style="overflow-x:auto;">
                    <tr>
                        <th>Item</th>
                        <th>Price</th>
                        <th>quantity</th>
                        <th>Subtotal</th>
                    </tr>
                    <?php
                    $tot=0;
                        foreach($_SESSION['shopping_cart'] as $keys => $values){
                            $tot = $tot +($values['item_price'] * $values['item_quantity']);
                        
                    ?>
                    <tr>
                        <td class="item_name"><?php echo $values['item_name']?></td>
                        <td><?php echo $values['item_price']?></td>
                        <td><?php echo $values['item_quantity']?></td>
                        <td><?php echo ($values['item_price'] * $values['item_quantity'])?></td>
                    </tr>
                    <?php
                        }
                    ?>
                    <!-- <tr>
                        <td colspan=2></td>
                       
                        <td class="td_summary">subtotal</td>
                        <td>2000</td>
                    </tr>

                    <tr>
                        <td colspan=2></td>
                       
                        <td class="td_summary">Discount Amount</td>
                        <td>00</td>
                    </tr>
                    <tr>
                        <td colspan=2></td>
                       
                        <td class="td_summary">Service Charge</td>
                        <td>00</td>
                    </tr> -->
                    <tr>
                        <td colspan=2></td>
                       
                        <td class="td_summary ">Total Amount</td>
                        <td class="item_name"><?php echo $tot?></td>
                    </tr>
                </table>
            </div>
            <div class="summary">
                <!-- summery -->
                <h1>Order summary</h1>
                <hr>
                <table>
                <tr>                       
                        <td class="td_summary">Pickup Date</td>
                        <td><?php print_r($_SESSION['pickup_date']) ?></td>
                    </tr>

                    <tr>                       
                        <td class="td_summary">Driver Name</td>
                        <td>
                        <?php
                        if($driv){
                            echo "Kasun";

                        }else{
                            echo "Self pickup";
                        }
                        ?>
                            
                        </td>
                    </tr>
                    <tr>                       
                        <td class="td_summary">Service Charge</td>
                        <td>00</td>
                    </tr>
                    <tr>                       
                        <td class="td_summary">Total Amount</td>
                        <td class="item_name"><?php echo $tot?></td>
                    </tr>

                </table>
                <a href="booksuccess"><button class="checkout_btn">Place Order</button></a>
                <a href="home"><button class="checkout_btn_back">Back to shopping</button></a>
            </div>
        </div> 
    </div> 
<?php
if($driv){


?>
    <h1>Driver Details</h1>
    <hr>
    <div class="container-2">
        <div class="card">
            <img width= 100px src="/thoga.lk/public/images/buyer/a3.png" alt="Avatar" style="width:100%">
            <div class="container-2">
                <?php
                    foreach($details as $keys=>$values){
                        
                    
                ?>
                
                <h4><b><?php echo $values['firstname'] ?> <?php echo $values['lastname'] ?></b></h4> 
                <p><b>Vehicle No: </b><?php echo $values['vehicle_no'] ?></p> 
                <p><b>Contact No 1: </b><?php echo $values['contactno1'] ?></p> 
                <p><b>Contact No 2: </b><?php echo $values['contactno2'] ?></p> 
            </div>
        </div>
        <?php
                    }
        ?>

    </div>
   <?php
}
?> 

    
    
<?php include("footer.php"); ?>
    
</body>
</html>