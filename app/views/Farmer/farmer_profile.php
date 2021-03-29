
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


   <?php include 'profilenavbar.php';?> 

   
    <div class="wrapper">
        <div class="user_pp">
            <!-- img -->
            <img width="300px" src="/thoga.lk/public/images/Farmer/a.jpg" alt="">
            <input type="file" value="upload image">

        </div>
        
        <div class="user_details">
            <!-- user details -->
            <form action="<?php echo $method ?>" method="get">
                <div class="data_wrapper">
                    <label style="color : <?php echo $color ?>" for="">First name</label>
                    <input type="text" <?php echo $status ?> value="<?php echo $all['firstname'] ?>"> 
                </div>

                <div class="data_wrapper">
                    <label style="color : <?php echo $color ?>" for="">Last name</label>
                    <input type="text" <?php echo $status ?> value="<?php echo $all['lastname'] ?>" >
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
                        <label style="color : <?php echo $color ?>" for="">Farm Name</label>
                        <input type="text" name="farmname" disabled value="<?php echo $all['farm_name'] ?>">

                    </div>
                    <div>
                        <label style="color : <?php echo $color ?>" for="">District</label>
                        <input type="text" name="district" disabled value="<?php echo $all['name_en'] ?>">

                    </div>
                </div>
                
                
                <div class="data_wrapper adress_data">
                    <div>
                        <label style="color : <?php echo $color ?>" for="">City</label>
                        <input type="text" name="city" disabled value="<?php echo $all['name_en'] ?>">
                    </div>

                    <div>
                        <label style="color : <?php echo $color ?>" for="">zip code</label>
                        <input type="text" name="zip" disabled  value="<?php echo $all['zip_code'] ?>">
                    </div>
                    
                </div>
                <div class="data_wrapper adress_data">
                    <div>
                        <label style="color : <?php echo $color ?>" for="">Nearest City 1</label>
                        <input type="text" name="nr1" disabled  value="<?php echo $all['nearestcity1'] ?>">
                    </div>
                    <div>
                        <label style="color : <?php echo $color ?>" for="">Nearest City 2</label>
                        <input type="text" name="nr2" disabled  value="<?php echo $all['nearestcity2'] ?>">
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

    <h1 align="center">Order History</h1>
    <hr>

    <div class="container">
        <!-- order history -->
        <table>

            <thead>
                <tr>
                <th scope="col">Order id</th>
                <th scope="col">Buyer Name</th>
                <th scope="col">Pickup date</th>
                <th scope="col">Total weight</th>
                <th scope="col">Total Price</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td data-label="Order id">Visa - 3412</td>
                <td data-label="Buyer Name">Akila de silva</td>
                <td data-label="Pickup date">01/11/2020</td>
                <td data-label="Total Weight">2500kg</td>
                <td data-label= "Total Price">$1,190</td>
                <td data-label> <button type="submit">view more</button> </td>

                </tr>

                <tr>
                <td data-label="Order id">Visa - 3412</td>
                <td data-label="Buyer Name">Akila de silva</td>
                <td data-label="Pickup date">01/11/2020</td>
                <td data-label="Total Weight">2500kg</td>
                <td data-label= "Total Price">$1,190</td>
                <td data-label> <button type="submit">view more</button> </td>

                </tr>
                
                <tr>
                <td data-label="Order id">Visa - 3412</td>
                <td data-label="Buyer Name">Akila de silva</td>
                <td data-label="Pickup date">01/11/2020</td>
                <td data-label="Total Weight">2500kg</td>
                <td data-label= "Total Price">$1,190</td>
                <td> <button type="submit">view more</button> </td>

                </tr>
            </tbody>
        </table>


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