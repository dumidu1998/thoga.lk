

<html>
	<head>
		<title>Driver Dashboard</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="/thoga.lk/public/stylesheets/driver/driverdashboard.css">
	</head>

	<body>
	<?php include("navdriverdashboard.php"); ?>

		<header>
			<div class="topic">
				<h1>Upcoming Orders</h1>
				<hr>
			</div>
		</header>
			<div class ="vehicle">
				<form method="post" action="vehicledetails">
					<input type="submit" value="Vehicle details" class="button2" name="vehicledetails">
				</form>
			</div>
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

					
					
					foreach($details as $keys => $row){
						$order_id=$row['order_id'];
						$pickdate=$row['pickup_date'];
						$tcost=$row['total_cost'];
					?>
					<tr>
					<form action='/thoga.lk/driver/viewmore' method='post'>
					<td><?php echo $order_id; ?> </td>
					<td><?php echo $pickdate; ?> </td>
					<td><?php echo $tcost; ?> </td>
					<input type="hidden" name="order_id" value="<?php echo $order_id; ?>"> 
					<td><button name="viewmore" class="button1"> View More</button></td>
					</form>
					</tr>

					<?php } ?>

				
				
				</table>
			</div>
		</div>
		<div class="right">
			<div class="transbox">
				<p class >
					<h2 style="color:mediumblue">Driver Dashboard</h2>
					<img src="/thoga.lk/public/images/driver/del.png" alt="order" width="150" height="150" ><br>
				Upcoming Orders of the Driver are displayed here.
				</p>
			</div>	
		</div>
    
	
		<?php include("footer.php"); ?> 
		
	</body>
</html>