<?php
  $con=mysqli_connect("localhost","root","","thoga.lkdb") or die('connection failed');
?>



<html>
<head>
<title>Farmer Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="farmer_dash.css">


</head>
 
<body background="index1.jpg">
  <?php include 'navbar_dash.php';?>


  
  <h1 class="title">Upcoming Orders</h1>

<?php include 'verticalnavbar.php';?>

<div class="container">

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


    $sql="SELECT * from order_details ";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result)){

      echo "<tr>";

      echo "<td>".$row['order_id']."</td>";
      
      echo "<td>".$row['pickup_date']."</td>";

      echo "<td>".$row['weight']."</td>";

      echo "<td>".$row['total_cost']."</td>";

      echo "<td>".$row['buyer_name']."</td>";

      echo "<td>"
      ?>
      <a href="#view_more">view more</a>
    <?php
      

      echo "</tr>";
       


      
    }


?>


  </table>
</div>
</div>






</body>
</html>
