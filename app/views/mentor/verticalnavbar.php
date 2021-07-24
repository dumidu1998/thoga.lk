

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="/thoga.lk/public/stylesheets/mentor/vertical.css">
</head>
<body>

      <h2>Farmer List</h2>

      <div class="card">

        <div class="container">
          
 




<!-- <div class="dropdown"> -->
  <!-- <button class="dropbtn">Farmer List</button> -->
  <!-- <div class="dropdown-content"> -->
<?php

  foreach($data as $keys => $row){
  ?>
    <h4>
      <?php 
      $farmername = $row['firstname']." ".$row['lastname'];
      ?>
      </h4>
      
      <?php
    //$fid=$row['farmer_id'];
    

  }
  ?>
    <a href="#"><?php echo $farmername; ?></a>
    
  </div>
</div>
</body>

</html>

<div class="dropdown">
  <button class="dropbtn">Farmer List</button>
  <div class="dropdown-content">
<?php
  foreach($data1 as $keys => $row){
    $farmername = $row['firstname']." ".$row['lastname'];
    $fid=$row['farmer_id'];?>
    <a href="public_profile?id=<?php echo $fid; ?>"><?php echo $farmername; ?></a>
<?php
  }
  ?>
    
  </div>
</div>