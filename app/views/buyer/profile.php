<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="profile1.css">
</head>
<?php
$status = "disabled";
$color = "black";

if(isset($_GET["edit"])){
    $status = "enabled";
    $color = "red";
   
    
  
}
if(isset($_GET["update"])){
   
   
  
}


?>
<body>
    <?php include("navbar.php");?>

    <div class="wrapper">
        <div class="user_pp">
            <!-- img -->
            <img width="300px" src="../imgs/a.jpg" alt="">
            <input type="file" value="upload image">

        </div>
        
        <div class="user_details">
            <!-- user details -->
            <form action="Buyer_user_profile.php" method="get">
                <div class="data_wrapper">
                    <label style="color : <?php echo $color ?>" for="">first name</label>
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
                        <label style="color : <?php echo $color ?>" for="">Nearest City1</label>
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
            <!-- Advertistment -->
            <img width="300px" src="../imgs/ads/a.jpg" alt="">

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