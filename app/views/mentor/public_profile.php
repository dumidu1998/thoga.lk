<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/Farmer/farmer_profile.css">
<link rel="shortcut icon" href="/thoga.lk/images/thoga.jpg" type="image/x-icon">

</head>


<body>


   <?php include 'navbar_dash.php';?> 

   
    <div class="wrapper">
        <div class="user_pp">
            <!-- img -->
            <img width="300px" src="/thoga.lk/public/images/Farmer/a.jpg" alt="">
            <input type="file" value="upload image">

        </div>
        
        <div class="user_details">
            <!-- user details -->
            <form action="view_public_profile" method="get">
            <?php
            foreach($data as $keys =>$row){
                $fname=$row['firstname'];
                $lname=$row['lastname'];
                $email=$row['email'];
                $mobilenumber1=$row['contactno1'];
                $mobilenumber2=$row['contactno2'];
                $farmname=$row['farm_name'];
                $district=$row['name_en'];
                $zipcode=$row['zip_code'];
                $addressline1=$row['address_line1'];
                $addressline2=$row['address_line2'];

        
            }
            ?>
                <div class="data_wrapper">
                    <label for="firstname">First name</label>
                    <input type="text" value="<?php echo $fname?>"disabled> 
                </div>

                <div class="data_wrapper">
                    <label for="lastname">Last name</label>
                    <input type="text"  value="<?php echo $lname?>"disabled>
                </div>

                <div class="data_wrapper">
                    <label for="email">Email Adress</label>
                    <input type="text"  value="<?php echo $email?>"disabled>
                </div>

                <div>
                    <br>
                    <label for="contactnumber">Contact Numbers</label>

                </div>

                <div class="data_wrapper adress_data">
                    <div>
                        <label for="mobilenumber1">Mobile number</label>
                        <input type="text"  value="<?php echo $mobilenumber1?>"disabled>

                    </div>
                    <div>
                        <label for="mobilenumber2">Mobile number</label>
                        <input type="text"  value="<?php echo $mobilenumber2?>"disabled>

                    </div>
                </div>
                <div>
                    <br>
                    <label for="location">Location</label>

                </div>


                <div class="data_wrapper adress_data">
                    <div>
                        <label for="farmname">Farm Name</label>
                        <input type="text"  value="<?php echo $farmname?>"disabled>

                    </div>
                    <div>
                        <label for="district">City</label>
                        <input type="text"  value="<?php echo $district?>"disabled>

                    </div>
                </div>
                <div class="data_wrapper adress_data">
                    <div>
                        <label for="zipcode">Zip Code</label>
                        <input type="text"  value="<?php echo $zipcode?>"disabled>

                    </div>
                    
                    </div>
                
                
                <div class="data_wrapper adress_data">
                    <div>
                        <label for="addressline1">Address Line 1</label>
                        <input type="text"  value="<?php echo $addressline1?>"disabled>
                    </div>
                    <div>
                        <label for="addressline2">Address Line 2</label>
                        <input type="text"  value="<?php echo $addressline2?>"disabled >
                    </div>

                </div>

                

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