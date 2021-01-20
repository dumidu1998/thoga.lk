<?php 

require_once(__DIR__.'/../../core/db_model.php');

class driverModel extends db_model{

	function __contruct(){
		
	}

	function get_all(){
		return $this->read('driver',array('*'),null);
	}

	function get_basic($id){
		$sql = "SELECT driver.* ,user.*, districts.name_en AS district, cities.name_en AS city, address.zip_code, address.address_line1, address.address_line2, provinces.name_en AS province, c3.name_en AS HT, c1.name_en AS NS1, c2.name_en AS NS2 FROM driver INNER JOIN user ON driver.user_id = user.user_id INNER JOIN address ON address.user_id= user.user_id INNER JOIN districts ON address.district=districts.id INNER JOIN cities on address.city = cities.id INNER JOIN provinces ON address.province=provinces.id INNER JOIN cities c1 ON c1.id=user.nearestcity1 INNER JOIN cities c2 ON c2.id=user.nearestcity2 INNER JOIN cities c3 ON c3.id=user.hometown where driver.driver_id=".$id;
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
	}

	function get_vehicle_details($id){
		$sql = "SELECT vehicles.*,driver.* from vehicles INNER JOIN driver ON vehicles.driver_id=driver.driver_id where driver.driver_id=".$id;
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
	}

	function get($id){

		return $this->read('driver', array('*'), array('id'=>$id));
	}
}
 ?>