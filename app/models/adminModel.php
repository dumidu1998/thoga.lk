<?php 

require_once(__DIR__.'/../../core/db_model.php');

class AdminModel extends db_model{

	function __contruct(){
		
	}

	function get_all(){
		return $this->read('driver',array('*'),null);
	}

	function get($id){

		return $this->read('driver', array('*'), array('id'=>$id));
	}

	function orderdetails(){
		$sql="SELECT orders.*, buyer.*,user.* FROM orders INNER JOIN buyer ON orders.buyer_id=buyer.buyer_id INNER JOIN user ON buyer.user_id=user.user_id WHERE orders.pickup_date < CURDATE()";
		$result=$this->connection->query($sql);
		$finale=array();
		if($result){
      	while($row=mysqli_fetch_assoc($result))
			array_push($finale,$row);
			return $finale;
		}else
		echo "error";
	}

	function upcomming(){
		$sql2="SELECT orders.*, buyer.*,user.* FROM orders INNER JOIN buyer ON orders.buyer_id=buyer.buyer_id INNER JOIN user ON buyer.user_id=user.user_id WHERE orders.pickup_date >= CURDATE()";
		$result=$this->connection->query($sql2);
		$finale=array();
		if($result){
      	while($row=mysqli_fetch_assoc($result))
				array_push($finale,$row);
			return $finale;
		}else
		echo "error";
	}

	
}
 ?>