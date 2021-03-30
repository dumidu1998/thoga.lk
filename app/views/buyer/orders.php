<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/buyer/orders.css">

    <title>Orders</title>
</head>
<body>

<?php include("navbar.php");?>

<br>

<div class="container">
<h1 align="center">Upcoming Orders</h1>
    <hr>
        <!-- Upcoming Orders -->
        <table>

            <thead>
                <tr>
                <th scope="col">Order id</th>
                <th scope="col">Driver Name</th>
                <th scope="col">Pickup date</th>
                <th scope="col">Total weight</th>
                <th scope="col" style="text-align:left ;" colspan="2">Total Price</th>
                </tr>
            </thead>
            <tbody>

            <?php
            if(empty($upcoming_orders)){
                echo "<center>
                <p style='color:red'>
                You have no Upcoming orders
                </p>
            
                </center>";
            }  else{
                foreach ($upcoming_orders as $keys => $values){

            
            ?>
            <tr>
                <td data-label="Order id"><?php echo $values['order_id']  ?></td>
                <td data-label="Buyer Name"><?php echo $values['firstname']  ?> <?php echo $values['lastname']  ?></td>
                <td data-label="Pickup date"><?php echo $values['pickup_date']  ?></td>
                <td data-label="Total Weight"><?php echo $values['weight']  ?></td>
                <td data-label= "Total Price"><?php echo $values['total_cost']  ?></td>
                <td data-label><button onclick="location.href = 'viewmore?id=<?php echo $values['order_id'];?>';" type="submit">view more</button> </td>

                </tr>
                <?php
                    }
                }
                 ?>
            </tbody>
        </table>


    </div>

<div class="container">
<h1 align="center">Previous Orders</h1>
    <hr>
        <!-- prevoius Orders -->
        <table>

            <thead>
                <tr>
                <th scope="col">Order id</th>
                <th scope="col">Driver Name</th>
                <th scope="col">Pickup date</th>
                <th scope="col">Total weight</th>
                <th scope="col" style="text-align:left ;" colspan="2">Total Price</th>
                </tr>
            </thead>
            <tbody>
            <?php
            if(empty($previous_orders)){
                echo "<center>
                <p style='color:red'>
                You have no upcoming orders
                </p>
            
                </center>";
            }  else{
                foreach ($previous_orders as $keys => $values){

            
            ?>
            <tr>
                <td data-label="Order id"><?php echo $values['order_id']  ?></td>
                <td data-label="Buyer Name"><?php echo $values['firstname']  ?> <?php echo $values['lastname']  ?></td>
                <td data-label="Pickup date"><?php echo $values['pickup_date']  ?></td>
                <td data-label="Total Weight"><?php echo $values['weight']  ?></td>
                <td data-label= "Total Price"><?php echo $values['total_cost']  ?></td>
                <td data-label><button onclick="location.href = 'viewmore?id=<?php echo $values['order_id'];?>&prv=1';" type="button">view more</button> </td>

                </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>


    </div>
    
</body>
</html>