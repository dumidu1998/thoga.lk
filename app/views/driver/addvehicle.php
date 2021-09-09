

<html>
<head>
	<title>Vehicles</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/thoga.lk/public/stylesheets/driver/vehicles.css">
	<link rel="shortcut icon" href="/thoga.lk/images/thoga.jpg" type="image/x-icon">

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
                                <!-- <tr>
                                    <td><label>Vehicle Type   :</label></td>
                                    <td><input type="text" placeholder="Lorry" class="textboxnew" name="vehicletype" required ></td>
                                </tr> -->
					  <tr>
                                    <td><label>Vehicle Type   :</label></td>
                                    <td> 
							<select name="vehicletype" class="selectbox" onchange="getdetails(this)" required>
							<option selected hidden >--Select--</option>
							<?php foreach($all as $keys => $row){ ?>
								<option value="<?php echo $row['type_id'];?>"><?php echo $row['vehicletype'];?></option>
								<?php } ?>
							</select>
						 </td>
                                </tr>
                                <tr>
                                    <td><label>Maximum Weight   :</label></td>
                                    <td><input type="text" id="weight" placeholder="1000" class="textboxnew" name="maxweight"  required ></td>
                                </tr>
                                <tr>
                                    <td><label>Cost/km (Rs.)   :</label></td>
                                    <td><input type="text" id="cost" placeholder="80" class="textboxnew" name="vehiclecost"  ></td>
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
								<input type="hidden" name="vehicle" id="vehicle" />
								<input type="submit" value="Submit" class="button1" name="vehicledetails">	
						</form>			
		</div>	
	</div>
	
	<?php include("footer.php"); ?> 
</body>
<script>
function getdetails(a){
	document.getElementById("vehicle").value=a.options[a.selectedIndex].text;
	var xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
		var i = JSON.parse(this.responseText);
		document.getElementById("weight").value = i.maxweight;
		document.getElementById("cost").value = i.cost;
	}
	};
	xhttp.open("GET", "/thoga.lk/driver/getvdata?id="+a.value , true);
	xhttp.send();
}
</script>
</html>