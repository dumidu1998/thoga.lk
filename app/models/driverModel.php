<?php 

require_once(__DIR__.'/../../core/db_model.php');

class driverModel extends db_model{

	function __contruct(){
		
	}

	function get_all(){
		return $this->read('driver',array('*'),null);
	}

	function get_pending(){
		$sql = "SELECT driver.driver_id ,user.firstname,user.lastname, districts.name_en FROM driver INNER JOIN user ON driver.user_id = user.user_id INNER JOIN address ON address.user_id= user.user_id INNER JOIN districts ON address.district=districts.id where driver.verified_state=0";
		$result=$this->connection->query($sql);
		$output=array();
		if($result){
           while($row=mysqli_fetch_assoc($result)){
			array_push($output,$row);
		   }
		  return $output;

		}else{
		echo "error";
		}
		// return $this->read('driver',array('*'),array('verified_state'=>'0'));
	}

	function get($id){

		return $this->read('driver', array('*'), array('id'=>$id));
	}
}
 ?>