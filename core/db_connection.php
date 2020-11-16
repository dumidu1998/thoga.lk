<?php 

class db_connection{


	/*function __construct(){
		require_once(__DIR__.'/../config/database.php');
		$this->db_params = $db_params;
	}*/


	/*function getConnection(){
		$conn = new mysqli('localhost','root','','thoga.lkdb');*/

	// function __construct(){
	// 	require_once(__DIR__.'/../config/database.php');
	// 	$this->db_params = $db_params;
	// }


	function getConnection(){
<<<<<<< HEAD
		$conn = new mysqli('localhost', 'root', '' , 'thoga_lkdb');
=======
		$conn = new mysqli('localhost', 'root', '' , 'thoga.lkdb');

>>>>>>> 969ebb027a817f2e7862541c3b4b8f53890acc9e
		if($conn->connect_error){
			die("Connection Faild: ". $conn->connect_error);
    }
    
		return $conn;
  }
  

    
}
  


?>