
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
 <?php include 'verticalnavbar.php';
 ?>
  <div class="cardcontainer">
    <div>Active Items
    <center><h1><?php echo $statdata1['count'];?></h1></center>
    </div>
    
    <div>Orders <span>(30 Days)</span>
    <center><h1><?php echo $statdata2;?></h1></center>
    </div>
    
    <div>Sales <span>(30 Days)</span>
    <center><h1>Rs. <?php echo number_format($statdata3,2);?></h1></center>
    </div>
  </div>
 <h1 class="title">Upcoming Orders</h1>
<div class = "container">
<div style="overflow-x:auto;height: 50%;min-height:0px">
  <table align="center">
    <tr>
      <th>Item Id</th>
      <th>Item Name</th>
      <th>Pickup Date</th>
      <th>Total Weight</th>
      <th>Price</th>
      <th>Buyer Name</th>
      <th>More Details</th>
      
      
    </tr>

<?php
foreach($data as $key => $values){
  $itemid= $values['item_id'];
  $ordid= $values['order_id'];
  $vegname= $values['vege_name'];
  $pdate= $values['pickup_date'];
  $tweight= $values['weight'];
  $cost= $values['total_cost'] * $values['weight'];
  $bname= $values['firstname']." ".$values['lastname'];



?>
 <tr>
 <td><?php echo $itemid;?></td>
 <td><?php echo $vegname;?></td>
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
<div id="piechart_3d" style="width: 900px; height: 500px;" class="mychart"></div>

</div>
<!-- TODO add cards to view stat -->
  <?php include 'footer.php'; ?>
</body>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Carrot',     6],
          ['Potato',      2],
          ['Brinjals',  2]
          
        ]);

        var options = {
          title: 'Item Performance (Last 30 Days)',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
</html>
