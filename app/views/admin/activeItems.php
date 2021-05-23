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
    <div class="table__wrapper">
        <span class="topic">Other Category Items</span>
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
            <tr>
            <td>Screen Size</th>
            <td>4.7 in</td>
            <td>5.5 in</td>
            <td>5.7 in</td>
            <td>5 in</td>
            <td>5.1 in</td>
            <td>5 in</td>
            <td>
                <button class="editbtn" onclick="openModal(1)"><i class="fas fa-edit edit-margin"></i></button>
                <a href="deletereply?id=<?php  echo $values2['reply_id'];?>"><i class="fas fa-trash"></i></a>
            </td>
            </tr>
        </tbody>
        </table>
  </div>
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
            <tr>
            <td>Screen Size</th>
            <td>4.7 in</td>
            <td>5.5 in</td>
            <td>5.7 in</td>
            <td>5 in</td>
            <td>5.1 in</td>
            <td>5 in</td>
            <td>
                <a  href="deletereply?id=<?php  echo $values2['reply_id'];?>"><i class="fas fa-trash trashbtn"></i></a>
            </td>
            </tr>
        </tbody>
        </table>
  </div>
</div>

<div class="model1" id="myModal1">
    <div class="modal-content">
        <span class="close" onclick="closeModal(1)">&times;</span>
        <center>
        <span class="head2">Other category</span> <br>   
        <span class="head3">Name</span> </center>   
        <form action="" method="">
                  <table border="0">
                    <tbody>
                    <tr>
                    <td>Select Category</td>
                    <td >
                        <select name="" id="">
                            <option value="">aaaa</option>
                            <option value="">aaaa</option>
                            <option value="">aaaa</option>
                        </select>
                    </th>
                    
                    <td width="10">
                        <button class="editbtn" onclick="openModal(1)"><i class="fas fa-check edit-margin" style="color:green;font-size:20px">Confirm</i></button>
                    </td>
                    </tr>
                </tbody>  
                  </table>
            </form>
</div>


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
  }

  window.onclick = function(event) {
    if (event.target == mod) {
      mod.style.display = "none";
    }
  }
</script>
</html>