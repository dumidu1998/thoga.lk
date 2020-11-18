<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/admin/vieworders.css">
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/font-awesome.min.css" type='text/css'>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/font-awesome.css" type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
<?php 
 include("navbar.php"); 
 ?>

<div class="container">
    <h1>Orders</h1>
    
    <div class="filters">
        <form action="" method="POST">
            <div class="grid">
                <div>
                    <span class="filterTopic">Filter by Date</span><br>
                    <span>Start Date :- <input type="date"  name="filterSdate" id="FSdate"></span> <span style="display:inline-block;">  End Date :- <input type="date" name="filterEdate" id="FEdate"></span>
                    <br>
                    <input type="checkbox" class="cbox" name="ordtype" id="u" value="up"> <label for="u">Upcoming <i class="fas fa-stopwatch fa-spin" style="font-size:15px" aria-hidden="true"></i></label><br>
                    <input type="checkbox" class="cbox" name="ordtype" id="f" value="f"> <label for="f">Finished <i class="fa fa-check" style="font-size:15px;color:green;" aria-hidden="true"></i></label>

                </div> 
                <div>
                    <span class="filterTopic">Filter by Username</span> <br>
                    Username :- <input type="text" name="uname" id="" placeholder="Keep Empty to view all"> <br>
                    <input type="radio" name="utype" id="f" value="f"> <label for="f">Farmer</label>
                    <input type="radio" name="utype" id="b" value="b"> <label for="b">Buyer</label>
                    <input type="radio" name="utype" id="d" value="d"> <label for="d">Driver</label>
                    <input type="radio" name="utype" id="m" value="m"> <label for="m">Mentor</label>
                    <input type="reset" id="resetb" value="Reset">
                </div> 
            </div>
            
            <button class="sbutton" type="submit">Process</button>
        </form>
    </div>

    <div>
    <table>
  <thead>
    <tr>
      <th width="10px">Id</th>
      <th>Buyer Name</th>
      <th>Order Date / Time</th>
      <th>Total Weight</th>
      <th>Total Price</th>
      <th width="10px">Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  <?php 
        foreach($upcoming as $key=> $values){
    ?>
    <tr>
    <form action="/thoga.lk/admin/showorder" method="POST">
      <td data-column="Id"><?php echo $values['order_id']; ?></td>
      <td data-column="Buyer Name"><?php echo $values['firstname']." ".$values['lastname']; ?></td>
      <td data-column="Id"><?php echo $values['order_date']; ?></td>
      <td data-column="Total Weight"><?php echo number_format($values['weight']); ?> Kg</td>
      <td data-column="Total Price"> Rs. <?php echo number_format($values['total_cost'],2); ?></td>
      <td data-column="Total Price"><i class="fas fa-stopwatch fa-spin" style="font-size:22px;" aria-hidden="true"></i></i></td>
      <input type="hidden" name="order_id" value="<?php echo $values['order_id']; ?>">
      <td data-column="Action"><button type="submit" name="submit" >View More</button></td>
      </form>
    </tr>
    <?php
        }
        ?>
        <?php 
        foreach($results as $key=> $values){
    ?>
    <tr>
      <form action="/thoga.lk/admin/showorder" method="POST">
      <td data-column="Id"><?php echo $values['order_id']; ?></td>
      <td data-column="Buyer Name"><?php echo $values['firstname']." ".$values['lastname']; ?></td>
      <td data-column="Id"><?php echo $values['order_date']; ?></td>
      <td data-column="Total Weight"><?php echo $values['weight']; ?> Kg</td>
      <td data-column="Total Price"> Rs. <?php echo number_format($values['total_cost'],2); ?></td>
      <td data-column="Total Price"><i class="fa fa-check" style="font-size:30px;color:green;" aria-hidden="true"></i></td>
      <input type="hidden" name="order_id" value="<?php echo $values['order_id']; ?>">
      <td data-column="Action"><button type="submit" name="submit" >View More</button></td>
      </form>
    </tr>
    <?php
        }
        ?>
  </tbody>
</table>
    </div>
</div>
</body>
</html>

