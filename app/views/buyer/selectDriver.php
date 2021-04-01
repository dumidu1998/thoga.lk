<!DOCTYPE html>
<html lang="en">

<?php

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/buyer/chckout.css">
<link rel="shortcut icon" href="/thoga.lk/images/thoga.jpg" type="image/x-icon">

    <title>Driver</title>
</head>
<body>
    <?php include("navbar.php"); ?>

    <div class="container-driver">
        <h1>Select Driver</h1>
        <hr>
        <form method="get" action="summery">
        <table>
            <tr>
                <th>Driver name</th>
                <th>vehicle Name</th>
                <th>Driver City</th>
                <th>Price/km</th>
                <th>max Weight</th>
            </tr>
            <?php

// print_r($data);
if($data){
    foreach($data as $keys => $value){
    
    
    ?>
            <tr>
            
                <td><?php echo $value['firstname'] ?> <?php echo $value['lastname'] ?></td>

                <td><?php echo $value['vehicle_type'] ?></td>
                <td><?php echo $value['city_name'] ?></td>
                <td><?php echo $value['cost_km'] ?></td>
                <td><?php echo $value['maximum_weight'] ?></td>
                <td><input type="radio" id="vid" name="vehicle_id" value="<?php echo $value['vehicle_id'];?>" required>
                    <label for="select">select</label><br></td>
            </tr>
            <?php
            }
        }else{
            echo "<center>
            <h3 style='color:red' > Sorry!! </h3>
            <p style='font-weight:lighter'>we dont have any available Drivers.</p>
            <p> If you continue you will pickup by your self </p>
            </center>";
        }
            ?>
           
            </table>
            <button class="checkout_btn">Continue</button>
        </form>

    </div>
    <?php include("footer.php"); ?>
    
</body>
</html>