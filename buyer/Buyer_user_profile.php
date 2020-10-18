<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="b_user_profile.css">
</head>
<?php

if(isset($_GET["edit"])){
  
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
            <!-- <form action="Buyer_user_profile.php" method="get"> -->
                <div class="data_wrapper">
                    <label for="">first name</label>
                    <input type="text" disabled>
                </div>

                <div class="data_wrapper">
                    <label for="">Last name</label>
                    <input type="text" disabled>
                </div>

                <div class="data_wrapper">
                    <label for="">Email Adress</label>
                    <input type="text" disabled>
                </div>

                <div>
                    <br>
                    <label for="">Contact Numbers</label>

                </div>

                <div class="data_wrapper adress_data">
                    <div>
                        <label for="">Mobile number</label>
                        <input type="text" disabled>

                    </div>
                    <div>
                        <label for="">Mobile number</label>
                        <input type="text" disabled>

                    </div>
                </div>
                <div>
                    <br>
                    <label for="">Location</label>

                </div>


                <div class="data_wrapper adress_data">
                    <div>
                        <label for="">Farm no</label>
                        <input type="text" disabled>

                    </div>
                    <div>
                        <label for="">District</label>
                        <input type="text" disabled>

                    </div>
                </div>
                
                
                <div class="data_wrapper adress_data">
                    <div>
                        <label for="">City</label>
                        <input type="text" disabled>
                    </div>

                    <div>
                        <label for="">zip code</label>
                        <input type="text" disabled>
                    </div>
                    
                </div>
                <div class="data_wrapper adress_data">
                    <div>
                        <label for="">Nearest City1</label>
                        <input type="text" disabled>
                    </div>
                    <div>
                        <label for="">Nearest City 2</label>
                        <input type="text" disabled>
                    </div>

                </div>


                <button id="myBtn">Edit</button>

            <!-- </form> -->

        </div>

        <div  id="myModal" class="modal">
            <!-- user details -->
            <div class="modal-content">
            <span class="close">&times;</span>


                <form action="Buyer_user_profile.php" method="get">
                    <div class="data_wrapper">
                        <label for="">name</label>
                        <input type="text" disabled>
                    </div>
    
                    <div class="data_wrapper">
                        <label for="">name</label>
                        <input type="text" disabled>
                    </div>
    
                    <div class="data_wrapper">
                        <label for="">name</label>
                        <input type="text" disabled>
                    </div>
    
                    <div class="data_wrapper">
                        <label for="">name</label>
                        <input type="text" disabled>
                    </div>
    
                    <div class="data_wrapper">
                        <label for="">name</label>
                        <input type="text" disabled>
                    </div>
    
                    <div class="data_wrapper">
                        <label for="">name</label>
                        <input type="text" disabled>
    
                    </div>

                    <div class="data_wrapper">
                        <input type="submit" value="ddds">
    
                    </div>
    
    
                </form>

            </div>

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
                <td >Visa - 3412</td>
                <td >02/01/2016</td>
                <td >$842</td>
                <td >01/01/2016 - 01/31/2016</td>
                <td >$1,190</td>
                <td> <button type="submit">view more</button> </td>

                </tr>

                <tr>
                <td >Visa - 3412</td>
                <td >02/01/2016</td>
                <td >$842</td>
                <td >01/01/2016 - 01/31/2016</td>
                <td >$1,190</td>
                <td> <button type="submit">view more</button> </td>

                </tr>
                
                <tr>
                <td >Visa - 3412</td>
                <td >02/01/2016</td>
                <td >$842</td>
                <td >01/01/2016 - 01/31/2016</td>
                <td >$1,190</td>
                <td> <button type="submit">view more</button> </td>

                </tr>
            </tbody>
        </table>


    </div>
    
</body>

<script>
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>
</html>

-