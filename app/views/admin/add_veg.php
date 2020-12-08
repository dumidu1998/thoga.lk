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
                <input type="number" name="" id="" value="<?php echo $values['curr_price'] ?>">
             </div>
             <div>
                    edit

             </div>

             <?php
                 }
                 ?>
         </div>
     </div>

     <button>Add new +</button>
     <button>Edit</button>
 </div>
    <div class="model1">
    
    </div>
    <div class="model2">
    </div>
</body>
</html>