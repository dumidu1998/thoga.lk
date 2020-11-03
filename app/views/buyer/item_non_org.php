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

$id1 = 101;
$price = 1000;
$min_val = 200;
$avail_we = 300;
$d="31-10-2020";




$id2 =200;


?>


<?php 

foreach($data as $key => $value){
    $name = $value['vege_name'];
   echo $name;
    
}
?>


<div class="card-group">
  <!-- card start -->
    <div class="card">
      <img src="/thoga.lk/public/images/buyer/item.jpg" alt="Avatar" style="width:100%">
      <div class="container">
        <h4><b>Carrot</b></h4> 
        <p>Selling by farmer Dumidu price:- 40/kg</p> 
      </div>
      <div>
          <button id="myBtn" onclick="openModal(<?php echo $id1 ?>)">View Details</button>
      </div>

      <!-- model start -->

      <div id="myModal<?php echo $id1 ?>" class="modal">

          <!-- Modal content -->
          <form action="index.php" method="get"  >
              <div class="modal-content">
                  <span class="close" onclick="closeModal(<?= $id1 ?>)">&times;</span>
                  <div class="item-img">
                      <!-- image -->
                      <img src="/thoga.lk/public/images/buyer/item.jpg" alt="Avatar" style="width:60%">
                  </div>
          
                  <div class="container">
                      <div class="user-details">
                          <div>
                              <!-- name -->
                              <h1 name="name"><a href="">Carrot</a></h1>
                              
                          </div>
                          <div class="farmer_icon">
                              <!-- farmer name -->
                              <img width=60px src="/thoga.lk/public/images/buyer/farmer.png" alt="">
          
                              <h2><a href="">Dumidu Kasun</a></h2>
                          </div>
          
                      </div>
          
                      <hr>
          
                      <div class="item_des">
                          <!-- description -->
                          This is great carrot from nuwaraeliya nuwaraeliya is a best city to crop plants
                      </div>
                      <div class="user_address">
                          <!-- location details of the farmer -->
                          <img src="/thoga.lk/public/images/buyer/icons/location.png" alt="">
                        <p> 388/54 waikkala nuwara eliya</p>
                      </div>
          
                      <!-- <div class="user_no">
                          location details of the farmer
                          <img src="../imgs/icons/telephone.png" alt="">
                        <p> 0775509830</p>
                      </div> -->
          
                  </div>
                  <div>
                      <!-- quantity/price -->
                      <input type="hidden" name="hidden_name" value="Carrot" />  
                      <input type="hidden" name="hidden_price" value="100" />  
                      <input type="hidden" name="id" value="<?php echo $id1 ?>" />  

                        <label for="price">Price/kg</label>
                      <input type="number" id="price" name="price" value="100" disabled/> 
                      <label for="qnty">Quantity</label>
                      <input type="number" id="qnty" name="quantity" min="<?php echo $min_val ?>" max= "<?php echo $avail_we ?>"step= "10" class="form-control" value="<?php echo $min_val ?>" />  
                      <label for="s_date">Start Date</label>
                      <input type="text" name= "s_date" value="<?php echo $d ?>"/>
                      <label for="e_date">End Date</label>
                      <input type="text" name= "e_date" value="<?php echo $d ?>"/>

                      <button name="add_to_cart" class="checkout_btn">Add to cart</button>
                  </div>
                  
              </div>

          </form>

        </div>


      <!-- model end -->
    </div>
    <!-- card end -->

    <div class="card">
      <img src="/thoga.lk/public/images/buyer/item.jpg" alt="Avatar" style="width:100%">
      <div class="container">
        <h4><b>Carrot</b></h4> 
        <p>Selling by farmer Dumidu price:- 40/kg</p> 
      </div>
      <div>
          <button onclick="openModal(<?php echo $id2 ?>)" id="myBtn">View Details</button>
      </div>

      <!-- model start -->

      <div id="myModal<?php echo $id2 ?>" class="modal">

          <!-- Modal content -->
          <form action="index.php" method="get"  2>
              <div class="modal-content">
                  <span class="close" onclick="closeModal(<?= $id2 ?>)">&times;</span>
                  <div class="item-img">
                      <!-- image -->
                      <img src="/thoga.lk/public/images/buyer/item.jpg" alt="Avatar" style="width:60%">
                  </div>
          
                  <div class="container">
                      <div class="user-details">
                          <div>
                              <!-- name -->
                              <h1 name="name"><a href="">Carrot</a></h1>
                              
                          </div>
                          <div class="farmer_icon">
                              <!-- farmer name -->
                              <img width=60px src="/thoga.lk/public/images/buyer/farmer.png" alt="">
          
                              <h2><a href="">Dumidu Kasun</a></h2>
                          </div>
          
                      </div>
          
                      <hr>
          
                      <div class="item_des">
                          <!-- description -->
                          This is great carrot from nuwaraeliya nuwaraeliya is a best city to crop plants
                      </div>
                      <div class="user_address">
                          <!-- location details of the farmer -->
                          <img src="/thoga.lk/public/images/buyer/icons/location.png" alt="">
                        <p> 388/54 waikkala nuwara eliya</p>
                      </div>
          
                      <div class="user_no">
                          <!-- location details of the farmer -->
                          <img src="/thoga.lk/public/images/buyer/icons/telephone.png" alt="">
                        <p> 0775509830</p>
                      </div>
          
                  </div>
                  <div>
                      <!-- quantity/price -->
                      <input type="hidden" name="hidden_name" value="Carrot" />  
                      <input type="hidden" name="hidden_price" value="100" />  
                      <input type="hidden" name="id" value="<?php echo $id2 ?>" />  


                      <input type="number" name="price" value="100" /> 
                      <input type="text" name="quantity" class="form-control" value="1" />  
                      <button name="add_to_cart" class="checkout_btn">Add to cart</button>
                  </div>
                  
              </div>

          </form>

        </div>


      <!-- model end -->
    </div>
 
</div>

    
</body>
</html>