<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/admin/addVeg.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <title>Add item</title>
</head>
<body style="margin-top:100px;background-image: url(/thoga.lk/public/images/admin/a.jpg); background-repeat:repeat;margin-top:120px">
<?php 
 include("navbar.php"); 
//  print_r($vegetables)
 ?>
 <div class="veg_container">
     <!-- veg list container -->

     <div class="scroll">
         <!-- scroll view -->

         <div class="veg_data">
             <!-- veg items -->
             <?php
                foreach($vegetables as $keys => $values){

                
             ?>
             <div>
                <h3><?php echo $values['vege_name'] ?></h3>
             </div>
             <div>
             <?php  ?>
                <span style="font-size:15px">Rs.</span> 
                <input class="price_scroll" type="number" name=""  value="<?php printf('%0.2f', $values['current_price']); ?>" readonly>
                <?php
                  $change= ($values['current_price']-$values['prev_price'])/100;
                  if ($change >= 0 ){
                    echo "<span class='changep'>+".$change."%</span>";
                  } else{
                    echo "<span class='change-'>".$change."%</span>";
                  }
                  
                  ?>

              </div>

             <div>
                    <button id="myBtn" onclick="openModal(<?php  echo $values['vege_id'] ?>)" class="edit_btn">Edit</button>

             </div>


            <div class="model1" id="myModal<?php echo $values['vege_id'] ?>">
            <div class="modal-content">
                <span class="close" onclick="closeModal(<?php echo $values['vege_id'] ?>)">&times;</span>
                <form action="edit" method="post">
                  <div class="veg_edit">
                    
                    <input type="hidden" name="id" value="<?php echo $values['vege_id'] ?>">
                    <input type="hidden" name="prev_price" value="<?php echo $values['current_price'] ?>">
                    <input type="text" name="veg_name"  value="<?php echo $values['vege_name'] ?>">
                    <input type="number" name="curr_price" value="<?php echo $values['current_price'] ?>" step="0.5">
                    <input type="submit" value="Edit" name="edit">
                    <input type="submit" value="Delete" name="del" >
                  </div>

                </form>

            </div>
            </div>

             <?php
                 }
                 ?>
         </div>
     </div>
     <button onclick="openmodalnew()">Add New +</button>
    
 </div>
    
    <div class="model2" id="model2">
    <div class="modal-content">
      <span class="close" onclick="closeModal2()">&times;</span>
      <form action="addveg" method="post">
      <input type="text" name="veg_name"  placeholder="Name" required>
      Rs. <input type="number" name="price" value="0.00" step="0.01" placeholder="12.50" required>
      <input type="submit" value="Add" name="add">
      </form>

    </div>
    </div>
</body>
</html>

<script>
  function closeModal(id) {
    var mod = document.querySelector("#myModal"+id);
    mod.style.display = 'none';
    
  }

  function closeModal2() {
    var mod = document.querySelector("#model2");
    mod.style.display = 'none';
    
  }

  function openmodalnew() {
    var mod = document.querySelector("#model2");
    mod.style.display = 'block';
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