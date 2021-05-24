<?php

require_once(__DIR__.'/../../core/db_model.php');

class vegetablesModel extends db_model{

    public function get_all_vegetables(){
        return $this->read('vegetable',array('*'),null);

    }
    public function update_vegetables($id, $prev_price, $curr_price,$name){
        $sql = "UPDATE vegetable SET vege_name = '".$name."', current_price= '".$curr_price."', prev_price = '".$prev_price."' WHERE vege_id = '".$id."'";
        $result = $this->connection->query($sql);
    }

    public function delete_vegetables($id){
        $sql = "DELETE FROM vegetable WHERE vege_id = '".$id."'";
        $result = $this->connection->query($sql);
    }

    public function add_vegetable($name,$price){
        $sql= "INSERT INTO `vegetable` (`vege_id`, `vege_name`, `image`, `current_price`, `prev_price`) VALUES (NULL, '".$name."', '".$name.".jpg', ".$price.", '0')";
        $result = $this->connection->query($sql);
    }
    
    public function getmprices(){
        return $this->read('vegetable',array('*'),null);
    }

    
	function get_other(){
		$sql = "SELECT vegetable.vege_name, item.item_id,item.other_name, item.item_type, item.item_des,user.username,user.user_id, item.min_weight, item.avail_weight, item.item_start, item.item_end, item.total_cost FROM item INNER JOIN vegetable ON item.veg_Id=vegetable.vege_id INNER JOIN farmer ON item.farmer_Id=farmer.farmer_id INNER JOIN user ON farmer.user_id=user.user_id WHERE item.veg_id='100'";
        $result=$this->connection->query($sql);
		
		$finale=array();
		
		if($result){
			while($row=mysqli_fetch_assoc($result))
					array_push($finale,$row);
		  return $finale;
		}
	}

	function get_all_vege(){
		$sql = "SELECT vegetable.vege_name, item.item_id,item.other_name, item.item_type, item.item_des,user.username,user.user_id, item.min_weight, item.avail_weight, item.item_start, item.item_end, item.total_cost FROM item INNER JOIN vegetable ON item.veg_Id=vegetable.vege_id INNER JOIN farmer ON item.farmer_Id=farmer.farmer_id INNER JOIN user ON farmer.user_id=user.user_id ORDER BY item.item_end DESC";
        $result=$this->connection->query($sql);
		
		$finale=array();
		
		if($result){
			while($row=mysqli_fetch_assoc($result))
					array_push($finale,$row);
		  return $finale;
		}
	}

    function update_category($vegid,$itemid){
		$sql = "UPDATE item SET veg_Id= ".$vegid." ,other_name='' WHERE item_id=".$itemid;
        $result = $this->connection->query($sql);
    }

}