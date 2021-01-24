<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/buyer/style.css">
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/buyer/Item_Details.css">
   
</head>
<body>


<div>
<?php 
 //print_r($data[0]);
 
$count=0;
$length = sizeof($data_home);
// echo $length;
foreach($data_home as $key => $value){
    $name = $value['vege_name'];
    $farmer_name = $value['firstname'];
    $id = $value['item_id'];
    $type =  $value['Item_type'];
    $min_val = $value['min_weight'];
    $avail_we = $value['avail_weight'];
    $s_date = $value['item_start'];
    $e_date = $value['item_end'];
    $price = $value['total_cost'];
    $farmer_id = $value['farmer_Id'];
    $mentor_id = $value['mentor_Id'];
    $item_description = $value['item_des'];

    //echo $item_description;

  //  echo $name;
   if($count%3==0){
    echo "<div class='card-group'>";
    }

    
    $count++;
?>


  <!-- card start -->
    <div class="card">
      <img src="/thoga.lk/public/images/vegetables/<?php echo $name ?>.jpg" alt="Avatar" style="width:100%; height:150px">
      <div class="container">
        <h2><b><?php echo $name ?></b></h2> 
        <p>Selling by farmer <?php echo $farmer_name ?>.</p>   
        <h4>Price - Rs. <?php echo $price ?></h4>
      </div>
      <?php
        if($type=="org"){
          ?>
          <div class="org_icon"> 
            <img width=30px style="margin-left:20px;" src="/thoga.lk/public/images/buyer/icons/org.png" alt="">
          </div>
       <?php 
       }
      ?>
      <div>
          <button id="myBtn" onclick="openModal(<?php echo $id ?>)">View Details</button>
      </div>


      <div id="myModal<?php echo $id ?>" class="modal">

          <!-- Modal content -->
          <form action="/thoga.lk/buyer/cart" method="post"  >
              <div class="modal-content">
                  <div class="item-img">

                      <!-- image -->
                      <img src="/thoga.lk/public/images/vegetables/<?php echo $name ?>.jpg" alt="Avatar" style="width:60%">

                      <div class="user-details">
                          <div>
                              <!-- name -->
                              <h1 name="name"><a href=""><?php echo $name; ?></a></h1>
                              <div class="farmer_icon">
                                <img width=40px src="/thoga.lk/public/images/buyer/icons/farmer.png" alt="">
                                <h3 float=left><a href=""> <?php echo $farmer_name . " ". $value['lastname'] ; ?></a></h3>
                              </div>
                                  <div class="user_address">
                            <!-- location details of the farmer -->
                                        <img width="20px" height="70px" src="/thoga.lk/public/images/buyer/icons/location.png" alt="">
                                      <p><?php echo $value['address_line1'] . " </br>" . $value['address_line2'] . "</br> " .$value['city'] . " </br> ". $value['province']; ?> </p>
                                    </div>
                              
                          </div>          
                      </div>
                  </div>
          
                  <div>
                      <span class="close" onclick="closeModal(<?= $id ?>)">&times;</span>
                      <div class="item_des">
                          <!-- description -->
                         <p>
                         <?php echo $item_description ?> 
                         </p>               
                      </div>

                      <!-- quantity/price -->
                      <div class="item_data">
                        
                        <input type="hidden" name="hidden_name" value="<?php echo $name ?>" />  
                        <input type="hidden" name="hidden_price" value="<?php echo $price ?>" />  
                        <input type="hidden" name="id" value="<?php echo $id ?>" />  
                        <input type="hidden" name="distric" value="<?php echo $value['distric'] ?>" />  
  
                          <label for="price">Price/kg</label>
                        <input type="number" id="price" name="price" value="<?php echo $price ?>" disabled/> 
                        <label for="qnty">Quantity</label>
                        <input type="number" id="qnty" name="quantity" min="<?php echo $min_val ?>" max= "<?php echo $avail_we ?>"step= "10" class="form-control" value="<?php echo $min_val ?>" />  
                        <label for="s_date">Start Date</label>
                        <input type="date" id="s_date"  name="s_date" value="<?php echo $s_date ?>" readonly="readonly" />
                        <label for="e_date">End Date</label>
                        <input type="date" id="e_Date" name="e_date" value="<?php echo $e_date ?>"  />
                      </div>

                      <?php 
                        if(isset($_SESSION['user'])){
                            if(!empty($_SESSION['shopping_cart'])){
                                if($_SESSION['shopping_cart'][0]['disctrict'] != $value['distric']){
                                 echo "<button onclick = 'error_differentdis()' class='checkout_btn'>Add to cart</button>";
      
                                }else{
                                    echo "<button name='add_to_cart' class='checkout_btn'>Add to cart</button>";
                                }
                            
                            }
                            else{
                                echo "<button name='add_to_cart' class='checkout_btn'>Add to cart</button>";

                            }

                        }else{
                      echo "<button onclick = 'error()' class='checkout_btn'>Add to cart</button>";
                          
                        }

                      ?>

                      <script>
                        function error(){
                          alert("You are not logged in! please Log in and start shopping");
                        }
                        function error_differentdis(){
                          alert("Items should be from the same district");
                        }
                      </script>
                  </div>
                  
              </div>

          </form>

        </div>


      <!-- model end -->
    </div>
    <!-- card end -->

  <?php  
if($count%3==0){
    echo "</div>";
}elseif($count==$length){
    echo "</div>";

}


}
if($count==0)
{
echo"<center><p style='font-weight:lighter; font-size:12px;'> Sorry Currently items are not available in this are </p></center>";
}
?>
</div>



    
</body>
</html>