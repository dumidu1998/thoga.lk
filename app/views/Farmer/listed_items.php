<html>
<head>
<title>Farmer Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/thoga.lk/public/stylesheets/Farmer/listed.css">
<link rel="shortcut icon" href="/thoga.lk/images/thoga.jpg" type="image/x-icon">


</head>
 
<body background="/thoga.lk/public/images/Farmer/index1.jpg">
  <?php include 'navbar_dash.php';?>

  
<h1 class="title">Listed Items</h1>
<?php include 'verticalnavbar.php';?>

<div style="overflow-x:auto;">
  <table align="center">
    <tr>

      <th>Item Name</th>
      <th>Item Type</th>
      <th>Available Weight</th>
      <th>Minimum Weight</th>
      <th>End Date</th>
      <th>Price</th>
      <th>More Details/Edit</th>
      <th>Action</th>
      
    </tr>

<?php
     
     foreach($data as $key => $values){
       $ordid = $values['vege_name'];
       $itype = $values['Item_type'];
       $avaweight = $values['avail_weight'];
       $minweight = $values['min_weight'];
       $enddate = $values['item_end'];
       $price = $values['total_cost'];


?>

<tr>

<td><?php echo $ordid; ?></td>
<td><?php echo $itype; ?></td>
<td><?php echo $avaweight; ?></td>
<td><?php echo $minweight; ?></td>
<td><?php echo $enddate; ?></td>
<td><?php echo $price; ?></td>
<td>
 <a class="more" href="edit">Edit</a>
 </td>
 
 <td>
 <a class="dele"  href="delete.php">Delete</a>
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
