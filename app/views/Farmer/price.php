


<html>
<head>
<title>Price List</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/thoga.lk/public/stylesheets/Farmer/price.css">

</head>


<body>
<?php include 'navbar_dash.php'; ?>

<h1 class="title">Price List</h1>
<div class="container">

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">


  <div style="overflow-x:auto;">
  <table align="center">
    <tr>
      <th>Vegetable ID</th>
      <th>Vegetable Name</th>
      <th>Thoga.lk Average Price (Rs)</th>
      <th>Market Average Price (Rs)</th>
      
      
      
    </tr>
    <?php foreach ($marketp as $key=>$values){
      ?>
    <tr>
      <td><?php echo $values['vege_id']?></td>
      <td><?php echo $values['vege_name']?></td>
      <td><?php echo number_format($values['prev_price'],2)?></td>
      <td><?php echo number_format($values['current_price'],2)?></td>
    </tr>
    <?php }?>

<?php


  /*  $sql="SELECT * from vegetable";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result)){

      echo "<tr>";

      echo "<td>".$row['vege_id']."</td>";
      
      echo "<td>".$row['vege_name']."</td>";

      echo "<td>".$row['thoga.lk_price']."</td>";

      echo "<td>".$row['market_avg_price']."</td>";

      
      

      echo "</tr>";
       


      
    }*/


?>


  </table>
</div>
</div>



</body>
<?php include("footer.php"); ?>


</html>