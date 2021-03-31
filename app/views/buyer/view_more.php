<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/buyer/v_more.css">
<link rel="shortcut icon" href="/thoga.lk/images/thoga.jpg" type="image/x-icon">

    <title>Document</title>
</head>
<body >
<?php
// print_r($details);
// echo"</br>";
// print_r($driver_details);

?>

<div class="container">
<?php
foreach($driver_details as $keys => $values)  
{  
    ?>
        <h3>Order no : <?php echo $values['order_id'] ?> </h3>
        <br>
        <h4>Delivery address : </h4> <p> <?php echo $values['d_addline1']?>, <?php echo $values['d_addline2']?></p> 
        <!-- need to be done -->
        <br>
        <h4>Telephone no</h4>
        <p><?php echo $values['contact1']?></p>
        <p><?php echo $values['contact2']?></p>
        <div class="check">
            <!-- grid -->
            <div class="tbl">
                <!-- basket -->
                <h1>Order details</h1>
                <hr>
                <table style="overflow-x:auto;">
                    <tr>
                        <td class="item_name" >Order Id</td>
                        <td id="ord_id"><?php echo $values['order_id'] ?></td>
                        
                    </tr>
                    <tr>
                        <td class="item_name">Driver name</td>
                        <td><?php echo $values['firstname']?> <?php echo $values['lastname']?></td>
                        
                    </tr>
                    <tr>
                        <td class="item_name">Driver Address</td>
                        <td><?php echo $values['address_line1']?><br> <?php echo $values['address_line2']?> <br> <?php echo $values['city']?></td>
                        
                    </tr>
                    <tr>
                        <td class="item_name"> Driver Tel. No</td>
                        <td>0775509830</td>
                        
                    </tr>
                    
                </table>
            </div>
            <div class="summary">
                <!-- summery -->
                <h1>Order summary</h1>
                <hr>
                <table>
                <tr>                       
                        <td class="td_summary">Total cost</td>
                        <td>Rs <?php echo $values['total_cost']?>.00</td>
                    </tr>

                    <tr>                       
                        <td class="td_summary">Total weight</td>
                        <td><?php echo $values['weight']?> kg</td>
                    </tr>
                    <tr>                       
                        <td class="td_summary">Order Status</td>
                        <td class="item_name">on your way</td>
                    </tr>
                    <tr>                       
                        <td class="td_summary">Update status</td>
                        <td class="td_summary">Collected  <label class="switch">
                                                            <input type="checkbox" id="toggle">
                                                            <span class="slider round"></span>
                                                            </label></td>
                    </tr>

                </table>
            </div>
        </div> 
    </div> 
      
    </div>

<?php include("rate.php"); ?>

<?php
}
?>
    
    <div>
    <!-- item table -->
    <h1 align="center">Item Details</h1>
    <hr>
<div class="v_table">

    <div class="container">
        <!-- order history -->
        <table>

            <thead>
                <tr>
                <th scope="col">Item id</th>
                <th scope="col">Item name</th>
                <th scope="col">Weight</th>
                <th scope="col">Price</th>
                <th scope="col">Farmer details</th>
                <th scope="col">Action</th>
                
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($details as $keys => $values)  
                {  
                
                    ?>
            <tr>
                <td data-label="Item id"><?php echo $values['vege_id']?></td>
                <td data-label="Item name"><?php echo $values['vege_name']?></td>
                <td data-label="Weight"><?php echo $values['item_weight']?>kg </td>
                <td data-label="Price"><?php echo $values['current_price']?></td>
                <td data-label="Farmer name"><?php echo $values['firstname']?> <?php echo $values['lastname']?></td>
                <td data-label= "Farmer details" id=""><button id="myBtn">View Profile</button></td>

                </tr>

               <?php
                }
                ?>
            </tbody>
        </table>


    </div>
    
 </div>
 <button class="checkout_btn_back">Cancel Order</button>

</div>

<?php //include("profile-popup.php"); ?>

<?php include("footer.php"); ?>



</body>
</html>