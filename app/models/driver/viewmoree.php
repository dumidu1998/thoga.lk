<?php
require_once(__DIR__.'/../../../core/db_model.php');

class viewmoree extends db_model{

	function get($id){

        return $this->read('orders', array('*'), array('order_id'=>$id));
        
    }

    function  joinget1($id){
		$sql = "select buyer.b_name from buyer inner join orders on orders.buyer_id = buyer.buyer_id where orders.order_id='".$id."' " ;
		$result=$this->connection->query($sql);
		$finale=array();
		if($result){
      while($row=mysqli_fetch_assoc($result))
      //print_r($row);
			array_push($finale,$row);
		  return $finale;
		

		}else
		echo "error";

	}
	function  joinget2($orderId){
		$sql = "select driver.driver_name from driver inner join orders on orders.driver_id = driver.driver_id where orders.order_id='".$orderId."'";
		$result=$this->connection->query($sql);
		
		$finale=array();
		if($result){
      while($row=mysqli_fetch_assoc($result))
      //print_r($row);
			array_push($finale,$row);
		  return $finale;
		

		}else
		echo "error";

	}

    function  joinget3($orderId){
		$sql = "select item.item_type,item.price ,order_details.weight from order_details inner join item on item.item_id = order_details.item_id where order_details.order_id='".$orderId."'";
		$result=$this->connection->query($sql);
		$finale=array();
		if($result){
           while($row=mysqli_fetch_assoc($result)){
      //print_r($row);
			array_push($finale,$row);
		   }
		  return $finale;

		}else
		echo "error";

	}


}





    
?>