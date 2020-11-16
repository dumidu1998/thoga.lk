<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/buyer/summary.css">
    <title>Document</title>
</head>
<body style="background-image: url('/thoga.lk/public/images/buyer/background.jpg');">
    <?php include("navbar.php") ?>
    <div class="container">
        <p>Invoice no : 12345</p>
        <br>
        <p>Delivery address : 388/53 stage1 apura</p>
        <br>
        <p>Telephone no : 0764229830</p>
        <div class="check">
            <!-- grid -->
            <div class="tbl">
                <!-- basket -->
                <h1>Your basket</h1>
                <hr>
                <table style="overflow-x:auto;">
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
                       
                        <td class="td_summary ">Total Amount</td>
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
                <a href="booksuccess"><button class="checkout_btn">Place Order</button></a>
            </div>
        </div> 
    </div> 

    <h1>Driver Details</h1>
    <hr>
    <div class="container-2">
        <div class="card">
            <img width= 300px src="/thoga.lk/public/images/buyer/a.jpg" alt="Avatar" style="width:100%">
            <div class="container-2">
                <h4><b>John Doe</b></h4> 
                <p>Architect & Engineer</p> 
            </div>
        </div>

    </div>

    <h1>Farmers Details</h1>
    <hr>
    
    <div class="card-group">
    <div class="card">
      <img src="/thoga.lk/public/images/buyer/a.jpg" alt="Avatar" style="width:100%">
      <div class="container-2">
        <h4><b>Carrot</b></h4> 
        <p>Selling by farmer Dumidu price:- 40/kg</p> 
      </div>
      <div>
      </div>
    </div>

    <div class="card">
      <img src="/thoga.lk/public/images/buyer/a.jpg" alt="Avatar" style="width:100%">
      <div class="container-2">
        <h4><b>John Doe</b></h4> 
        <p>Architect & Engineer</p> 
      </div>
      <div>
      </div>
    </div>

    <div class="card">
      <img src="/thoga.lk/public/images/buyer/a.jpg" alt="Avatar" style="width:100%">
      <div class="container-2">
        <h4><b>John Doe</b></h4> 
        <p>Architect & Engineer</p> 
      </div>
      <div>
      </div>
    </div>
    
</div>
    
<?php include("footer.php"); ?>
    
</body>
</html>