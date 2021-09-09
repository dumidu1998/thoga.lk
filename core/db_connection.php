<?php 

class db_connection{

	function getConnection(){
		// $conn = new mysqli('157.230.37.100', 'root', 'root', 'thoga.lk','3306');
		$conn = new mysqli('localhost', 'root', '' , 'thoga.lk');

		if($conn->connect_error){
			die("Connection Faild: ". $conn->connect_error);
    }
    
		return $conn;
  }
  

    
}
  


?>