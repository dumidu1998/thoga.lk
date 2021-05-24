<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Active Vegetables</title>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/admin/forummanager.css">
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/admin/itemlist.css">
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/font-awesome.min.css" type='text/css'>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/font-awesome.css" type='text/css'>
	<link rel="shortcut icon" href="/thoga.lk/images/thoga.jpg" type="image/x-icon">

    <script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   
  crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
<?php 
 include("navbar.php"); 
 ?>

<div class="container">
    <h1>Active Items</h1>

<?php if(count($other)>0){
    ?>
    <div class="table__wrapper">
        <span class="topic">Other Category Items</span>
        <table class="table item_table" summary="This is a summary of your rad table contents.">
        <thead>
            <tr>
            <th scope="row">Name</th>
            <th scope="col">Date Added</th>
            <th scope="col">EndingDate</th>
            <th scope="col">Avail. Weight (kg)</th>
            <th scope="col">Min. Weight (kg)</th>
            <th scope="col">Unit Price</th>
            <th scope="col">Farmer Name</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($other as $key => $values){

        ?>
            <tr>
            <td><?php echo $values['other_name']?></td>
            <td><?php echo $values['item_start']?></td>
            <td><?php echo $values['item_end']?></td>
            <td><?php echo number_format($values['avail_weight'],3)?></td>
            <td><?php echo number_format($values['min_weight'],3)?></td>
            <td>Rs. <?php echo number_format($values['total_cost'],2); ?></td>
            <td><a href="userview?uid=<?php echo $values['user_id']?>" ><?php echo $values['username']?></a></td>
            <td>
                <button class="editbtn" onclick="openModal(<?php echo $values['item_id']?>)"><i class="fas fa-edit edit-margin"></i></button>
                <Button onclick="deletefn(<?php echo $values['item_id']?>)"><i class="fas fa-trash"></i></Button>
            </td>
            </tr>
            
        <?php } ?>
        </tbody>
        </table>
  </div>
  <?php } ?>

    <div class="table__wrapper">
        <span class="topic">Main Category Items</span>
        <table class="table item_table" summary="This is a summary of your rad table contents.">
        <thead>
            <tr>
            <th scope="row">Name</th>
            <th scope="col">Date Added</th>
            <th scope="col">EndingDate</th>
            <th scope="col">Avail. Weight (kg)</th>
            <th scope="col">Min. Weight</th>
            <th scope="col">Unit Price</th>
            <th scope="col">Farmer Name</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($all as $key => $values){

?>
            <tr>
            <td><?php echo $values['vege_name']?></th>
            <td><?php echo $values['item_start']?></th>
            <td><?php echo $values['item_end']?></th>
            <td><?php echo number_format($values['avail_weight'],3)?></th>
            <td><?php echo number_format($values['min_weight'],3)?></th>
            <td>Rs. <?php echo number_format($values['total_cost'],2); ?></th>
            <td><a href="userview?uid=<?php echo $values['user_id']?>" ><?php echo $values['username']?></a></th>
            <td>
            <Button onclick="deletefn(<?php echo $values['item_id']?>)" class="trashbtn"><i class="fas fa-trash"></i></Button>
            </td>
            </tr>
            <?php } ?>
        </tbody>
        </table>
  </div>
</div>
<?php foreach($other as $key => $values) {

?>
<div class="model1" id="myModal<?php echo $values['item_id']?>">
    <div class="modal-content">
        <span class="close" onclick="closeModal(<?php echo $values['item_id']?>)">&times;</span>
        <center>
        <span class="head2">Other category</span> <br>   
        <span class="head3"><?php echo $values['other_name']?></span> </center>   
        <form action="edititem" method="post">
                  <table border="0">
                    <tbody>
                    <tr>
                    <td>Select Category</td>
                    <td >
                        <select name="vegeid" id="">
                        <?php foreach($veg as $key => $values2){
                        ?>
                            <option value="<?php echo $values2['vege_id']?>"><?php echo $values2['vege_name']?></option>
                        <?php } ?>
                        </select>
                    </th>
                    <input type="hidden" name="itemid" value="<?php echo $values['item_id']?>">
                    <td width="10">
                        <button class="editbtn"><i class="fas fa-check edit-margin" style="color:green;font-size:20px">Confirm</i></button>
                    </td>
                    </tr>
                </tbody>  
                  </table>
            </form>
    </div>
</div>
<?php } ?>

</body>

<script>
    var mod;

    function closeModal(id) {
    mod = document.querySelector("#myModal"+id);
    mod.style.display = 'none';
    
  }

  function openModal(id) {
    mod = document.querySelector("#myModal"+id);
    mod.style.display = 'block';
    mod.style.zIndex="1000";
  }

  window.onclick = function(event) {
    if (event.target == mod) {
      mod.style.display = "none";
    }
  }

  function deletefn(a){
    if(confirm('Are You Sure You want to Delete this item?')){
        window.location.href = "delete_item?itemid="+a;
    }
  }
  
</script>
</html>