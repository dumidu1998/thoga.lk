<?php 

class db_connection{

	function getConnection(){
		$conn = new mysqli('db.learnia.xyz', 'root', 'chata', 'thoga.lk');
		// $conn = new mysqli('localhost', 'root', '' , 'thoga.lk');

		if($conn->connect_error){
			die("Connection Faild: ". $conn->connect_error);
    }
    
		return $conn;
  }
  

    
}
  


?>