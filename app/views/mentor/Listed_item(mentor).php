<html>
<head>
<title>Mentor Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/thoga.lk/public/stylesheets/mentor/listed.css">


</head>
 
<body>
  <?php include 'navbar_dash.php';?>

  
<h1 class="title">Listed Items</h1>

<div style="overflow-x:auto;">
  <table align="center">
    <tr>

      <th>Item Name</th>
      <th>Item Type</th>
      <th>Available Weight</th>
      <th>Minimum Weight</th>
      <th>End Date</th>
      <th>Price</th>
      <th>Farmer Name</th>
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
       $fname = $values['firstname']." ".$values['lastname'];
       $itemid = $values['item_id'];


?>

<tr>

<td><?php echo $ordid; ?></td>
<td><?php echo $itype; ?></td>
<td><?php echo $avaweight; ?></td>
<td><?php echo $minweight; ?></td>
<td><?php echo $enddate; ?></td>
<td><?php echo $price; ?></td>
<td><?php echo $fname; ?></td>
<td>
 <a class="more" href="edit?id=<?php echo $itemid; ?>">Edit</a>
 </td>
 
 <td>
 <a class="dele" href="delete_item?id=<?php echo $itemid; ?>" onclick="confirm('Are you sure you want to delete this item ?');">Delete</a>
 </td>

 



</tr>
<?php
     }



?>
</table>

  <?php include("footer.php"); ?>
</body>
</html>