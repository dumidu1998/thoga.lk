<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/buyer/v_more.css">
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/buyer/rating_style.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <title>View more</title>
<link rel="shortcut icon" href="/thoga.lk/images/thoga.jpg" type="image/x-icon">

    <title>Document</title>
</head>
<body >
<?php include("navbar.php"); ?>

<div class="container">
<?php
foreach($driver_details as $keys => $values)  
{  
    ?>  <center>
        <h2>Order No : <?php echo $values['order_id'] ?> </h2></center>
        <br>
        <div style="display:flex">
            
            <h4>Delivery address : </h4> 
            <div style="margin-left:10px;margin-top:7px">
            <p> <?php echo $values['d_addline1']?> <?php echo $values['d_addline2']?></p> 
            <p><?php echo $buyer_details[0]['city'] ?>, <?php echo $buyer_details[0]['district'] ?>, </p>
            <p><?php echo $buyer_details[0]['province'] ?>.</p>
            </div>
        </div>
        <br>
        <div style="display:flex">

        <h4>Telephone no:</h4>
        <div style="margin-left:10px;margin-top:7px">

        <p><?php echo $values['contact1']?></p>
        <p><?php echo $values['contact2']?></p>
        </div>
        </div>

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
                        <td><?php echo $values['contactno1']?></td>
                        
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
                        <td class="item_name"><?php echo $values['description']?></td>
                    </tr>
                    <tr>                       
                        <td class="td_summary">Update status</td>
                        <td class="td_summary">Collected  <label class="switch">
                        <?php 
                            if($values['description']=='Completed'){
                            ?>
                            <input type="checkbox" id="toggle" checked disabled>
                            <span class="slider round"></span>
                            <?php
                            }else{
                            ?>
                            <input type="checkbox" id="toggle">
                            <span class="slider round"></span>
                            <?php
                            }
                            ?>
                            </label></td>
                    </tr>

                </table>
            </div>
        </div> 
    </div> 
      
    </div>

<?php 
// include("rate.php"); ?>

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
                foreach($farmer_details as $keys => $values)  
                {  
                
                    ?>
             <tr>
                <td data-label="Item id"><?php echo $values['item_id']?></td>
                <td data-label="Item name"><?php echo $values['vege_name']?></td>
                <td data-label="Weight"><?php echo $values['weight']?>kg </td>
                <td data-label="Price"><?php echo $values['total_cost']?></td>
                <td data-label="Farmer name"><?php echo $values['firstname']?> <?php echo $values['lastname']?></td>
                <td data-label= "Farmer details" id=""><button id="myBtn" onclick="openModal(<?php echo $values['farmer_id']; ?>)">View Profile</button></td>

                </tr>
                <div class="model1" id="farmPro<?php echo $values['farmer_id'] ?>">
                        <div class="modal-content2">
                            
                            <span class="close" onclick="closeModal(<?php echo $values['farmer_id'] ?>)">&times;</span>
                                <div class="farmer_content">

                                    <div>👨‍🌾 <?php echo $values['firstname']." ".$values['lastname'];?></div>
                                    <div>🏠 <?php echo $values['farm_name'];?></div>
                                    <br>
                                    <div>📍🖂 <?php echo $values['address_line1'];?></div>
                                    <div> &emsp;<?php echo $values['address_line2'];?></div>
                                    <div> &emsp;<?php echo $values['city'];?></div>
                                    <div> &emsp;<?php echo $values['district'];?></div>
                                    <div> &emsp;<?php echo $values['province'];?></div>
                                    <div> &emsp; <?php echo $values['zip_code'];?></div>
                                    <br>
                                    <div>📞 <?php echo $values['contactno1'];?></div>
                                    <div>📞 <?php echo $values['contactno2'];?></div>
                                </div>
                               
                                

                        </div>
                    </div>

               <?php
                }
                ?>
            </tbody>
        </table>
        
        


    </div>
    
 </div>
 <?php
    if(isset($_GET['prv']) && $_GET['prv']=1){

    }else{
        ?>
        <a href="cancelOrder?id=<?php echo $_GET['id'];?>"><button class="checkout_btn_back">Cancel Order</button></a>
<?php
    }
?>
    

</div>
<script>
    var mod;
    function closeModal(id) {
        mod = document.querySelector("#farmPro"+id);
        mod.style.display = 'none';
        
    }

    function openModal(id) {
        var mod = document.querySelector("#farmPro"+id);
        mod.style.display = 'block';

    }

    window.onclick = function(event) {
        if (event.target == mod) {
        mod.style.display = "none";
        }
    }
</script>
<script>
    var btn=document.getElementById("toggle");

    btn.onchange = function(e){
        if(e.target.checked) {
            var id=document.getElementById('ord_id').innerHTML;
            //console.log(xxx);
            $.ajax({
            url:"/thoga.lk/buyer/submitstatus",    //the page containing php script
            type: "post",    //request type,
            data: { ord_id : id},
            success:function(result){
                console.log(result);
                
            }
        });
            btn.disabled = this.checked;
        }
    }
</script>

<?php //include("profile-popup.php"); ?>

<?php include("footer.php"); ?>



</body>
</html>