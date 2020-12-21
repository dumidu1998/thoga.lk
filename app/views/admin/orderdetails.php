<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/admin/vieworders.css">
</head>
<body>
<?php 
 include("navbar.php"); ?>

<div class="container">
    <div><a class="back-button" href="vieworders">&lt;&nbsp;Back</a></div>
    <h1>Order Details</h1>
    <div class="banner">
      <h2>Order Id - 10</h2>
      <h2>Invoice No. - 023</h2>
    </div>
    <div class="detailContainer">
      <div>
      <label class="Dlabel" for="1">Buyer Name : -</label>
      <input type="text" name="" class="mdetails" id="1" value="Manthila Bandara" disabled>
      <label class="Dlabel" for="2" style="float:left;margin-right:30px">Address &nbsp; &nbsp; : - </label>
      <textarea name="" id="2" cols="25" rows="3" readonly=readonly>No.122&#13;&#10;Jaya Mawatha&#13;&#10;Thalawa</textarea>
      </div>
      <div style="float:left;clear:both">
        <!-- <input type="text" name="" class="details" id="2" value="076 6344989"> -->
        <label class="Dlabel" for="3">Contact No : -</label>
        <input type="text" name="" class="details" id="3" value="076 6344989" disabled><br>
        <label class="Dlabel" for="4">Total Weight : -</label>
        <input type="text" name="" class="details" id="4" value="250 kg" disabled><br>
        <label class="Dlabel" for="5">Order Status : -</label>
        <input type="text" name="" class="details" id="5" value="On the Way" style="color:rgb(0, 0, 1);font-weight:700" disabled><br>
      </div>
      <div class="container2">
        <label class="Dlabel" for="6">Driver Name : -</label>
        <input type="text" name="" class="details"  id="6" value="Akila De Silva (023)" disabled><br>
        <label class="Dlabel" for="7">Driver Telephone   : -</label>
        <input type="text" name="" class="details"  id="7" value="076 6344989" disabled><br>
        <label class="Dlabel" for="8">Order Status : -</label>
        <input type="text" name="" class="details"  id="8" value="Collected" style="color:rgb(230, 2, 2);" disabled><br>
        <!-- <label class="Dlabel" for="9">Farmer Name : -</label>
        <input type="text" name="" class="details" id="9" value="Dumidu"><br> -->
        
      </div>
      <div class="dlabel" style="clear:both;text-align:center;font-size:30px">Rating - Not rated</div>
      
      
    </div>

    <div class="cartcontainer">
      <h2 style="color:white;">Cart List</h2>
    <table style="width:100%">
  <thead>
    <tr>
      <th width="8px">Id</th>
      <th>Item Id</th>
      <th>Item Name</th>
      <th>Weight</th>
      <th>Total Price</th>
      <th>Farmer Name</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-column="Id">1</td>
      <td data-column="Item Id">003</td>
      <td data-column="Item Name">Carrot</td>
      <td data-column="Weight">50 kg</td>
      <td data-column="Total Price">Rs.1,250.00</td>
      <td data-column="Farmer Name"><a href="">A.K. Bandara</a></td>
    </tr>
    <tr>
      <td data-column="Id">2</td>
      <td data-column="Item Id">004</td>
      <td data-column="Item Name">Pumpking</td>
      <td data-column="Weight">120 kg</td>
      <td data-column="Total Price">Rs.2,250.00</td>
      <td data-column="Farmer Name"><a href="">A.K. Bandara</a></td>
    </tr>
    <tr>
      <td data-column="Id">3</td>
      <td data-column="Item Id">008</td>
      <td data-column="Item Name">Cabbage</td>
      <td data-column="Weight">80 kg</td>
      <td data-column="Total Price">Rs.1,150.00</td>
      <td data-column="Farmer Name"><a href="">A.K. Bandara</a></td>
    </tr>
    
  </tbody>
</table>


    </div>
    <div style="text-align:center;"><a class="back-button az" href="index.php" >Cancel Order</a></div>
</div>
</body>
</html>


<script>

</script>