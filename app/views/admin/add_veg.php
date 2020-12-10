<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/admin/addVeg.css">

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
                <input class="price_scroll" type="number" name="" id="" value="<?php echo $values['curr_price'] ?>" readonly>
             </div>
             <div>
                    <button id="myBtn" onclick="openModal(<?php  echo $values['vege_id'] ?>)" class="edit_btn">edit</button>

             </div>
            <div class="model1" id="myModal<?php echo $values['vege_id'] ?>">
            <div class="modal-content">
                <span class="close" onclick="closeModal(<?php echo $values['vege_id'] ?>)">&times;</span>
                <form action="edit" method="post">
                    <input type="hidden" name="id" value="<?php echo $values['vege_id'] ?>">
                    <input type="hidden" name="prev_price" value="<?php echo $values['curr_price'] ?>">
                    <input type="text" name="veg_name" id="" value="<?php echo $values['vege_name'] ?>">
                    <input type="number" name="curr_price" id="" value="<?php echo $values['curr_price'] ?>">
                    <input type="submit" value="Edit" name="edit">
                    <input type="submit" value="Delete" name="del">

                </form>

            </div>
            </div>

             <?php
                 }
                 ?>
         </div>
     </div>

     <button>Add new +</button>
     <button>Edit</button>
 </div>
    
    <div class="model2">
    </div>
</body>
</html>
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