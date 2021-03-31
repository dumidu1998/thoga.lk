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
    <link rel="shortcut icon" href="/thoga.lk/images/thoga.jpg" type="image/x-icon">

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
<?php 
 include("navbar.php"); 
 ?>

<div class="container">
    <h1>Orders</h1>
    
    <div class="filters">
        <form action="" method="GET">
            <div class="grid">
                <div>
                    <span class="filterTopic">Filter by Status</span><br>
                    
                    <input type="checkbox" class="cbox" name="ordtypeu" id="u" value="up" <?php echo (isset($get['ordtypeu']) && $get['ordtypeu']=='up')? 'checked': ''  ?> > <label for="u">Upcoming <i class="fas fa-stopwatch fa-spin" style="font-size:15px" aria-hidden="true"></i></label><br>
                    <input type="checkbox" class="cbox" name="ordtypef" id="f" value="f" <?php echo (isset($get['ordtypef']) && $get['ordtypef']=='f' )? 'checked': ''  ?>> <label for="f" >Finished <i class="fa fa-check" style="font-size:15px;color:green;" aria-hidden="true"></i></label>

                </div> 
                <div>
                    <span class="filterTopic">Filter by Buyer Name</span> <br>
                    Username/Name :- <input type="text" name="uname" id="" placeholder="Keep Empty to view all" value= <?php echo (isset($get['uname']) && $get['uname']!=null)?$get['uname']:'' ?> > <br>
                    
                </div> 
            </div>
            
            <button class="sbutton" name="process" value="1" type="submit">Process</button>
        </form>
    </div>

    <div>
    <table>
  <thead>
    <tr>
      <th width="10px">Id</th>
      <th>Buyer Name</th>
      <th>Order Date / Time</th>
      <th>Pickup Date</th>
      <th>Total Price</th>
      <th width="10px">Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  <?php 
        if($upcoming!=0){
        foreach($upcoming as $key=> $values){
    ?>
    <tr>
      <td data-column="Id"><?php echo $values['order_id']; ?></td>
      <td data-column="Buyer Name"><?php echo $values['firstname']." ".$values['lastname']; ?></td>
      <td data-column="Order Date / Time"><?php echo $values['order_date']; ?></td>
      <td data-column="Pickup Date"><?php echo ($values['pickup_date']); ?></td>
      <td data-column="Total Price"> Rs. <?php echo number_format($values['total_cost'],2); ?></td>
      <td data-column="Status"><i class="fas fa-stopwatch fa-spin" style="font-size:22px;" aria-hidden="true"></i></i></td>
      <input type="hidden" name="order_id" value="<?php echo $values['order_id']; ?>">
      <td data-column="Action"><a href="showorder?ord_id=<?php echo $values['order_id']; ?>"><button name="submit" >View More</button></a></td>
    </tr>
    <?php
        }}
        ?>

    
    <?php 
      if($results!=0){
        foreach($results as $key=> $values){
    ?>
    <tr>
      <td data-column="Id"><?php echo $values['order_id']; ?></td>
      <td data-column="Buyer Name"><?php echo $values['firstname']." ".$values['lastname']; ?></td>
      <td data-column="Id"><?php echo $values['order_date']; ?></td>
      <td data-column="Total Weight"><?php echo $values['pickup_date']; ?></td>
      <td data-column="Total Price"> Rs. <?php echo number_format($values['total_cost'],2); ?></td>
      <td data-column="Total Price"><i class="fa fa-check" style="font-size:30px;color:green;" aria-hidden="true"></i></td>
      <input type="hidden" name="order_id" value="<?php echo $values['order_id']; ?>">
      <td data-column="Action"><a href="showorder?ord_id=<?php echo $values['order_id']; ?>"><button name="submit" >View More</button></a></td>
      <!-- <td data-column="Action"><button type="submit" name="submit" >View More</button></td> -->
    </tr>
    <?php
        }}
    ?>
    <?php 
        if($cancelled!=0){
        foreach($cancelled as $key=> $values){
    ?>
    <tr>
      <td data-column="Id"><?php echo $values['order_id']; ?></td>
      <td data-column="Buyer Name"><?php echo $values['firstname']." ".$values['lastname']; ?></td>
      <td data-column="Order Date / Time"><?php echo $values['order_date']; ?></td>
      <td data-column="Pickup Date"><?php echo ($values['pickup_date']); ?></td>
      <td data-column="Total Price"> Rs. <?php echo number_format($values['total_cost'],2); ?></td>
      <td data-column="Status"><i class="fas fa-times" style="font-size:30px;color:red" aria-hidden="true"></i></i></td>
      <input type="hidden" name="order_id" value="<?php echo $values['order_id']; ?>">
      <td data-column="Action"><a href="showorder?ord_id=<?php echo $values['order_id']; ?>"><button name="submit" >View More</button></a></td>
    </tr>
    <?php
        }}
    ?>
    <?php
        if ($upcoming!=0 && $results!=0 && $cancelled!=0 && count($results) ==0 && count($upcoming)==0 && count($cancelled)==0 ){
          echo "<td colspan='7' ><center>No any orders<center></td>";

        }
        ?>
        
  </tbody>
</table>
    </div>
</div>
</body>
</html>

