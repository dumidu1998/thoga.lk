<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admins</title>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/admin/vieworders.css">
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
    <h1>Admins</h1>
    <div>
      <table>
        <button class="admin-btn1" onclick="showadd()"> New</button>
    <thead>
    <tr>
      <th width="5px">Id</th>
      <th width="20%">Username</th>
      <th width="25%">Name</th>
      <th width="25%">Tel</th>
      <th width="25%">Password</th>
      <th>Action</th>
    </tr>
    </thead>
    <tbody>
      <?php
        foreach($results as $key => $value){
                $id=$value['admin_id'];
                $uname=$value['user_name'];
                $pwd=$value['password'];
                $name=$value['name'];
                $tel=$value['tel_no'];
      ?>
      <tr>
        <td data-column="Id"><?php echo $id; ?></td>
        <td data-column="Username"><?php echo $uname; ?></td>
        <td data-column="Name"><?php echo $name; ?></td>
        <td data-column="Tel"><?php echo $tel; ?></td>
        <td data-column="Password"><?php echo "*********"; ?></td>
        <td data-column="Action"><a href="" class="actionA">Delete</a></td>
      </tr>
      <?php } ?>
    </tbody>
    </table>
    </div>

    <div id="signup" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2>Add new Admin</h2>
      <form action="addadmin" id="upload_form" method="POST" >
      <div>
          <label for="1" class="lable">Name</label>
          <input type="text" name="name" id="1">
          <label for="2" class="lable">Username</label>
          <input type="text" name="username" id="2">
          <label for="3" class="lable">Tel</label>
          <input type="text" name="tel" id="3">
          <label for="4" class="lable">Password</label>
          <input type="text" name="password" id="4">
          <input type="submit" value="Submit" name="submit" class="submit-btn" style="margin-top:0px;">
      </div>
      </form>
    </div>
    </div>


</div>
</body>
</html>

<script type="text/javascript" src="/thoga.lk/public/js/admin.js" ></script>
<script type="text/javascript" src="/thoga.lk/public/js/adupload.js" ></script>

