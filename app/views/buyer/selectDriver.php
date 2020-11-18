<!DOCTYPE html>
<html lang="en">

<?php
// require_once(__DIR__.'/../../controller/selectDriver_crtl.php');

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/buyer/chckout.css">
    <title>Driver</title>
</head>
<body style="background-image: url('/thoga.lk/public/images/buyer/background.jpg');">
    <?php include("navbar.php"); ?>

    <div class="container-driver">
        <h1>Select Driver</h1>
        <hr>
        <table>
            <tr>
                <th>Driver name</th>
                <th>weight</th>
                <th>vehicle Name</th>
                <th>Price/km</th>
                <th>max Weight</th>
            </tr>
            <tr>
                <td>Peter</td>
                <td>5 star</td>
                <td>Dimo batta</td>
                <td>35</td>
                <td>2000kg</td>
                <td><button type="submit">Select</button></td>
            </tr>
            <tr>
                <td>Kamal</td>
                <td>4 star</td>
                <td>Dimo Lokka</td>
                <td>35</td>
                <td>5000kg</td>
                <td><button type="submit">Select</button></td>
            </tr>
            <tr>
                <td>Saman</td>
                <td>3 star</td>
                <td>Canter</td>
                <td>35</td>
                <td>3000kg</td>
                <td><button type="submit">Select</button></td>
            </tr>
            <tr>
                <td>Jaya Sri</td>
                <td>5 star</td>
                <td>Canter</td>
                <td>35</td>
                <td>5000kg</td>
                <td><button type="submit">Select</button></td>
            </tr>
            </table>
            <a href="/thoga.lk/buyer/summery"><button  class="checkout_btn">Continue</button></a>

    </div>
    <?php include("footer.php"); ?>
    
</body>
</html>