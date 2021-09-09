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

	function edit_item($id){
		$sql = "SELECT vegetable.vege_name, item.item_id, item.item_type, item.item_des, item.min_weight, item.avail_weight, item.item_start, item.item_end, item.total_cost FROM item INNER JOIN vegetable ON item.veg_Id=vegetable.vege_id WHERE item.item_id='".$id."'";
		$result=$this->connection->query($sql);
		
		$finale=array();
		
		if($result){
      while($row=mysqli_fetch_assoc($result))
			array_push($finale,$row);
		  return $finale;
		}
	}

	function submit_edit($avail_weight, $min_weight, $item_start, $item_end, $total_cost, $item_des, $item_id){
		$sql = "UPDATE item SET avail_weight = '".$avail_weight."', min_weight = '".$min_weight."', item_start = '".$item_start."', item_end = '".$item_end."', total_cost = '".$total_cost."', item_des = '".$item_des."' where item_id = '".$item_id."'";
		$result=$this->connection->query($sql);
		if($result){
			echo "done";
		}else echo "error";
	}

	function delete_item($id){
		$sql = "DELETE FROM item WHERE item_id = '".$id."'";
		$result=$this->connection->query($sql);
		if($result){
			echo "done";
		}else echo "error";

	}

	public function insert_data($itemname,$avaiweight,$minweight,$price,$enddate,$itemtype,$ides,$f_id){
		$query = "INSERT into item (veg_Id,avail_weight,min_weight,total_cost,item_start,item_end,item_type,item_des,farmer_id) values ('".$itemname."','".$avaiweight."','".$minweight."','".$price."',CURDATE(),'".$enddate."','".$itemtype."','".$ides."','".$f_id."')";
		echo $query;
		
		$result =$this->connection->query($query);
	   

		if($result){
	   echo "Insert Data Successfully.";
		}
		else{
			echo "Error...!";
		}
	}

	public function insert_data_other($itemname,$othername,$avaiweight,$minweight,$price,$enddate,$itemtype,$ides,$f_id){
		//echo $f_id;
		$query = "INSERT into item (veg_Id,other_name,avail_weight,min_weight,total_cost,item_start,item_end,item_type,item_des,farmer_id) values ('".$itemname."','".$othername."','".$avaiweight."','".$minweight."','".$price."',CURDATE(),'".$enddate."','".$itemtype."','".$ides."','".$f_id."')";
		echo $query;
		
		$result =$this->connection->query($query);
	   

		if($result){
	   echo "Insert Data Successfully.";
		}
		else{
			echo "Error...!";
		}
	}


public function insert_databymentor($itemname,$avaiweight,$minweight,$price,$enddate,$itemtype,$farmername,$ides,$m_id){

	$query = "INSERT into item (veg_Id,avail_weight,min_weight,total_cost,item_start,item_end,item_type,farmer_id,item_des,mentor_id) 
	values('".$itemname."','".$avaiweight."','".$minweight."','".$price."',CURDATE(),'".$enddate."','".$itemtype."','".$farmername."','"
	 .$ides."','".$m_id."')";
	echo $query;
	$result =$this->connection->query($query);

	if($result){
	echo "Insert Data Successfully.";
	}
	else{
		echo "Error...!";
	}
}

public function insert_otherdatabymentor($itemname,$avaiweight,$minweight,$price,$enddate,$itemtype,$farmername,$ides,$m_id,$othername){

	$query = "INSERT into item (veg_Id,avail_weight,min_weight,total_cost,item_start,item_end,item_type,farmer_id,item_des,mentor_id,other_name) 
	values('".$itemname."','".$avaiweight."','".$minweight."','".$price."',CURDATE(),'".$enddate."','".$itemtype."','".$farmername."','"
	 .$ides."','".$m_id."','".$othername."')";
	echo $query;
	$result =$this->connection->query($query);

	if($result){
	echo "Insert Data Successfully.";
	}
	else{
		echo "Error...!";
	}
}



function get_info($mentorid){
	$sql="SELECT item.veg_Id,item.item_id,item.Item_type,item.avail_weight,item.item_end,item.total_cost,item.min_weight,item.farmer_id,vegetable.vege_name, user.user_id,item.mentor_Id, farmer.user_id,farmer.farmer_id,user.firstname , user.lastname FROM item INNER JOIN vegetable on item.veg_Id=vegetable.vege_id INNER JOIN farmer on item.farmer_id=farmer.farmer_id INNER JOIN user ON farmer.user_id=user.user_id where item.item_end >= CURDATE() AND item.mentor_Id='".$mentorid."'";
	$result=$this->connection->query($sql);
	$arr=array();
	if($result){
	 while($row=mysqli_fetch_assoc($result))
	 array_push($arr,$row);
   return $arr;
 

	 }else
	 echo "error";
}

function edit_itembyid($id){
	$sql = "SELECT vegetable.vege_name,item.item_id,item.item_type,item.item_des,item.min_weight,item.avail_weight,item.item_start,item.item_end,item.total_cost,item.farmer_id,farmer.user_id,user.username,user.firstname,user.lastname FROM item INNER JOIN vegetable ON item.veg_Id=vegetable.vege_id INNER JOIN farmer ON item.farmer_id=farmer.farmer_id INNER JOIN user ON user.user_id=farmer.user_id WHERE item.item_id='".$id."'";
	
	$result=$this->connection->query($sql);
	
	  $finale=array();
 
	  if($result){
	while($row=mysqli_fetch_assoc($result))
		  array_push($finale,$row);
		return $finale;
		}
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

	function getallitems($fid){
		$sql4="SELECT count(item_id) as count FROM item where item.item_end >= CURDATE() AND item.farmer_id='".$fid."'"; //TODO
		$result=$this->connection->query($sql4);
		$finale=array();
		if($result){
      	while($row=mysqli_fetch_assoc($result))
			array_push($finale,$row);
		  return $finale[0];
		}else
		echo "error";
	}

    function get_vegeItem($id){
		$sql = "SELECT a.*, b.vege_name, c.user_id, d.*, e.*,f.name_en AS city, g.name_en AS distric, h.name_en AS province FROM item as a INNER JOIN vegetable AS b ON a.veg_Id = b.vege_id INNER JOIN farmer as c ON a.farmer_Id = c.farmer_id INNER JOIN user as d ON c.user_id = d.user_id INNER JOIN address as e ON c.user_id=e.user_id INNER JOIN cities AS f ON e.city=f.id INNER JOIN districts AS g ON e.district=g.id INNER JOIN provinces AS h ON e.province=h.id WHERE a.item_end > DATE_SUB(CURDATE(),INTERVAL 1 DAY) AND a.item_start < DATE_SUB(CURDATE(),INTERVAL 1 DAY) AND a.avail_weight> 0 AND a.veg_id='".$id."'";
		
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

	

}
