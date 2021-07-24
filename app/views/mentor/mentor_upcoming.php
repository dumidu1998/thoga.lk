<html>
<head>
<title>Mentor Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/thoga.lk/public/stylesheets/mentor/upcoming.css">
<link rel="stylesheet" type="text/css" href="/thoga.lk/public/stylesheets/mentor/vertical.css">


</head>
 
<body>
   <?php 
  include  'navbar_dash.php';
   
   ?>
<div class="containernew">
      <div class ="split left">
        <h1 class="title">Upcoming Orders</h1>
      
          <div  style="height:auto;height: 50%;min-height:0px">

          <div style="overflow-x:auto;">
              <table align="center">
                <tr>
                  <th>Order Id</th>
                  <th>Item Name</th>
                  <th>Pickup Date</th>
                  <th>Total Weight</th>
                  <th>Price</th>
                  <th>Buyer Name</th>
                  
                  <th>More Details</th>
            
                </tr>

          

            <?php
          // print_r($data);
            if (isset($data[0])){


            foreach($data[0] as $key => $values){
              $itemid= $values['item_id'];
              $ordid= $values['order_id'];
              $vegname= $values['vege_name'];
              $pdate= $values['pickup_date'];
              $tweight= $values['weight'];
              $cost= $values['total_cost'] *  $values['weight'];
              $bname= $values['firstname'].' '.$values['lastname'];
              




            ?>
            <tr>
            <td><?php echo $itemid;?></td>
            <td><?php echo $vegname;?></td>
            <td><?php echo $pdate;?></td>
            <td><?php echo number_format($tweight,0).' kg'?></td>
            <td><?php echo number_format($cost,2);?></td>
            <td><?php echo $bname;?></td>
            
            <td>
            <a class="more" name='link' onclick="" href="viewmore?id=<?php echo $ordid;?>">view more</a>
            </td>
            </tr>
          

              <?php
              }}
              ?>



            </table>
          </div>
        </div>
      </div>

      <div class = "split right">

          <h1 class="title2"> Farmer List </h2>
            <div class="card">
        
              <div class="container2">
                <?php
                  foreach($data1 as $keys => $row){
                    $farmername = $row['firstname']." ".$row['lastname'];
                    $fid=$row['farmer_id'];?>
                  <h3> <a class = "topic" href="public_profile?id=<?php echo $fid; ?>"><?php echo $farmername; ?></a> </h3>
                <?php
                  }
                  ?>
          
              </div>
            </div>
      </div>
</div>
<?php include("footer.php"); ?>

</body>

</html>
