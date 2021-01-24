<html>
<head>
<title>Mentor Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/thoga.lk/public/stylesheets/mentor/upcoming.css">


</head>
 
<body>
   <?php 
   include 'navbar_dash.php';
   
   ?>


 <h1 class="title">Upcoming Orders</h1>
 <?php include 'verticalnavbar.php';?>
<div  style="height:auto;">

<div style="overflow-x:auto;">
  <table align="center">
    <tr>
      <th>Order Id</th>
      <th>Pickup Date</th>
      <th>Total Weight</th>
      <th>Price</th>
      <th>Buyer Name</th>
      <th>Farmer Name</th>
      <th>More Details</th>
      
      
    </tr>

    <tr>
        <td>1</td>
        <td>2020-11-17</td>
        <td>100</td>
        <td>50</td>
        <td>Nimal</td>
        <td>Kamal</td>
        <td><a class="more" href="viewmore">view more</a></td>
    </tr>

    <tr>
        <td>2</td>
        <td>2020-11-10</td>
        <td>210</td>
        <td>60</td>
        <td>Lal</td>
        <td>Kamal</td>
        <td><a class="more" href="viewmore">view more</a></td>
    </tr>

    <tr>
        <td>3</td>
        <td>2020-11-20</td>
        <td>150</td>
        <td>55</td>
        <td>Nimal</td>
        <td>Nihal</td>
        <td><a class="more" href="viewmore">view more</a></td>
    </tr>

    <tr>
        <td>4</td>
        <td>2020-11-21</td>
        <td>260</td>
        <td>50</td>
        <td>Nimal</td>
        <td>Kamal</td>
        <td><a class="more" href="viewmore">view more</a></td>
    </tr>

    <tr>
        <td>5</td>
        <td>2020-11-25</td>
        <td>140</td>
        <td>65</td>
        <td>Sunil</td>
        <td>Kamal</td>
        <td><a class="more" href="viewmore">view more</a></td>
    </tr>

    <tr>
        <td>6</td>
        <td>2020-11-17</td>
        <td>300</td>
        <td>50</td>
        <td>Nimal</td>
        <td>Sunil</td>
        <td><a class="more" href="viewmore">view more</a></td>
    </tr>

<?php
/*
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
 <a href="viewmore.php">view more</a>
 </td>
</tr>
    

<?php
}*/
?>



  </table>
</div>
</div>
<?php include("footer.php"); ?>
</body>
</html>
