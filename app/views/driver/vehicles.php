

<html>
<head>
	<title>Vehicles</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/thoga.lk/public/stylesheets/driver/vehicles.css">
</head>

<body>
<?php include("navdriverdashboard.php"); ?>

    <header>
		<div class="topic">
			<h1>Vehicle Details</h1>
			<hr>
		</div>
	</header>
	<div class="menu">
		
		<div class="transboxx">
		
					<?php
                        
						foreach($vehicle as $keys => $row){
							$vehicleid = $row['vehicle_id'];
							$driverid = $row['driver_id'];
							$vehicleno = $row['vehicle_no'];
							$cost = $row['cost_km'];
							$vehicletype = $row['vehicle_type'];
							$maxweight = $row['maximum_weight'];
							
							
						} 
						
						?> 
							
						<div class="contain">
								<div class = "image">
									<img src="/thoga.lk/public/images/driver/<?php echo $vehicleid;?>.jpg" alt="" class="imagevehicle">
								</div>	
						</div>
			<div class ="sright">				
								
								Vehicle id : 
								<input type="text" "class="advancedSearchTextBox"  name="orderid" value="<?php echo $vehicleid?>" disabled>
								<br>
								

								Driver id             :
								<input type="text" name="weight" value="<?php echo $driverid?>" disabled>
								<br>     

								Vehicle No   :
								<input type="text" name="pickup location" value="<?php echo $vehicleno?>" disabled>
								<br>
								
			    
								
								<label>Cost/Km   :</label>
								<input type="text" name="total cost" value="<?php echo $cost?>" disabled>
								<br> 

								Vehicle Type  :
								<input type="text" name="deliver location" value="<?php echo $vehicletype?>" disabled>
								<br>

								Maximum Weight         :
								<input type="text" name="order date" value="<?php echo $maxweight?>" disabled>
								<br>
					<input type="submit" value="Edit Details" class="button2" name="vehicledetails">				
			</div>
			<div class="bottom">
					<table style="width:100%">
						<tr>
						<th colspan="2">Documents	</th>	
						<tr>
							<td>Driving License Front</td>
							<td><a href="#" target="_blank" >DL 0005</a></td>
						</tr>
						<tr>
							<td>Driving License Back</td>
							<td><a href="#" target="_blank" >DL 0005</a></td>
						</tr>
						<tr>
							<td>Vehicle Insuarance</td>
							<td><a href="#" target="_blank" >DL 0005</a></td>
						</tr>
						<tr>
							<td>Vehicle Registration</td>
							<td><a href="#" target="_blank" >DL 0005</a></td>
						</tr>
					</table>
			</div>
		    
		</div>
	</div>
	<div class="right">
		<div class="transbox">
			
				<img src="/thoga.lk/public/images/driver/index.jpg" alt="order" width="240" height="450" >
			
			
		</div>	
	</div>
	
	<?php include("footer.php"); ?> 
</body>
</html>