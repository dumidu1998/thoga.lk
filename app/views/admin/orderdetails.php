<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details #<?php printf('%02d',  $order_all['order_id']); ?></title>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/admin/vieworders.css">
	  <link rel="shortcut icon" href="/thoga.lk/images/thoga.jpg" type="image/x-icon">

</head>
<body>
<?php 
 include("navbar.php"); ?>

<div class="container">
    <h1>Order Details</h1>
    <div class="banner">
      <h2>Order Id - <?php printf('%03d',  $order_all['order_id']); ?></h2>
      <h2>Invoice No. - <?php printf('%03d',  $order_all['order_id']); ?></h2>
    </div>
    <div class="MainContainer">
    <div class="detailContainer">
      <div> 
      <label class="Dlabel bold" for="1">Buyer Name : -</label> <span class="Dlabel"><?php echo $buyer['firstname']." ".$buyer['lastname']  ?></span><br><br>
      <label class="Dlabel" for="2" style="float:left;margin-right:30px">Address &nbsp; &nbsp; : - </label>
      <textarea name="" id="2" cols="25" rows="4" readonly=readonly ><?php echo $order_all['d_addline1']; ?>&#13;&#10;<?php echo $order_all['d_addline2']; ?>&#13;&#10;<?php echo $order_all['city']; ?>&#13;&#10;<?php echo $order_all['district']; ?></textarea>
      </div>
      <div style="float:left;clear:both">
        <br>
        <label class="Dlabel" for="3">Contact No : - </label><span class="Dlabel"><?php echo $buyer['contactno1']." / ".$buyer['contactno2'];?></span><br><br>
        <label class="Dlabel" for="4">Total Weight : - </label><span class="Dlabel"><?php echo number_format($order_all['weight'],2);?> kg</span><br><br>
        <label class="Dlabel" for="4">Total Value : - </label><span class="Dlabel"><b>Rs. <?php echo number_format($order_all['total_cost'],2);?></b></span><br><br>
        <label class="Dlabel" for="5">Order Status : - </label><span class="Dlabel">
          <?php 
            if ($order_all['status']==1)echo "<span style='color:green'>".$order_all['description']."</span>";
            else echo "<span style='color:red'>".$order_all['description']."</span>"
          ?>
        </span><br><br>
      </div>
      <div class="container2">
        <label class="Dlabel" for="6">Driver Name : - </label><span class="Dlabel"><?php echo $driver['firstname']." ".$driver['lastname']  ?></span><br><br>
        <label class="Dlabel" for="7">Driver Telephone   : - </label><span class="Dlabel"><?php echo $driver['contactno1']." / ".$driver['contactno2'];?></span><br><br>
      </div>
      <div class="dlabel bold" style="clear:both;text-align:center;font-size:24px">Rating - <span>Not rated</span></div>
      
      
    </div>

    <div class="cartcontainer">
      <h2>Cart List</h2>
      <table style="width:100%">
        <thead>
          <tr>
            <th width="8px">Id</th>
            <th>Item Name</th>
            <th>Unit Price</th>
            <th>Weight</th>
            <th>Total Price</th>
            <th>Farmer Name</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($items as $key => $values){
            ?>
          <tr>
            <td data-column="Id"><?php echo $values['details_id'] ?></td>
            <td data-column="Item Name"><?php echo ucfirst($values['vege_name']) ?></td>
            <td data-column="Unit Price">Rs. <?php echo number_format($values['total_cost'],2) ?></td>
            <td data-column="Weight"><?php echo number_format($values['weight'],2) ?> kg</td>
            <td data-column="Total Price">Rs. <?php echo number_format($values['weight']*$values['total_cost'],2) ?></td>
            <td data-column="Farmer Name"><a href="userview?uid=<?php echo $values['farmer_id']?>" target="_blank"><?php echo $values['firstname']." ".$values['lastname'] ?></a></td>
          </tr>
          <?php }?>
        </tbody>
      </table>


    </div>
    <button onclick="window.print();" class="back-button az" style="background-color:#110044;float: left;font-size:15px">Print</button>
    <div style="text-align:center;"><a class="back-button az" id="cancelbtn" href="cancelorder?ordid=<?php echo $order_all['order_id'];?>" onclick="confirmm()">Cancel Order</a></div>
  </div>
</div>

</body>
</html>


<script>
  function confirmm(){
    var x=document.getElementById("cancelbtn");
    var y=document.getElementById("cancelbtn").value;
    var c = confirm("Are you sure you want to cancel this Order?");
    if(c==true){
      x.style.visibility = 'hidden';
    }else{
      x.style.visibility = 'visible';
    }
  }
</script>