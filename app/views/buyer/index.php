<!DOCTYPE html>
<html lang="en">
<?php 
//tet



// print_r($_SESSION['e_dateArray']);
$max_date = 0;
if(!empty($_SESSION['e_dateArray'])){
  foreach($_SESSION['e_dateArray'] as $keys => $values){
    $max_date =  $values['item_end_d'] ;
  break;
  }

}
print_r($vegeSet);

    ?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="/thoga.lk/public/stylesheets/buyer/index.css">
  <link rel="stylesheet" href="/thoga.lk/public/stylesheets/buyer/shopping_Cart.css">
  <link rel="shortcut icon" href="/thoga.lk/images/thoga.jpg" type="image/x-icon">
  

  <link rel="stylesheet" href="/thoga.lk/public/stylesheets/buyer/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


<?php include("navbar.php"); ?>
  

<div class="wrapper">
  <div>
    <div class="organic_container">
      <div class="<?php if($_SERVER['REQUEST_URI']== '/thoga.lk/buyer/home') {echo $class; }?> btn_organic ">
        <a href="/thoga.lk/buyer/home">Organic/Non-Organic</a>
      </div>
      <div class=" <?php if($_SERVER['REQUEST_URI']== '/thoga.lk/buyer/home/organic') {echo $class; }?> btn_organic ">
        <a href="/thoga.lk/buyer/home/organic">Organic</a>

      </div>
     

      <div class="checkout_icon">
        
          <img id="cart" width=20px align="left" src="/thoga.lk/public/images/buyer/icons/cart.png" alt="">

        
      </div>

      
           
    </div>
    <div class="search">
        
        <input type="text" id="myInput" onkeyup="search()" placeholder="Search for names.." title="Type in a name">

        <ul id="myUL" style="display: none;">
          <?php
          foreach($vege_names as $keys => $values){
            
            echo "<li><a href='home?search=".$values['vege_id']."'>".$values['vege_name']."</a></li>";
          }
          ?>
         
        </ul>
        
    </div>
      <?php
      if(isset($_GET['search'])){

      }else{

      
      if(isset($_SESSION['user'])){
        foreach($_SESSION['user'] as $key => $values){

        
      
      ?>
      <center>
      <h2 style = "color : #253e30"><?php echo $values['d_name'] ?></h2>
      </center>
      <?php include("items_home.php"); ?> 
      <center>
      <h2 style = "color : #253e30"><?php echo $values['n1'] ?> <span style = "color : #2e5f3e; font-size :12px">(Nearest city)</span> </h2>
      </center>
      <?php include("items_city1.php"); ?> 
      <center>
      <h2 style = "color : #253e30"><?php echo $values['n2']  ?> <span style = "color : #2e5f3e; font-size :12px">(Nearest city)</span></h2>
      </center>
      <?php include("items_city2.php"); ?> 
      <?php
      }
    }
  }
      ?>
      <center>
      <h2 style = "color : #253e30">All island</h2>
      </center>

      <?php include("item_non_org.php"); ?> 

    

  
  </div>

  <?php //print_r($_SESSION["shopping_cart"]); ?>
  <div> 
    <?php
    if(isset($_SESSION['user'])){
    // print_r($_SESSION['user']);

    ?>
    
    <!-- shopping cart -->
    <div class="cart" id="shop_cart">
      <span id="close_cart" class="close_cart">&times;</span>
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
<script>
var model = document.getElementById("shop_cart");
var btn = document.getElementById("cart");
var close = document.getElementById("close_cart");
btn.onclick = function(){
  model.style.display="block";
}
close.onclick= function(){
  model.style.display="none";
}
</script>


<script>
function search() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    ul.style.display = 'block';
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
    function cancelSearch(){
      ul = document.getElementById("myUL");
      ul.style.display="none";
  
}
}
</script>

<?php include("footer.php"); ?>

</body>

</html>