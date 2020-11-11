<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start(); 
    //print_r ($_SESSION["shopping_cart"]);
    
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>summary</title>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/buyer/chckout.css">
</head>
<body style="background-image: url('/thoga.lk/public/images/buyer/background.jpg');">
<?php include("navbar.php"); ?>
    <div class="container">
        <div class="check">
            <!-- grid -->
            <div class="tbl">
                <!-- basket -->
                <h1>Your basket</h1>
                <hr>
                <table>
                    <tr>
                        <th>Item</th>
                        <th>Price</th>
                        <th>quantity</th>
                        <th>Subtotal</th>
                    </tr>

                    <?php
                    $total = 0;
                    foreach($_SESSION["shopping_cart"] as $keys => $values)  
                        {  
                           $subtot= $values["item_price"] * $values["item_quantity"];
                           $total = $total + $subtot;
                        ?>  
                    <tr>
                        <td class="item_name"><?php echo $values["item_name"]; ?>  </td>
                        <td> Rs.<?php echo $values["item_price"]?></td>
                        <td><?php echo $values["item_quantity"]?>kg</td>
                        <td>Rs. <?php echo $subtot?></td>
                    </tr>

                    <?php
                        }
                        ?>
                    <!-- <tr>
                        <td colspan=2></td>
                       
                        <td class="td_summary">net total</td>
                        <td></td>
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
                       
                        <td class="td_summary">Total Amount</td>
                        <td class="item_name"><?php echo $total ?></td>
                    </tr>
                </table>
            </div>
            <div class="summary">
                <!-- summery -->
                <h1>Order summary</h1>
                <hr>
                <table>
                <tr>                       
                        <td class="td_summary">subtotal</td>
                        <td><?php echo $subtot ?></td>
                    </tr>

                    <!-- <tr>                       
                        <td class="td_summary">Discount Amount</td>
                        <td>00</td>
                    </tr>
                    <tr>                       
                        <td class="td_summary">Service Charge</td>
                        <td>00</td>
                    </tr> -->
                    <tr>                       
                        <td class="td_summary">Total Amount</td>
                        <td class="item_name"><?php echo $total ?></td>
                    </tr>

                </table>
            </div>
        </div>  
        
        <div class="delivery_option">
            <!-- delivery option -->

            <div class="delivery_option-selector">
                <h2>Delivery option</h2>

                <div class="r_btn">
                    <label>Pickup</label>
                    <input type="radio" name="radio" value="pick"  checked="checked" id="pick">                   
                </div>
                <div class="r_btn">
                    <label>Deliver</label>
                    <input type="radio" name="radio" value="deliver" id="del">                   
                </div>


            </div>
            <div class="delivery_option-address" id="add">
                <h2> Delivery Address</h2>
                <div>

                <form action="">
                    <div class="delivery_option-address-input">   
                        <div>
                            <label for="">Address line 1</label>
                            <input type="text">
                        </div>
                        <div>
                            <label for="">Address line 2</label>
                            <input type="text">
                        </div>
                    </div>

                    <div class="delivery_option-address-input">
                        <div>
                            <label for="">City</label>
                            <input type="text">
                        </div>
                        <div>
                            <label for="">Province</label>
                            <input type="text">
                        </div>
                        
                    </div>
                    <div>
                        <label for="">Mobile no</label>
                        <input type="text">
                    </div>
                    
                </form>
                </div>


            </div>
        </div>
        <a href="home"><button class="checkout_btn_back">Back to shopping</button></a>
       
        <a href="summery" id="check"><button class="checkout_btn">Continue</button></a>
    </div>
</body>
<script>
    
    var btn = document.getElementById("del");
    var btn2 = document.getElementById("pick");
    var size = window.matchMedia("(max-width: 700px)");
    var link = document.getElementById("check");

    if(size.matches){
        btn.onclick = function() {
        add.style.display = "block";
        }
    }else{
    btn.onclick = function() {
    add.style.display = "grid";
    link.href="select-driver";
    }
    
    }

    btn2.onclick = function() {
        add.style.display = "none";
    link.href="summery";

    }

</script>
</html>