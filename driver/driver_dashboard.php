
<?php require_once("../db/db.php"); ?>
<html>
<head>
	
	<title>Driver Dashboard</title>
	<style>
	table {
	  border-collapse: collapse;
	  width: 100%;
	}

	th, td {
	  text-align: center;
	  padding: 8px;

	}

	tr:nth-child(even){background-color: #f2f2f2}

	th {
	  background-color: #4CAF50;
	  color: white;
}
	</style>
</head>

<body>
<?php include("navbar.php"); ?>
<header class="header-section">
    
	
</header>
    
    <br>
    <br>
    <br>
    <br>
    <br>

	<table  align="center">
		<tr>
			<td colspan="5"><h1>Driver Dashboard</h1></td>
		</tr>
		<tr>
			<th>Order ID</th>
			<th>Pickup Date</th>
			<th>Price</th>
		</tr>
		
		<?php
		
			$sql="select * from driver";
			$result=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_assoc($result)){
				echo "<tr>";
				echo "<td>".$row['item_id']."</td>";
				echo "<td>".$row['item_name']."</td>";
				echo "<td>".$row['quantity']."</td>";
				echo "</tr>";
			}
		
	?>
		
	</table>

	<footer class="footer-section">
    
  </footer>
  
	
	
	
</body>
</html>
