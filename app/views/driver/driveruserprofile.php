<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/driver/userprofile.css">
</head>
<?php
$status = "disabled";
$color = "black";

if(isset($_GET["edit"])){
    $status = "enabled";
    $color = "red";
}
if(isset($_GET["update"])){
   echo "Done"; 
}
?>

<body>


   <?php include 'navdriverdashboard.php' ;?> 
   <div class="topic">
                <h1>Driver user profile</h1>
        </div>
        <hr>
   
    <div class="wrapper">
        <div class="user_pp">
           
            <img width="300px" src="/thoga.lk/public/images/driver/a.jpg" alt="">
            <input type="file" value="upload image">

        </div>
        
        <div class="user_details">
          
            <form action="farmer_profile.php" method="get">
                <div class="data_wrapper">
                    <label style="color : <?php echo $color ?>" for="">First name</label>
                    <input type="text" <?php echo $status ?>> 
                </div>

                <div class="data_wrapper">
                    <label style="color : <?php echo $color ?>" for="">Last name</label>
                    <input type="text" <?php echo $status ?>>
                </div>

                <div class="data_wrapper">
                    <label style="color : <?php echo $color ?>" for="">Email Adress</label>
                    <input type="text" <?php echo $status ?>>
                </div>

                <div>
                    <br>
                    <label for="">Contact Numbers</label>

                </div>

                <div class="data_wrapper adress_data">
                    <div>
                        <label style="color : <?php echo $color ?>" for="">Mobile number</label>
                        <input type="text" <?php echo $status ?>>

                    </div>
                    <div>
                        <label style="color : <?php echo $color ?>" for="">Mobile number</label>
                        <input type="text" <?php echo $status ?>>

                    </div>
                </div>
                <div>
                    <br>
                    <label for="">Location</label>

                </div>


                <div class="data_wrapper adress_data">
                    <div>
                        <label style="color : <?php echo $color ?>" for="">Farm no</label>
                        <input type="text" <?php echo $status ?>>

                    </div>
                    <div>
                        <label style="color : <?php echo $color ?>" for="">District</label>
                        <input type="text" <?php echo $status ?>>

                    </div>
                </div>
                
                
                <div class="data_wrapper adress_data">
                    <div>
                        <label style="color : <?php echo $color ?>" for="">City</label>
                        <input type="text" <?php echo $status ?>>
                    </div>

                    <div>
                        <label style="color : <?php echo $color ?>" for="">zip code</label>
                        <input type="text" <?php echo $status ?>>
                    </div>
                    
                </div>
                <div class="data_wrapper adress_data">
                    <div>
                        <label style="color : <?php echo $color ?>" for="">Nearest City 1</label>
                        <input type="text" <?php echo $status ?>>
                    </div>
                    <div>
                        <label style="color : <?php echo $color ?>" for="">Nearest City 2</label>
                        <input type="text" <?php echo $status ?>>
                    </div>

                </div>

                <hr>
                <br>
                <button id="myBtn" name="edit">Edit</button>
                 <button name="update" class="updt_btn" <?php echo $status ?>>Update</button>

            </form>

        </div>

        <div>
            
            <img src="/thoga.lk/public/images/driver/index.jpg" alt="" width="210" height="430">

        </div>

    </div>

    <h1 align="center">Order History</h1>
    <hr>

    <div class="container">
       
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
    
    <?php include("footer.php"); ?> 
</body>

<script>
var upBtn = document.getElementById("upBtn");
var btn = document.getElementById("myBtn");

btn.onclick = function() {
    upBtn.style.display = "block";
    btn.style.display = "none";
}


</script>
</html>