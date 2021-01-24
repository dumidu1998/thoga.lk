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
	function get_avail($date){
		$sql = "SELECT * FROM driver WHERE driver_id NOT IN (SELECT driver_id FROM unavailable_dates WHERE enddate >= '".$date."' AND startdate <= '".$date."')";
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