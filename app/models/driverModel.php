<?php 

require_once(__DIR__.'/../../core/db_model.php');

class driverModel extends db_model{

	function __contruct(){
		
	}

	function get_all(){
		return $this->read('driver',array('*'),null);
	}

	function get($id){

		return $this->read('driver', array('*'), array('id'=>$id));
	}
	function get_avail(){
		$sql = "SELECT a.*, b.* FROM driver AS a INNER JOIN unavailable_dates AS b ON a.driver_id = b.driver_id WHERE b.enddate >= '2021-01-12' AND b.startdate <= '2021-01-12'";
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
}
 ?>