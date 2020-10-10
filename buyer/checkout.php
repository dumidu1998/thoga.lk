<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>summary</title>
    <link rel="stylesheet" href="chckout.css">
</head>
<body style="background-image: url('../imgs/background.jpg');">
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
                    <tr>
                        <td class="item_name">Carrot</td>
                        <td>40</td>
                        <td>50</td>
                        <td>2000</td>
                    </tr>
                    <tr>
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
                    </tr>
                    <tr>
                        <td colspan=2></td>
                       
                        <td class="td_summary">Total Amount</td>
                        <td class="item_name">2000</td>
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
                        <td>2000</td>
                    </tr>

                    <tr>                       
                        <td class="td_summary">Discount Amount</td>
                        <td>00</td>
                    </tr>
                    <tr>                       
                        <td class="td_summary">Service Charge</td>
                        <td>00</td>
                    </tr>
                    <tr>                       
                        <td class="td_summary">Total Amount</td>
                        <td class="item_name">2000</td>
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
                    <input type="radio" name="radio" value="pickup"  checked="checked" id="pick">                   
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

        <button class="checkout_btn">Continue</button>
    </div>
</body>
<script>
    var modal = document.getElementById("add");
    var btn = document.getElementById("del");
    var btn2 = document.getElementById("pick");
    var size = window.matchMedia("(max-width: 700px)");

    if(size.matches){
        btn.onclick = function() {
        add.style.display = "block";
        }
    }else{
    btn.onclick = function() {
    add.style.display = "grid";
    }
    
    }

    btn2.onclick = function() {
        add.style.display = "none";
    }

    window.onclick = function(event) {
    if (event.target == add) {
        add.style.display = "none";
    }
    }
</script>
</html>