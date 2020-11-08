<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/buyer/style.css">
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/buyer/Item_Details.css">
   
</head>
<body>
<?php
//print_r($data);
?>

<div>
<?php 
//  print_r($data);
$count=0;
$length = sizeof($data);
// echo $length;
foreach($data as $key => $value){
    $name = $value['vege_name'];
    $farmer_name = $value['firstname'];
    $id = $value['item_id'];
    $type =  $value['Item_type'];
    $min_val = $value['min_weight'];
    $avail_we = $value['avail_weight'];
    $s_date = $value['item_start'];
    $e_date = $value['item_end'];
    $price = $value['price/kg'];
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
      <img src="/thoga.lk/public/images/buyer/item.jpg" alt="Avatar" style="width:100%">
      <div class="container">
        <h4><b><?php echo $name ?></b></h4> 
        <p>Selling by farmer <?php echo $farmer_name ?>.  <br> price - Rs. <?php echo $price ?></p> 
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

      <!-- model start -->

      <div id="myModal<?php echo $id ?>" class="modal">

          <!-- Modal content -->
          <form action="/thoga.lk/buyer/cart" method="post"  >
              <div class="modal-content">
                  <span class="close" onclick="closeModal(<?= $id ?>)">&times;</span>
                  <div class="item-img">
                      <!-- image -->
                      <img src="/thoga.lk/public/images/buyer/item.jpg" alt="Avatar" style="width:60%">
                  </div>
          
                  <div class="container">
                      <div class="user-details">
                          <div>
                              <!-- name -->
                              <h1 name="name"><a href=""><?php echo $name; ?></a></h1>
                              
                          </div>
                          <div class="farmer_icon">
                              <!-- farmer name -->
                              <img width=60px src="/thoga.lk/public/images/buyer/farmer.png" alt="">
          
                              <h2><a href=""> <?php echo $farmer_name; ?></a></h2>
                          </div>
          
                      </div>
          
                      <hr>
          
                      <div class="item_des">
                          <!-- description -->
                         <p>
                         <?php echo $item_description ?> 
                         </p>               
                      </div>
                      <div class="user_address">
                          <!-- location details of the farmer -->
                          <img width="10px" src="/thoga.lk/public/images/buyer/icons/location.png" alt="">
                        <p> 388/54 waikkala nuwara eliya</p>
                      </div>
          
                     
          
                  </div>
                  <div>
                      <!-- quantity/price -->
                      <input type="hidden" name="hidden_name" value="<?php echo $name ?>" />  
                      <input type="hidden" name="hidden_price" value="<?php echo $price ?>" />  
                      <input type="hidden" name="id" value="<?php echo $id ?>" />  

                        <label for="price">Price/kg</label>
                      <input type="number" id="price" name="price" value="<?php echo $price ?>" disabled/> 
                      <label for="qnty">Quantity</label>
                      <input type="number" id="qnty" name="quantity" min="<?php echo $min_val ?>" max= "<?php echo $avail_we ?>"step= "10" class="form-control" value="<?php echo $min_val ?>" />  
                      <label for="s_date">Start Date</label>
                      <input type="text" name= "s_date" value="<?php echo $s_date ?>"/>
                      <label for="e_date">End Date</label>
                      <input type="text" name= "e_date" value="<?php echo $s_date ?>"/>

                      <button name="add_to_cart" class="checkout_btn">Add to cart</button>
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
?>
</div>


    
</body>
</html>