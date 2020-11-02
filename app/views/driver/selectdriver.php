
<?php require_once("../../../db/db.php"); ?>
<html>
<head>
	<title>Driver Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		* {
			box-sizing: border-box;
		}
		body {
			background-color: lightsteelblue;
			background-image:url("imgn2.jpg");
			background-size: cover;
            background-repeat: no-repeat;
		}
		
		header{
            text-align:center;
            padding-top:75px;
        }
		.menu {
			float:center;
			width:75%;
			text-align:center;
			padding-top:30px;
		}
		.right{
			float:left;
			width:25%;
			padding-top:30px;
			text-align:center;
			font-size:25px;
			color:red;
		
		}
		
		.transbox {
			margin: 10px;
			#background-color: #ffffff;
			border: 2px solid darkblue;
			opacity: 0.9;
			
		}
		.transbox p {
			margin: 5%;
			font-weight: bold;
			color: #000000;
			
		}
		

		table {
		#float:left;
		border-collapse: collapse;
		width: 90%;
		#border:1.5px solid black;
		
		}

		th, td {
		text-align: center;
		padding: 8px;
		font-size: 20px;

		}

		tr:nth-child(even){background-color: #f2f2f2}

		th {
		background-color: #4CAF50;
		color: white;
		}
		@media only screen and (max-width:620px) {
			/* For mobile phones: */
			.menu, .right {
				width:100%;
			}
		}
	</style>
</head>

<body>
<?php include("navbar.php"); ?>

    <header>
		<div style="background-color:#4A62FF;padding:5px;text-align:center;">
			<h1>Select Driver</h1>
		</div>
	</header>
	
	<div class="menu">
		<table  align="center">
			
			<tr>
				<th>Driver Name</th>
				<th>Rating</th>
                <th>Vehicle Name</th>
                <th>Price/Km</th>
				
			</tr>
			
			<?php
			
				$sql="select * from driver, vehicle, order_details";
				$result=mysqli_query($conn,$sql);
				// var_dump($result);
				while($row=mysqli_fetch_assoc($result)){
					// var_dump($row);
					echo "<tr>";
					echo "<td>".$row['driver_name']."</td>";
					echo "<td>".$row['pickup_date']."</td>";
                    echo "<td>".$row['vehicle_type']."</td>";
                    echo "<td>".$row['cost/km']."</td>";
					echo "<td><a href=\"viewmore.php?orderId={$row['order_id']}\"> Select</a></td>";
					echo "</tr>";
				}
			
			?>
			
		</table>

<!--
<footer class="footer-section">
    
#</footer>
-->  
	
	
	
</body>
</html>