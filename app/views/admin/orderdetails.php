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
    <h1>Order Details</h1>
    <div class="banner">
      <h2>Order Id - <?php echo $city[0]['order_id']; ?></h2>
      <h2>Invoice No. - <?php echo $city[0]['order_id']; ?></h2>
    </div>
    <div class="MainContainer">
    <div class="detailContainer">
      <div> 
      <label class="Dlabel bold" for="1">Buyer Name : -</label> <span class="Dlabel"><?php echo $buyer[0]['firstname']." ".$buyer[0]['lastname']  ?></span><br><br>
      <label class="Dlabel" for="2" style="float:left;margin-right:30px">Address &nbsp; &nbsp; : - </label>
      <textarea name="" id="2" cols="25" rows="3" readonly=readonly ><?php echo $city[0]['d_addline1']; ?>&#13;&#10;<?php echo $city[0]['d_addline2']; ?>&#13;&#10;<?php echo $city[0]['name_en']; ?></textarea>
      </div>
      <div style="float:left;clear:both">
        <br>
        <label class="Dlabel" for="3">Contact No : -</label><span class="Dlabel">Manthila Bandara</span><br><br>
        <label class="Dlabel" for="4">Total Weight : -</label><span class="Dlabel">Manthila Bandara</span><br><br>
        <label class="Dlabel" for="5">Order Status : -</label><span class="Dlabel">Manthila Bandara</span><br><br>
      </div>
      <div class="container2">
        <label class="Dlabel" for="6">Driver Name : -</label><span class="Dlabel">Manthila Bandara</span><br><br>
        <label class="Dlabel" for="7">Driver Telephone   : -</label><span class="Dlabel">Manthila Bandara</span><br><br>
        <label class="Dlabel" for="8">Order Status : -</label><span class="Dlabel">Manthila Bandara</span><br><br>
      </div>
      <div class="dlabel bold" style="clear:both;text-align:center;font-size:24px">Rating - <span>Not rated</span></div>
      
      
    </div>

    <div class="cartcontainer">
      <h2>Cart List</h2>
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
</div>
</body>
</html>


<script>

</script>