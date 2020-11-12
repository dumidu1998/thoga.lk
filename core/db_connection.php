<?php 

//echo "yay";

class db_connection{

	// function __construct(){
	// 	require_once(__DIR__.'/../config/database.php');
	// 	$this->db_params = $db_params;
	// }


	function getConnection(){
		$conn = new mysqli('localhost', 'root', '' , 'thoga.lkdb');
		if($conn->connect_error){
			die("Connection Faild: ". $conn->connect_error);
    }
    
		return $conn;
  }
  

    
}
  


?>