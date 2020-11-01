
<?php require_once("../../../db/db.php"); ?>
<html>
<head>
	<title>Driver Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../../public/stylesheets/driver/driverdashboard.css">
</head>

<body style="background-image: url('../../../public/images/driver/9999.jpg');">
<?php include("navdriverdashboard.php"); ?>

    <header>
		<div class="topic">
			<h2>Upcoming Orders</h2>
		</div>
	</header>
	
	<div class="menu">
		<div class="transboxx">
		<table align="center">
			
			<tr>
				<th>Order ID</th>
				<th>Pickup Date</th>
				<th>Price</th>
				<th>Action</th>
			</tr>
			
			<?php
			
				$sql="select * from orders";// where driver_id=\"". $_GET['driverId']. "\"";
				$result=mysqli_query($conn,$sql);
				// var_dump($result);
				while($row=mysqli_fetch_assoc($result)){
					// var_dump($row);
					echo "<tr>";
					echo "<td>".$row['order_id']."</td>";
					echo "<td>".$row['pickup_date']."</td>";
					echo "<td>".$row['total_cost']."</td>";
					echo "<td><button class=\"button1\" ><a href=\"viewmore.php?orderId={$row['order_id']}\"> View More</a></td>";
					echo "</tr>";
				}
			
			?>
			
		</table>
		</div>
	</div>
	<div class="right">
		<div class="transbox">
			<p class >
				<h2 style="color:mediumblue">Driver Dashboard</h2>
				<img src="../../../public/images/driver/del.png" alt="order" width="150" height="150" ><br>
			Upcoming Orders of the Driver are displayed here.
			</p>
		</div>	
	</div>
<!--
<footer class="footer-section">
    
#</footer>
-->  
	
	
	
</body>
</html>