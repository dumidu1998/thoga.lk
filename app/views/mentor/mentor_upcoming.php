<html>
<head>
<title>Mentor Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/thoga.lk/public/stylesheets/mentor/upcoming.css">
<link rel="stylesheet" type="text/css" href="/thoga.lk/public/stylesheets/mentor/vertical.css">


</head>
 
<body>
   <?php 
   include  'navbar_dash.php';
   
   ?>


 <h1 class="title">Upcoming Orders</h1>
 <div class="dropdown">
  <button class="dropbtn">Farmer List</button>
  <div class="dropdown-content">
<?php
   //print_r($data1);
  foreach($data1 as $keys => $row){
    $farmername = $row['firstname']." ".$row['lastname'];
    $fid=$row['farmer_id'];?>
    <a href="public_profile?id=<?php echo $fid; ?>"><?php echo $farmername; ?></a>
    
<?php
  }
  ?>
    
  </div>
</div>
<div  style="height:auto;height: 50%;min-height:0px">

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
  $bname= $values['b_name'];
  




?>
 <tr>
 <td><?php echo $ordid;?></td>
 <td><?php echo $pdate;?></td>
 <td><?php echo $tweight;?></td>
 <td><?php echo $cost;?></td>
 <td><?php echo $bname;?></td>
 
 <td>
 <a class ="more" href="viewmore.php">view more</a>
 </td>
</tr>
    

<?php
}
?>



  </table>
</div>
</div>
<?php include("footer.php"); ?>
</body>
</html>
