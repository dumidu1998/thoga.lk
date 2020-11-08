<?php

require_once(__DIR__.'/../../core/db_model.php');

class item extends db_model{
    function get_all(){
		return $this->read('item',array('*'),null);
    }
    function get($id){

		return $this->read('item', array('*'), array('id'=>$id));
  }

  function  joinget(){
		$sql = "SELECT a.*, b.vege_name, c.user_id, d.*, e.* FROM item as a INNER JOIN vegetable AS b ON a.veg_Id = b.vege_id INNER JOIN farmer as c ON a.farmer_Id = c.farmer_id INNER JOIN user as d ON c.user_id = d.user_id INNER JOIN address as e ON c.user_id=e.user_id";
		
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
	function  joingetOrganic(){
		$sql = "SELECT a.*, b.vege_name, c.user_id, d.*, e.* FROM item as a INNER JOIN vegetable AS b ON a.veg_Id = b.vege_id INNER JOIN farmer as c ON a.farmer_Id = c.farmer_id INNER JOIN user as d ON c.user_id = d.user_id INNER JOIN address as e ON c.user_id=e.user_id where a.Item_type='org'";
		
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