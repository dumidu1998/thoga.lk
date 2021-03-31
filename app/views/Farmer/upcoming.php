
<html>
<head>
<title>Farmer Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/thoga.lk/public/stylesheets/Farmer/upcoming.css">
<link rel="shortcut icon" href="/thoga.lk/images/thoga.jpg" type="image/x-icon">


</head>
 
   <?php 
   include 'navbar_dash.php';
   
   ?>
<body >


 <h1 class="title">Upcoming Orders</h1>
 <?php include 'verticalnavbar.php';
 ?>

<div class = "container">
<div style="overflow-x:auto;height: 50%;min-height:0px">
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
  $bname= $values['firstname']." ".$values['lastname'];



?>
 <tr>
 <td><?php echo $ordid;?></td>
 <td><?php echo $pdate;?></td>
 <td><?php echo number_format($tweight,0).' kg';?></td>
 <td>Rs. <?php echo number_format($cost,2);?></td>
 <td><?php echo $bname;?></td>
 <td>
 <a class="more" name='link' onclick="" href="viewmore?id=<?php echo $ordid;?>">view more</a>
 </td>
</tr>
<?php
}
?>
  </table>
</div>
</div>


<?php include 'footer.php'; ?>
</body>

</html>
