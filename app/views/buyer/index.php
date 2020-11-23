<!DOCTYPE html>
<html lang="en">
<?php 
//tet
session_start();


// print_r($_SESSION['e_dateArray']);
$max_date = 0;
if(!empty($_SESSION['e_dateArray'])){
  foreach($_SESSION['e_dateArray'] as $keys => $values){
    $max_date =  $values['item_end_d'] ;
  break;
  }

}


    ?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="/thoga.lk/public/stylesheets/buyer/index.css">
  <link rel="stylesheet" href="/thoga.lk/public/stylesheets/buyer/shopping_Cart.css">

  <link rel="stylesheet" href="/thoga.lk/public/stylesheets/buyer/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-image: url('/thoga.lk/public/images/buyer/background.jpg');">


<?php include("navbar.php"); ?>
  

<div class="wrapper">
  <div>
    <div class="organic_container">
      <div class="btn_organic <?php if($_SERVER['REQUEST_URI']== '/thoga.lk/buyer/home') {echo $class; }?>">
        <a href="/thoga.lk/buyer/home">Organic/Non-Organic</a>
      </div>
      <div class="btn_organic <?php if($_SERVER['REQUEST_URI']== '/thoga.lk/buyer/home/organic') {echo $class; }?>">
        <a href="/thoga.lk/buyer/home/organic">Organic</a>

      </div>
     

      <div class="checkout_icon">
        <a href="checkout">
          <img width=20px align="left" src="/thoga.lk/public/images/buyer/icons/cart.png" alt="">

        </a>
      </div>

      
           
    </div>
    <div class="search">
        <form action="" method="post">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
      </div>
  
    <?php include("item_non_org.php"); ?> 
    

  
  </div>

  <?php //print_r($_SESSION["shopping_cart"]); ?>
  <div> 
    <?php
    if(isset($_SESSION['user'])){

    

    ?>
    
    <!-- shopping cart -->
    <div class="cart">
      <h1>Shopping Cart</h1>
      <hr>
      <div style="height:55vh;"> 
        <?php 
        // print_r($item_array);
        if(!empty($_SESSION["shopping_cart"]))  
        {  
           $total = 0; 
          foreach($_SESSION["shopping_cart"] as $keys => $values)  
          {  
         ?>  

        <div class="cart_item_row">
        <div class="cart_item_row-name">
          <!-- name -->
          <?php echo $values["item_name"]; ?>  
          <div class="cart_item_row-up">
            <!-- unit price -->
            Rs. <?php echo $values["item_price"] * $values["item_quantity"] ; ?>
          </div>
        </div>
        <div class="cart_item_row-quantity">
          <!-- quantity -->
            <?php echo $values["item_quantity"]; ?> kg
        </div>
        <div>
          <!-- remove -->
          <form action="/thoga.lk/buyer/cart" method="post">
            <input type="hidden" name="id" value="<?php echo $values["item_id"];?>">
            <input class="input_s" type="submit" name="action" value="delete">

          </form>
        </div>

        </div>
        <?php
        $total = $total + ($values["item_quantity"] * $values["item_price"]);  
      }
    }
      else{
          echo "<div class='emptynote'>Your Cart looks a little Empty </div>";
          $total=0;
          }
        ?>

    </div>
    <?php 
      if(!empty($_SESSION["shopping_cart"])){
        $allow = "";
      }else{
        $allow = "disabled";
      }
      ?>

      <form action="/thoga.lk/buyer/checkout" method="post">
        <div class="date">
          <label class="pickup_label" for="datefield" > Pick up date</label>
          <input id="datefield" type='date' name="pick_date" max='<?php echo $max_date ?>' required/>
  
        </div>
        
      <input type="submit" name="checkout" value="Checkout &nbsp;&nbsp; Rs: <?php echo $total?>" class="checkout_btn"  <?php echo $allow ?>  />

      </form>
          
    </div>

      <?php
    }else{
      echo "<img class='home_ad' style='margin-top:80px;' width='300px' src='/thoga.lk/public/images/buyer/ads/a.jpg' alt=>";
      echo "<img class='home_ad' style='margin-top:100px;' width='300px' src='/thoga.lk/public/images/buyer/ads/b.jpg' alt=>";
      
    }
      ?>
      
  </div>
</div>




  
<script>


function closeModal(id) {
  var mod = document.querySelector("#myModal"+id);
  mod.style.display = 'none';
  
}



function openModal(id) {
  var mod = document.querySelector("#myModal"+id);
  mod.style.display = 'block';

}

window.onclick = function(event) {
  if (event.target == mod) {
    mod.style.display = "none";
  }
}
</script>
  
<script>
var today = new Date();
var dd = today.getDate()+1;
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("datefield").setAttribute("min", today);
</script>

<?php include("footer.php"); ?>

</body>

</html>