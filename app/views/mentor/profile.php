
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/Farmer/farmer_profile.css">
</head>
<?php
$status = "disabled";
$color = "black";
$method = "";

if(isset($_GET["edit"])){
    $status = "enabled";
    $color = "red";
    $method = "editprofile";
   
    
  
}
if(isset($_GET['error']) && $_GET['error']==1){
    echo"<script>alert('Error Occured!. Try again');</script>";
}
?>

<body>


   <?php include 'navbar_dash.php';?> 

   
    <div class="wrapper">
    <div class="user_pp">
            <!-- img -->
            <img width="300px" src="/thoga.lk/public/uploads/mentorpropic/<?php echo $_SESSION['user'][0]['user_id'].'.jpg'?>" alt="">

            <br><br>
            <form action="updateprofilepic" method="post" enctype="multipart/form-data">
            <input type="file" name="profpic" value="upload image">
            <br>
            <input type="submit" class="button2" value="update picture">    
            </form>

        </div>
        <div class="user_details">
            <!-- user details -->
            <form action="<?php echo $method ?>" method="get">
                <div class="data_wrapper">
                    <label style="color : <?php echo $color ?>" for="">First name</label>
                    <input type="text" <?php echo $status ?> name="fname" value="<?php echo $all['firstname'] ?>"> 
                </div>

                <div class="data_wrapper">
                    <label style="color : <?php echo $color ?>" for="">Last name</label>
                    <input type="text" <?php echo $status ?> name="lname" value="<?php echo $all['lastname'] ?>" >
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
                        <input type="text" name="mobileno2" <?php echo $status ?> value="<?php echo $all['contactno2'] ?>">

                    </div>
                </div>
                <div>
                    <br>
                    <label for="">Location</label>

                </div>

                <div class="data_wrapper adress_data">
                    <div>
                        <label style="color : <?php echo $color ?>" for="">Address line 1</label>
                        <input type="text" name="addr1" disabled value="<?php echo $all['address_line1'] ?>">
                    </div>
                    <div>
                        <label style="color : <?php echo $color ?>" for="">Address line 2</label>
                        <input type="text" name="addr2" disabled value="<?php echo $all['address_line2'] ?>">
                    </div>

                </div>




                <div class="data_wrapper adress_data">
                    
                    <div>
                        <label style="color : <?php echo $color ?>" for="">District</label>
                        <input type="text" name="district" disabled value="<?php echo $all['district'] ?>">

                    </div>
                </div>
                
                
                <div class="data_wrapper adress_data">
                    <div>
                        <label style="color : <?php echo $color ?>" for="">City</label>
                        <input type="text" name="city" disabled value="<?php echo $all['city'] ?>">
                    </div>

                    <div>
                        <label style="color : <?php echo $color ?>" for="">zip code</label>
                        <input type="text" name="zip" disabled  value="<?php echo $all['zip_code'] ?>">
                    </div>
                    
                </div>
                <div class="data_wrapper adress_data">
                    <div>
                        <label style="color : <?php echo $color ?>" for="">Nearest City 1</label>
                        <input type="text" name="nr1" disabled  value="<?php echo $all['NS1'] ?>">
                    </div>
                    <div>
                        <label style="color : <?php echo $color ?>" for="">Nearest City 2</label>
                        <input type="text" name="nr2" disabled  value="<?php echo $all['NS2'] ?>">
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

        <div>
            <!-- Advertistment -->
            <img width="400px" src="/thoga.lk/public/images/Farmer/add.jpg" alt="">

        </div>

    </div>

    
    

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