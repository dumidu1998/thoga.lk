<?php
require_once(__DIR__.'/../../../core/db_model.php');

class viewmoree extends db_model{

	function get($id){

        return $this->read('orders', array('*'), array('order_id'=>$id));
        
    }

    function  joinget1($id){
		$sql= "SELECT a.username FROM user AS a INNER JOIN buyer AS b ON a.user_id=b.user_id INNER JOIN orders AS c ON b.buyer_id=c.buyer_id where c.order_id='".$id."' " ;
		echo $sql;
		$result=$this->connection->query($sql);
		print_r($result);
		$finale=array();
		if($result){
        while($row=mysqli_fetch_assoc($result))
			echo $row;
			print_r($row);
			array_push($finale,$row);
		    return $finale;
		}else
		echo "error";

	}
	function  joinget2($id){

		$sql= "SELECT a.username FROM user AS a INNER JOIN driver AS b ON a.user_id=b.user_id INNER JOIN orders AS c ON b.driver_id=c.driver_id where c.order_id=".$id;
		
		echo $sql;
		$result=$this->connection->query($sql);
		$finale=array();
		if($result){
      while($row=mysqli_fetch_assoc($result))	
			array_push($finale,$row);
		return $finale;
		}else
		echo "error";

	}

    function  joinget3($orderId){
		$sql = "SELECT vegetable.vege_name ,item.`price/kg`,order_details.weight FROM order_details INNER JOIN item on item.item_id = order_details.item_id INNER JOIN vegetable ON vegetable.vege_id= item.veg_id where order_details.order_id='".$orderId."'";
		echo $sql;
		$result=$this->connection->query($sql);
		$finale=array();
		if($result){
           while($row=mysqli_fetch_assoc($result)){
			array_push($finale,$row);
		   }
		  return $finale;

		}else
		echo "error";

	}


}





    
?>