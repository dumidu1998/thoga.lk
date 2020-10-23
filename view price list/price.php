<?php
  $con=mysqli_connect("localhost","root","","thoga.lkdb") or die('connection failed');
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="price.css">

</head>


<body background="inex2.jpg">
<?php include 'pricenavbar.php'; ?>

<h1 class="title">Price List</h1>
<div class="container">

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">



<div style="overflow-x:auto;">
  <table align="center">
    <tr>
      <th>Vegetable ID</th>
      <th>Vegetable Name</th>
      <th>Thoga.lk Average Price</th>
      <th>Market Average Price</th>
      
      
      
    </tr>

<?php


    $sql="SELECT * from vegetable";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result)){

      echo "<tr>";

      echo "<td>".$row['vege_id']."</td>";
      
      echo "<td>".$row['vege_name']."</td>";

      echo "<td>".$row['thoga.lk_price']."</td>";

      echo "<td>".$row['market_avg_price']."</td>";

      
      

      echo "</tr>";
       


      
    }


?>


  </table>
</div>
</div>
<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>

</body>
</html>