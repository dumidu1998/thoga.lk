

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="/thoga.lk/public/stylesheets/mentor/vertical.css">
</head>
<body>

<div class="dropdown">
  <button class="dropbtn">Farmer List</button>
  <div class="dropdown-content">
<?php

  foreach($data as $keys => $row){
    $farmername = $row['firstname']." ".$row['lastname'];
    //$fid=$row['farmer_id'];
    

  }
  ?>
    <a href="#"><?php echo $farmername; ?></a>
    
  </div>
</div>
</body>

</html>