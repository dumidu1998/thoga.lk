<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/buyer/v_more.css">
    <title>Document</title>
</head>
<body >
<?php
print_r($details);
echo"</br>";
// print_r($driver_details);

?>

<div class="container">
<?php
foreach($driver_details as $keys => $values)  
{  
    ?>
        <h3>Order no : <?php echo $values['order_id'] ?> </h3>
        <br>
        <h4>Delivery address : </h4> <p> 388/53 stage1 apura</p> 
        <!-- need to be done -->
        <br>
        <h4>Telephone no</h4>
        <p>0764229830</p>
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
                        <td>2000</td>
                    </tr>

                    <tr>                       
                        <td class="td_summary">Total weight</td>
                        <td>100 kg</td>
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
            <tr>
                <td data-label="Item id">#345</td>
                <td data-label="Item name">Carrot</td>
                <td data-label="Weight">30kg</td>
                <td data-label="Price">rs. 5000</td>
                <td data-label="Farmer name">Akila de silva</td>
                <td data-label= "Farmer details" id=""><button id="myBtn">View Profile</button></td>

                </tr>

                <tr>
                <td data-label="Item id">#349</td>
                <td data-label="Item name">Potato</td>
                <td data-label="Weight">33kg</td>
                <td data-label="Price">rs. 4519</td>
                <td data-label="Farmer name">P.B. Sumanadasa</td>
                <td data-label= "Farmer details">View profile</td>

                </tr>
                
                <tr>
                <td data-label="Item id">#333</td>
                <td data-label="Item name">Tomato</td>
                <td data-label="Weight">90kg</td>
                <td data-label="Price">rs. 23456 </td>
                <td data-label="Farmer name">K.L. Rahul</td>
                <td data-label= "Farmer details">View profile</td>

                </tr>
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