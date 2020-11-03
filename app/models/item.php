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
		$sql = "select a.*, b.vege_name from item a inner join vegetable b on a.veg_Id=b.vege_id";
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