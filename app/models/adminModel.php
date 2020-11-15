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
}
 ?>