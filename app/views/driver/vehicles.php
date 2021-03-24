

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
						if(isset($vehicle)){
						foreach($vehicle as $keys => $row){
								$vehicleid=$row['vehicle_id'];
								$_SESSION['vid']=$vehicleid;
								$driver_id=$row['driver_id'];
								$vehicle_no=$row['vehicle_no'];
								$cost_km=$row['cost_km'];
								$vehicle_type=$row['vehicle_type'];
								$maximum_weight=$row['maximum_weight'];
								
							}
						} 
						?> 
							
						<div class="contain">
								<div class = "image">
									<img src="/thoga.lk/public/uploads/drivervehicles/<?php echo $vehicleid;?>.jpg" alt="" class="imagevehicle">
								</div>	
						</div>
			<div class ="sright">				
								<form action="changecost" method="post">
								
									Vehicle id : 
									<input type="text" class="textbox1"  name="vehiid" value="<?php echo $vehicleid?>" disabled>
									<input type="hidden" class="textbox1"  name="vehicleid" value="<?php echo $vehicleid?>" >
									<br>
									

									Driver id             :
									<input type="text" class="textbox1" name="driid" value="<?php echo $driver_id?>" disabled>
									<input type="hidden" class="textbox1" name="driverid" value="<?php echo $driver_id?>" >
									<br>     

									Vehicle No   :
									<input type="text"  class="textbox1" name="vehicle no" value="<?php echo $vehicle_no?>" disabled>
									<br>

									Vehicle Type  :
									<input type="text" class="textbox1" name="vehicle type" value="<?php echo $vehicle_type?>" disabled>
									<br>

									Maximum Weight         :
									<input type="text" class="textbox1" name="maxweight" value="<?php echo number_format($maximum_weight,2);  ?> kg" disabled>
									<br>

									<label>Cost/km (Rs.):</label>
									<input type="text" class="advancedSearchTextbox1" name="cost" value="<?php echo number_format($cost_km,2); ?>">
									<br> 
									<input type="submit" value="Edit Cost/km" class="button2" name="vehicledetails">	
								</form>			
			</div>
			<div class="bottom">
					<table style="width:100%">
						<tr>
						<th colspan="2">Documents	</th>	
						<tr>
							<td>Driving License Front</td>
							<td><a href="/thoga.lk/public/uploads/driverdocuments/drivinglicensefront/<?php echo $driver_id;?>.jpg" target="_blank" >DLF <?php echo $driver_id;?></a></td>
						</tr>
						<tr>
							<td>Driving License Back</td>
							<td><a href="/thoga.lk/public/uploads/driverdocuments/drivinglicenseback/<?php echo $driver_id;?>.jpg" target="_blank" >DLB <?php echo $driver_id;?></a></td>
						</tr>
						<tr>
							<td>Vehicle Insuarance</td>
							<td><a href="/thoga.lk/public/uploads/driverdocuments/vehicleinsuarance/<?php echo $driver_id;?>.jpg" target="_blank" >VI <?php echo $driver_id;?></a></td>
						</tr>
						<tr>
							<td>Vehicle Registration</td>
							<td><a href="/thoga.lk/public/uploads/driverdocuments/vehicleregistration/<?php echo $driver_id;?>.jpg" target="_blank" >VR <?php echo $driver_id;?></a></td>
						</tr>
					</table>
					<a href="removevehicle?vid=<?php echo $vehicleid?>"> <button class="button2" > Remove Vehicle</button></a>	

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