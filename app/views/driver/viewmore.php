<?php require_once("../db/db.php"); ?>
<html>
<head>
	
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="viewmore.css">
</head>

<body style="background-image: url('20.jpg');">
    <?php include("navbarviewmore.php"); ?>
    <header >
        
        <div style="background-color:#7976ff;padding:1px;text-align:center;">
            <h2>Order details of Order Id - <mark>   <?php echo $_GET['orderId'] ?>  </mark></h2>
        </div>
         
    </header>    
    
	
    <div class="left" >
            <div class="transbox">  
                <?php
                        
                            $sql="select * from orders where order_id=\"". $_GET['orderId']. "\"" ;
                            $result=$conn->query($sql);
                            while($row=$result->fetch_assoc()){
                                
                                echo"<br>" ; 
                                echo "Order Id           : ";
                                echo "<input type=\"text\" \"class=\"advancedSearchTextBox\" / name=\"orderid\" value=\"".$row['order_id']."\">";
                                echo"<br>" ; 
                                echo"<br>" ;  

                                echo "Weight             :";
                                echo " <input type=\"text\" name=\"weight\" value=\"". $row['weight']."\">";
                                echo"<br>" ; 
                                echo"<br>" ;    

                                echo "Pickup Location    :";
                                echo " <input type=\"text\" name=\"pickup location\" value=\"".$row['pickup_location']."\">";
                                echo"<br>" ; 
                                echo"<br>" ; 

                                echo "Total Cost         :";
                                echo " <input type=\"text\" name=\"total cost\" value=\"". $row['total_cost']."\">";
                                echo"<br>" ; 
                                echo"<br>" ; 

                                echo "Delivery Location  :";
                                echo " <input type=\"text\" name=\"deliver location\" value=\"". $row['deliver_location']."\">";
                                echo"<br>" ; 
                                echo"<br>" ; 

                                echo "Order Date          :";
                                echo " <input type=\"text\" name=\"order date\" value=\"".$row['order_date']."\">";
                                echo"<br>"; 
                                echo"<br>" ;  

                                echo "Pickup Date          :";
                                echo " <input type=\"text\" name=\"pickup date\" value=\"". $row['pickup_date']."\">";
                                echo"<br>" ;
                                echo"<br>" ;  

                            

                            }
                        
                ?>
            </div> 
    </div>  
        
    
    <div class="right" >
            <div class="transbox">      
                <?php
                   $sql="select buyer.b_name from buyer inner join orders on orders.buyer_id = buyer.buyer_id where orders.order_id=\"". $_GET['orderId']. "\" " ;
                   $result=$conn->query($sql);
                   while($row=$result->fetch_assoc()){
                       //var_dump($result);
                       echo"<br>";
                       echo "Buyer Name :";
                       echo " <input type=\"text\" name=\"buyer name\" value=\"". $row['b_name']."\">";
                       echo"<br>" ;
                       echo"<br>" ; 
                   }
          
                   $sql="select driver.driver_name from driver inner join orders on orders.driver_id = driver.driver_id where orders.order_id=\"". $_GET['orderId']. "\"";
                   $result=$conn->query($sql);
                   while($row=$result->fetch_assoc()){
                       
                    
                       echo "Driver Name  :";
                       echo " <input type=\"text\" name=\"driver name\" value=\"". $row['driver_name']."\">";
                       echo"<br>" ; 
                       echo"<br>" ; 

                   }
                     
                           
                ?>
            </div> 
    </div>
     
    

	
    <div class="bottom">
    <table  align="center">
			
			<tr>
				<th>Item Name</th>
				<th>Unit Price(per Kg)</th>
				<th>Quantity(Kg)</th>
				<th>Sub Total</th>
			</tr>
			
			<?php
                $sum=0;
				$sql="select item.item_type,item.price ,order_details.weight from order_details inner join item on item.item_id = order_details.item_id where order_details.order_id=\"". $_GET['orderId']. "\"";
                $result=mysqli_query($conn,$sql);
                //var_dump($conn);
				 //var_dump($result);
				while($row=mysqli_fetch_assoc($result)){
					 //var_dump($row);
					echo "<tr>";
					echo "<td>".$row['item_type']."</td>";
					echo "<td>".$row['price']."</td>";
					echo "<td>".$row['weight']."</td>";
					echo "<td>".$row['price']*$row['weight']."</td>";
                    echo "</tr>";
                    
                    $sum=$sum+ $row['price']*$row['weight'];
				}
			
			?>
			
        </table>
        <div class="fin">
            <?php
                
                echo "<align=\"right\"> TOTAL  </align>";
                echo " <input type=\"text\"  class=\"advancedSearchTextBox1\"  name=\"driver id\" value=\"". $sum."\">";
                
            ?>
        </div>
    </div>
	
</body>
</html>