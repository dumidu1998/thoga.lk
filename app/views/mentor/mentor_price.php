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

    <tr>
      <td>1</td>
      <td>Carrot</td>
      <td>30</td>
      <td>25</td>
    </tr>

    <tr>
      <td>2</td>
      <td>Tomato</td>
      <td>20</td>
      <td>15</td>
    </tr>

    <tr>
      <td>3</td>
      <td>Potato</td>
      <td>35</td>
      <td>30</td>
    </tr>

    <tr>
      <td>4</td>
      <td>Beans</td>
      <td>30</td>
      <td>25</td>
    </tr>

    <tr>
      <td>5</td>
      <td>Cucumber</td>
      <td>20</td>
      <td>15</td>
    </tr>

    <tr>
      <td>6</td>
      <td>Greenchilli</td>
      <td>30</td>
      <td>25</td>
    </tr>

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

<?php //include("footer.php"); ?>
</body>

</html>