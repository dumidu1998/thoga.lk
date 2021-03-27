

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
					
					<form action="addVehicleController" method="post" enctype="multipart/form-data">
                            <table class="addtable">
                                <th colspan="2">Enter Vehicle Details</th>
                                <tr>
                                    <td><label>Vehicle No   :</label></td>
                                    <td><input type="text" placeholder="SP PL-0285" class= "textboxnew" name="vehicleno" required></td>
                                </tr>
                                <tr>
                                    <td><label>Vehicle Type   :</label></td>
                                    <td><input type="text" placeholder="Lorry" class="textboxnew" name="vehicletype" required ></td>
                                </tr>
                                <tr>
                                    <td><label>Maximum Weight   :</label></td>
                                    <td><input type="text" placeholder="1000" class="textboxnew" name="maxweight" required ></td>
                                </tr>
                                <tr>
                                    <td><label>Cost/km (Rs.)   :</label></td>
                                    <td><input type="text" placeholder="80" class="textboxnew" name="vehiclecost" required ></td>
                                </tr>
                                <tr>	
                                    <td><label>Photo of Vehicle:</label></td>
									<td><input type="file" class="textboxnew" name="vehiclepic" accept="image/jpeg" required ></td>
                                </tr>
                                <tr>
                                    <td><label>Vehicle Insuarance :</label></td>
									<td><input type="file" class="textboxnew" name="insuarancepic" accept="image/jpeg" required ></td>
                                </tr>
                                <tr>
                                    <td><label>Vehicle Registration:</label></td>
									<td><input type="file" class="textboxnew" name="registrationpic" accept="image/jpeg" required></td>
                                </tr> 
                            </table>
                            <br>
								<input type="submit" value="Submit" class="button1" name="vehicledetails">	
						</form>			
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