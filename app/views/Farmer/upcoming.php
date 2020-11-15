
<html>
<head>
<title>Farmer Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/thoga.lk/public/stylesheets/Farmer/upcoming.css">


</head>
 
<body background="/thoga.lk/public/images/Farmer/index1.jpg">
   <?php 
   include 'navbar_dash.php';
   
   ?>


 <h1 class="title">Upcoming Orders</h1>
 <?php include 'verticalnavbar.php';?>
<div class="container" style="height:auto;">

<div style="overflow-x:auto;">
  <table align="center">
    <tr>
      <th>Order Id</th>
      <th>Pickup Date</th>
      <th>Total Weight</th>
      <th>Price</th>
      <th>Buyer Name</th>
      <th>More Details</th>
      
      
    </tr>

<?php

foreach($data as $key => $values){
  $ordid= $values['order_id'];
  $pdate= $values['pickup_date'];
  $tweight= $values['weight'];
  $cost= $values['total_cost'];
  $bname= $values['buyer_name'];



?>
 <tr>
 <td><?php echo $ordid;?></td>
 <td><?php echo $pdate;?></td>
 <td><?php echo $tweight;?></td>
 <td><?php echo $cost;?></td>
 <td><?php echo $bname;?></td>
 <td>
 <a class="more" href="viewmore.php">view more</a>
 </td>
</tr>
    

<?php
}
?>



  </table>
</div>
</div>

</body>
</html>
