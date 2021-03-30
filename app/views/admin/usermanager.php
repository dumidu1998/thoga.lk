<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Manager</title>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/admin/vieworders.css">
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/font-awesome.min.css" type='text/css'>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/font-awesome.css" type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
<?php 
 include("navbar.php"); ?>

<div class="container">
    <h1>User Manager</h1>
    <div class="filters">
        <form action="" method="get">
            
                <div>
                    <span class="filterTopic">Search by Username</span> <br>
                    Username :- <input type="text" name="uname" id="" placeholder="Keep Empty to view all"> <br>
                    <span style="margin-bottom:30px;font-size:28px">Filter by user types</span><br>
                    <input type="radio" name="utype" id="f" value="farmer"> <label for="f">Farmer</label>
                    <input type="radio" name="utype" id="b" value="buyer"> <label for="b">Buyer</label>
                    <input type="radio" name="utype" id="d" value="driver"> <label for="d">Driver</label>
                    <input type="radio" name="utype" id="m" value="mentor"> <label for="m">Mentor</label>
                    <input type="reset" id="resetb" value="Reset">
                </div> 
                <button class="sbuttonp" type="submit" name='process'>Process</button>
            </div>
            
        </form>
    </div>

    <div>
    <table>
  <thead>
    <tr>
      <th width="10px">Id</th>
      <th>Name</th>
      <th>Username</th>
      <th>Email</th>
      <th >Tel</th>
      <th >Type</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($users as $key=>$values){
      ?>
    <tr>
        <td data-column="Id"><?php echo $values['user_id'];?></td>
        <td data-column="Name"><?php echo $values['firstname']." ".$values['lastname'];?></td>
        <td data-column="Username"><?php echo $values['username'];?></td>
        <td data-column="Email"><?php echo $values['email'];?></td>
        <td data-column="Tel"><?php echo $values['contactno1'];?></td>
        <td data-column="type"><?php echo $values['user_type'];?></td>
        <td data-column="Action"><a href="userview?uid=<?php echo $values['user_id'];?>"><button type="submit" name="submit" >View More</button></a></td>
    </tr>
    <?php } ?>
    <?php

        if (count($users)==0 ){
          echo "<td colspan='7' ><center>No any maching users<center></td>";

        }
        ?>
    
  </tbody>
</table>
    </div>
</div>
</body>
</html>