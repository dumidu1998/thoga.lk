<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/driver/userprofile.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
</head>
<?php
$status = "disabled";
$color = "black";
$method="";

if(isset($_GET["edit"])){
    $status = "";
    $color = "red";
    $method="editprofile";
}
// if(isset($_GET["update"])){
//     // header("location:/thoga.lk/driver/profile?done");
//     $method="posjt";
//     echo "Done";
//    echo "Done"; 
//     echo "Done";
   
// }

?>

<body>


   <?php include 'navdriverdashboard.php' ;?> 
   <div class="topic">
                <h1>Driver user profile</h1>
        </div>
        <hr>
   
    <div class="wrapper">
        <div class="user_pp">
           
            <img width="300px" src="/thoga.lk/public/uploads/driverpropic/<?php echo $_SESSION['driver']['driver_id'].'.jpg'?>" alt="">
            <br><br>
            <form action="updateprofilepic" method="post" enctype="multipart/form-data">
            <input type="file" name="profpic" value="upload image">
            <br>
            <input type="submit" class="button2" value="update picture">    
            </form>
            
        </div>
        
        <div class="user_details">
          <div>
            <form action="<?php echo $method ?>" method="get">
                <div class="data_wrapper">
                    <label style="color : <?php echo $color ?>" for="">First name</label>
                    <input type="text" name="fname" <?php echo $status ?> value="<?php echo $all['firstname'] ?>"> 
                </div>

                <div class="data_wrapper">
                    <label style="color : <?php echo $color ?>" for="">Last name</label>
                    <input type="text" name="lname" <?php echo $status ?> value="<?php echo $all['lastname'] ?>" >
                </div>

                <div class="data_wrapper">
                    <label style="color : <?php echo $color ?>" for="">Email Adress</label>
                    <input type="text" name="email" disabled value="<?php echo $all['email'] ?>">
                </div>

                <div>
                    <br>
                    <label for="">Contact Numbers</label>

                </div>

                <div class="data_wrapper adress_data">
                    <div>
                        <label style="color : <?php echo $color ?>" for="">Mobile number</label>
                        <input type="text" name="mobileno1" <?php echo $status ?> value="<?php echo $all['contactno1'] ?>">

                    </div>
                    <div>
                        <label style="color : <?php echo $color ?>" for="">Mobile number</label>
                        <input type="text" name="mobileno2"<?php echo $status ?> value="<?php echo $all['contactno2'] ?>">

                    </div>
                </div>
                <div>
                    <br>
                    <label for="">Location</label>

                </div>


                
                
                <div class="data_wrapper adress_data">
                    <div>
                        <label style="color : <?php echo $color ?>" for="">Address line 1</label>
                        <input type="text" name="addr1" disabled value="<?php echo $all['NC1'] ?>">
                    </div>
                    <div>
                        <label style="color : <?php echo $color ?>" for="">Address line 2</label>
                        <input type="text" name="addr2" disabled value="<?php echo $all['NC2'] ?>">
                    </div>

                </div>
                
                <div class="data_wrapper adress_data">
                    <div>
                        <label style="color : <?php echo $color ?>" for="">City</label>
                        <input type="text" name="city" disabled value="<?php echo $all['c_name'] ?>">
                    </div>
                    <div>
                        <label style="color : <?php echo $color ?>" for="">District</label>
                        <input type="text" name="district" disabled value="<?php echo $all['d_name'] ?>">
    
                    </div>

                    
                </div>
                <div class="data_wrapper adress_data">
                    <div>
                        <label style="color : <?php echo $color ?>" for="">zip code</label>
                        <input type="text" name="zip" disabled  value="<?php echo $all['zip_code'] ?>">
                    </div>
                   
                </div>
                

                <hr>
                <br>
                <?php 
                if(isset($_GET['edit'])){
                    echo "<button type='submit' id='myBtn' name='cancel'>Cancel</button>";
                }else{
                    echo "<button type='submit' id='myBtn' name='edit'>Edit</button>";
                }
                ?>
                
                <button type='submit' name='update' class='updt_btn' <?php echo $status ?>>Update</button>
                
            </form>
            </div>
                
                <button type='button' name='update' class='updt_btn' style="width:160px"  onclick='openModal()'>Update Password</button>
        </div>
                
                
            <div>
            
                <img src="/thoga.lk/public/images/driver/index.jpg" alt="" width="210" height="430">

            </div>
            <div class="model1" id="myModal">
                    <div class="modal-content" style="height:280px;">
                        <span class="close" onclick="closeModal()">&times;</span>
                        <form action="changepwd" style="float:left" method="POST" autocomplete="new-password"  >
                            <input type="hidden" value="<?php echo $all['user_id']?>" name="id">
                            Current Password          : 
                            <input type="password" style="width:60%"  name="currentpwd" required >
                            <br>
                            New Password          : 
                            <input type="password" style="width:60%"  name="newpwd" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d\w\W]{8,}$">
                            <br>
                            
                            Confirm New Password          : 
                            <input type="password"  name="confirmpwd" style="width:60%" required  >
                            <br>
                            <center>
                                <span>password should contain minimum 8 characters and with Digits and Letters including Capital Letter</span>
                                <br>
                                <button type='submit' name='changepwd' method="post" class='updt_btn'>Submit</button>
                                <br>
                            </center>
                        </form>   
                    </div>
                </div>

    </div>

    <h1 align="center">Order History</h1>
    <hr>

    <div class="container">
       
    <table align="center">
					
					<tr>
						<th>Order No</th>
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
					<td>Rs. <?php echo number_format($tcost,2); ?> </td>
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

function success(){
	swal("SUCCESS!", "Profile updated successfully!", "success");
};
function error(){
	swal("ERROR", "Please Try Again!", "error");
};



</script>
<?php
if (isset($_GET['error']) && $_GET['error']==0 ){
    echo "<script>success();</script>";
}
if (isset($_GET['pwderror']) && $_GET['pwderror']==0 ){
    echo "<script>swal('SUCCESS!', 'Password updated successfully!', 'success');</script>";
}
if(isset($_GET['error']) && $_GET['error']==1){
    echo "<script>error();</script>";
}
?>

</html>

<script>
    function closeModal() {
        var mod = document.querySelector("#myModal");
        mod.style.display = 'none';
        
    }

    function openModal() {
        var mod = document.querySelector("#myModal");
        mod.style.display = 'block';

    }

    window.onclick = function(event) {
        if (event.target == mod) {
        mod.style.display = "none";
        }
    }
</script>