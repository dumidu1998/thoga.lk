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
        <form action="" method="POST">
            
                <div>
                    <span class="filterTopic">Search by Username</span> <br>
                    Username :- <input type="text" name="uname" id="" placeholder="Keep Empty to view all"> <br>
                    <span style="margin-bottom:30px;font-size:28px">Filter by user types</span><br>
                    <input type="radio" name="utype" id="f" value="f"> <label for="f">Farmer</label>
                    <input type="radio" name="utype" id="b" value="b"> <label for="b">Buyer</label>
                    <input type="radio" name="utype" id="d" value="d"> <label for="d">Driver</label>
                    <input type="radio" name="utype" id="m" value="m"> <label for="m">Mentor</label>
                    <input type="reset" id="resetb" value="Reset">
                </div> 
                <button class="sbuttonp" type="submit">Process</button>
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
      <th >type</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-column="Id">1</td>
      <td data-column="Name">James</td>
      <td data-column="Username">James123</td>
      <td data-column="Email">dumidu1998@gmail.com</td>
      <td data-column="Tel">0766344989</td>
      <td data-column="type">Farmer</td>
      <td data-column="Action"><a href="">View More</a></td>
    </tr>
    <tr>
      <td data-column="Id">2</td>
      <td data-column="Name">Andor</td>
      <td data-column="Username">Andro123</td>
      <td data-column="Email">dumiduraj@gmail.com</td>
      <td data-column="Tel">0715597852</td>
      <td data-column="type">Farmer</td>
      <td data-column="Action"><a href="">View More</a></td>
    </tr>
    <tr>
      <td data-column="Id">3</td>
      <td data-column="Name">Tamas</td>
      <td data-column="Username">Andro123</td>
      <td data-column="Email">dumiduraj@gmail.com</td>
      <td data-column="Tel">0715597852</td>
      <td data-column="type">Farmer</td>
      <td data-column="Action"><a href="">View More</a></td>
    </tr>
    <tr>
      <td data-column="Id">4</td>
      <td data-column="Name">Zoli</td>
      <td data-column="Username">Andro123</td>
      <td data-column="Email">dumiduraj@gmail.com</td>
      <td data-column="Tel">0715597852</td>
      <td data-column="type">Farmer</td>
      <td data-column="Action"><a href="">View More</a></td>
    </tr>
    <tr>
      <td data-column="Id">5</td>
      <td data-column="Name">Szabi</td>
      <td data-column="Username">Andro123</td>
      <td data-column="Email">dumiduraj@gmail.com</td>
      <td data-column="Tel">0715597852</td>
      <td data-column="type">Farmer</td>
      <td data-column="Action"><a href="">View More</a></td>
      </tr>
  </tbody>
</table>
    </div>
</div>
</body>
</html>