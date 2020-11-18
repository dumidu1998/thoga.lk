

<html>
	<head>
		<title>Driver Dashboard</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="/thoga.lk/public/stylesheets/driver/vehicledetails.css">
	</head>

	<body>
	<?php include("navdriverdashboard.php"); ?>

		<header>
			<div class="topic">
				<h1>Vehicles</h1>
				<hr>
			</div>
		</header>
			
		<div class="menu">
			
			<div class="transboxx">



				<table align="center">
					
					<tr>
						<th>Vehicle ID</th>
						<th>Vehicle Type</th>
						<th>Vehicle Number </th>
                        <th>Availability</th>
                        <th>Action</th>
					</tr>
					
                    <?php
                    
                        foreach($vehicledet as $keys => $row){
                            $vehicleid = $row['vehicle_id'];
                            $vehicleno = $row['vehicle_no'];
                            $vehicletype = $row['vehicle_type'];
                            $availability = $row['availability'];
                            

                        
					?>
					<tr>
					<form action='/thoga.lk/driver/vehicles' method='post'>
					<td data-column="Vehicle ID"><?php echo $vehicleid; ?> </td>
					<td data-column="Vehicle Type"><?php echo $vehicletype; ?> </td>
                    <td data-column="Vehicle Number"><?php echo $vehicleno; ?> </td>
                    <td data-column="Availability"><label class="switch">
                        <input type="checkbox" <?php echo($availability==1 ? 'checked': '') ?>  >
                        <span class="slider round"></span>
                    </label></td>
					<input type="hidden" name="vehicleid" value="<?php echo $vehicleid; ?>"> 
					<td data-column="Action"><button name="vehicles" class="button1" > View More</button></td>
					</form>
					</tr>

                    <?php 
                     }
                     ?>

				
				
				</table>
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