<?php 

require_once(__DIR__.'/../../core/db_model.php');

class adminModel extends db_model{

	function __contruct(){
		
	}

	function get_all(){
		return $this->read('driver',array('*'),null);
	}

	function get($id){

		return $this->read('driver', array('*'), array('id'=>$id));
	}

	function getalluserdetails(){
		$sql="SELECT u.*, b.* , f.*, d.*, m.* FROM user AS u,buyer 
		AS b, farmer AS f, driver AS d, mentor AS m WHERE u.user_id=b.user_id 
		AND u.user_id=f.user_id AND u.user_id=d.user_id AND u.user_id=m.user_id";
	}
}
 ?>