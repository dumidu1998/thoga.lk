<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/buyer/summary.css">
<link rel="shortcut icon" href="/thoga.lk/images/thoga.jpg" type="image/x-icon">

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
                <form action="booksuccess" method="post">

                    <table style="overflow-x:auto;">
                        <tr>
                            <th>Item</th>
                            <th>Price</th>
                            <th>quantity</th>
                            <th>Subtotal</th>
                        </tr>
                        <?php
                        $tot=0;
                        $tot_weight=0;
                            foreach($_SESSION['shopping_cart'] as $keys => $values){
                                $tot = $tot +($values['item_price'] * $values['item_quantity']);
                                $tot_weight = $tot_weight + $values['item_quantity'];
                            
                        ?>
                        <tr>
                            <td class="item_name"><?php echo $values['item_name']?></td>
                            <td>Rs.<?php echo number_format($values['item_price'],2)?></td>
                            <td><?php echo $values['item_quantity']?></td>
                            <td>Rs. <?php echo number_format(($values['item_price'] * $values['item_quantity']),2)?></td>
                        </tr>
                        <?php
                            }
                        ?>
                        
                        <tr>
                            <td colspan=2></td>
                           
                            <td class="td_summary ">Total Amount</td>
                            <td class="item_name">Rs. <?php echo number_format($tot,2)?></td>
                            <input type="hidden" name="total_cost" value="<?php echo $tot ;?>">
                            <input type="hidden" name="total_weight" value="<?php echo $tot_weight ;?>">
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
                            if(empty($driv)){
                                // print_r($details);
                                echo "Self pickup";
                               $_SESSION['driver'] = NULL; 
                            }else{
                                echo $details[0]['firstname']." " . $details[0]['lastname'];
                                 $_SESSION['driver'] = $details[0]['driver_id'];
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
                            <td class="item_name">Rs. <?php echo number_format($tot,2)?></td>
                        </tr>
    
                    </table>
                    <button type="button" name="order" class="confirm_btn" onclick="sendOTP()" id="confirm">Confirm Order</button>

                        <input type="text" class="otp" name="otp" id="otp" placeholder="OTP">
                        <input type="hidden" name="token" value="" id="token">
                        <button name="order" id="place" class="checkout_btn_sum" style="display:none;">Place Order</button>

                    </form>
                    <a href="home"><button class="checkout_btn_back">Back to shopping</button></a>
            </div>
        </div> 
    </div> 
<?php
if(!empty($driv)){


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
<script>
    function sendOTP(){
        var c = confirm("Are you sure You want to confirm order?")
        var x = document.getElementById("otp");
        var y = document.getElementById("place");
        var z = document.getElementById("confirm");

        x.style.display = "block";
        y.style.display = "block";
        z.style.display = "none";

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange=function() {
            if (this.readyState == 4 && this.status == 200) {
                var out=JSON.parse(this.responseText);
                document.getElementById("token").value = out.token;
            }
        };
        xhttp.open("GET", "sendotp", true);
        xhttp.send();


    }
</script>
    
</body>
</html>