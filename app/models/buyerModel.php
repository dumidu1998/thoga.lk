<?php 

require_once(__DIR__.'/../../core/db_model.php');

class buyerModel extends db_model{

	function __contruct(){
		
	}

	function get_id($id){
		return $this->read('buyer',array('buyer_id'),array('user_id'=>$id));
	}
    

}

?>