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
                        
                            $sql="select * from order_details where order_id=\"". $_GET['orderId']. "\"" ;
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
                        
                            $sql="select * from order_details where order_id=\"". $_GET['orderId']. "\"" ;
                            $result=$conn->query($sql);
                            while($row=$result->fetch_assoc()){
                                
                            
                                echo"<br>";
                                echo "Item Id   :";
                                echo " <input type=\"text\" name=\"item id\" value=\"". $row['item_id']."\">";
                                echo"<br>" ; 
                                echo"<br>" ; 

                                echo "Buyer Id :";
                                echo " <input type=\"text\" name=\"buyer id\" value=\"". $row['buyer_id']."\">";
                                echo"<br>" ;
                                echo"<br>" ; 

                                echo "Driver Id  :";
                                echo " <input type=\"text\" name=\"driver id\" value=\"". $row['driver_id']."\">";
                                echo"<br>" ; 
                                echo"<br>" ; 

                            }
                        
                ?>
            </div> 
    </div>
     
    

	
    <div class="bottom">
    <table  align="center">
			
			<tr>
				<th>Item</th>
				<th>Unit Price(per Kg)</th>
				<th>Quantity(Kg)</th>
				<th>Sub Total</th>
			</tr>
			
			<?php
			
				$sql="select * from order_details";
				$result=mysqli_query($conn,$sql);
				// var_dump($result);
				while($row=mysqli_fetch_assoc($result)){
					// var_dump($row);
					echo "<tr>";
					echo "<td>".$row['order_id']."</td>";
					echo "<td>".$row['total_cost']."</td>";
					echo "<td>".$row['total_cost']."</td>";
					echo "<td>".$row['total_cost']."</td>";
					echo "</tr>";
				}
			
			?>
			
        </table>
        <?php
            $sql="select * from order_details where order_id=\"". $_GET['orderId']. "\"" ;
            $result=$conn->query($sql);
            while($row=$result->fetch_assoc()){

                echo "<align=\"right\">TOTAL</align>";
                echo " <input type=\"text\"  class=\"advancedSearchTextBox1\"  name=\"driver id\" value=\"". $row['driver_id']."\">";
            }
        ?>

    </div>
	
</body>
</html>
