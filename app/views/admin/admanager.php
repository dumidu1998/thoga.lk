<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ad Manager</title>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/admin/vieworders.css">
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/font-awesome.min.css" type='text/css'>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/font-awesome.css" type='text/css'>
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
    <h1>Advertisement Manager</h1>
    <div>
      <table>
        <button class="admin-btn " id="myBtn" onclick="showadd()">Post New</button>
    <thead>
    <tr>
      <th width="5px">Id</th>
      <th width="20%">Caption</th>
      <th width="25%">Company</th>
      <th width="15px">Position</th>
      <th width="10px" >Status</th>
      <th width="100px" >Preview</th>
      <th>Action</th>
    </tr>
    </thead>
    <tbody>
      <?php
        foreach($ads as $key => $value){
          $id= $value['ad_id'];
          $caption=  $value['ad_caption'];
          $company= $value['company'];
          $position= $value['position'];
          $status= $value['status'];
      ?>
      <tr>
        <td data-column="Id"><?php echo $id; ?></td>
        <td data-column="Caption"><?php echo $caption; ?></td>
        <td data-column="Company"><?php echo $company; ?></td>
        <td data-column="Position"><?php echo $position; ?></td>
        <td data-column="Status"><?php echo ($id==1?"Active":"Disabled"); ?></td>
        <td class="centerit" data-column="Preview"><img src="<?php echo "/thoga.lk/public/uploads/ads/AD_".$id.".jpg" ?>" alt="<?php echo $caption;?>" class="preview"></td>
        <td data-column="Action"><a href="" class="actionA">Disable</a><a href="" class="actionA">Delete</a></td>
      </tr>
      <?php } ?>
    </tbody>
    </table>
    </div>

    <div id="signup" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2>Add new Post</h2>
      <form action="adsubmit" id="upload_form" method="POST" enctype="multipart/form-data">
      <div>
          <label for="1" class="lable">Caption</label>
          <input type="text" name="caption" id="1">
          <label for="2" class="lable">Company</label>
          <input type="text" name="company" id="2">
          <label for="3" class="lable">Position</label>
          <select id="3" name="position">
            <option value="Vertical">Vertical</option>
            <option value="Horizontal">Horizontal</option>
          </select><br>
          <label for="file" class="lable">Image</label>
          <input type="file" name="file" id="file" onchange="uploadAd()">
          <progress id="progressBar" value="0" max="100" style="width:150px;"></progress>
          <u id="status" style="font-size:10px"></u>
          <u id="loaded_n_total" style="font-size:10px"></u><br>
          <input type="submit" value="Submit" class="submit-btn">
      </div>
      </form>
    </div>
    </div>


</div>
</body>
</html>

<script type="text/javascript" src="/thoga.lk/public/js/admin.js" ></script>
<script type="text/javascript" src="/thoga.lk/public/js/adupload.js" ></script>
<script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   
  crossorigin="anonymous"></script>
