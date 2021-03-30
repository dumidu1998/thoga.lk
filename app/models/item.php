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
		$sql = "SELECT a.*, b.vege_name, c.user_id, d.*, e.*,f.name_en AS city, g.name_en AS distric, h.name_en AS province FROM item as a INNER JOIN vegetable AS b ON a.veg_Id = b.vege_id INNER JOIN farmer as c ON a.farmer_Id = c.farmer_id INNER JOIN user as d ON c.user_id = d.user_id INNER JOIN address as e ON c.user_id=e.user_id INNER JOIN cities AS f ON e.city=f.id INNER JOIN districts AS g ON e.district=g.id INNER JOIN provinces AS h ON e.province=h.id WHERE a.item_end > DATE_SUB(CURDATE(),INTERVAL 1 DAY) AND a.item_start < DATE_SUB(CURDATE(),INTERVAL 1 DAY) AND a.avail_weight> 0";
		
		$result=$this->connection->query($sql);
		$finale=array();
		//  echo $sql;
		if($result){
      	while($row=mysqli_fetch_assoc($result))
			array_push($finale,$row);
		  return $finale;
		

		}else
		echo "error";

	}
	function  joinget_all_org(){
		$sql = "SELECT a.*, b.vege_name, c.user_id, d.*, e.*,f.name_en AS city, g.name_en AS distric, h.name_en AS province FROM item as a INNER JOIN vegetable AS b ON a.veg_Id = b.vege_id INNER JOIN farmer as c ON a.farmer_Id = c.farmer_id INNER JOIN user as d ON c.user_id = d.user_id INNER JOIN address as e ON c.user_id=e.user_id INNER JOIN cities AS f ON e.city=f.id INNER JOIN districts AS g ON e.district=g.id INNER JOIN provinces AS h ON e.province=h.id WHERE a.item_end > DATE_SUB(CURDATE(),INTERVAL 1 DAY) AND a.item_start < DATE_SUB(CURDATE(),INTERVAL 1 DAY) AND a.Item_type='org' AND a.avail_weight> 0 ";
		
		$result=$this->connection->query($sql);
		$finale=array();
		// echo $sql;
		if($result){
      	while($row=mysqli_fetch_assoc($result))
			array_push($finale,$row);
		  return $finale;
		

		}else
		echo "error";

	}
	function  joinget_home($home){
		$sql = "SELECT a.*, b.vege_name, c.user_id, d.*, e.*,f.name_en AS city, g.name_en AS distric, h.name_en AS province FROM item as a INNER JOIN vegetable AS b ON a.veg_Id = b.vege_id INNER JOIN farmer as c ON a.farmer_Id = c.farmer_id INNER JOIN user as d ON c.user_id = d.user_id INNER JOIN address as e ON c.user_id=e.user_id INNER JOIN cities AS f ON e.city=f.id INNER JOIN districts AS g ON e.district=g.id INNER JOIN provinces AS h ON e.province=h.id WHERE (a.item_end > DATE_SUB(CURDATE(),INTERVAL 1 DAY) AND a.item_start < DATE_SUB(CURDATE(),INTERVAL 1 DAY) AND f.name_en='".$home."') OR (a.item_end > DATE_SUB(CURDATE(),INTERVAL 1 DAY) AND a.item_start < DATE_SUB(CURDATE(),INTERVAL 1 DAY) AND g.name_en='".$home."') AND a.avail_weight> 0 ";
		// echo $sql;
		$result=$this->connection->query($sql);
		$finale=array();
		if($result){
      	while($row=mysqli_fetch_assoc($result))
			array_push($finale,$row);
		  return $finale;
		

		}else
		echo "error";

	}
	function  joingetOrganic($home){
		$sql = "SELECT a.*, b.vege_name, c.user_id, d.*, e.*,f.name_en AS city, g.name_en AS distric, h.name_en AS province FROM item as a INNER JOIN vegetable AS b ON a.veg_Id = b.vege_id INNER JOIN farmer as c ON a.farmer_Id = c.farmer_id INNER JOIN user as d ON c.user_id = d.user_id INNER JOIN address as e ON c.user_id=e.user_id INNER JOIN cities AS f ON e.city=f.id INNER JOIN districts AS g ON e.district=g.id INNER JOIN provinces AS h ON e.province=h.id WHERE (a.item_end > DATE_SUB(CURDATE(),INTERVAL 1 DAY) AND a.item_start < DATE_SUB(CURDATE(),INTERVAL 1 DAY) AND f.name_en='".$home."') OR (a.item_end > DATE_SUB(CURDATE(),INTERVAL 1 DAY) AND a.item_start < DATE_SUB(CURDATE(),INTERVAL 1 DAY) AND g.name_en='".$home."') AND a.Item_type='org' AND a.avail_weight> 0 ";
		// echo $sql;
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
	function get_farmer($id){
		$sql = "SELECT farmer_id FROM `item` WHERE item_id='".$id."'";
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
	function reduce_avail($id, $quantity){
		$sql4="UPDATE item SET avail_weight= avail_weight -'".$quantity."' WHERE item_id ='".$id."'" ;
		return $result=$this->connection->query($sql4);
	}
    
}
