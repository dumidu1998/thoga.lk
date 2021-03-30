<?php

require_once(__DIR__.'/../../core/db_model.php');

class insertMentor extends db_model{

    public function insert_data($itemname,$avaiweight,$minweight,$price,$startdate,$enddate,$itemtype,$farmername,$ides,$m_id){


            $query = "INSERT into item (veg_Id,avail_weight,min_weight,total_cost,item_start,item_end,item_type,farmer_id,item_des,mentor_id) values ('".$itemname."','".$avaiweight."','".$minweight."','".$price."','".$startdate."','".$enddate."','".$itemtype."','".$farmername."','".$ides."','".$m_id."')";
            echo $query;
            $result =$this->connection->query($query);
           

            if($result){
            echo "Insert Data Successfully.";
            }
            else{
                echo "Error...!";
            }



        
        
    }

    function get_details(){
        $sql="SELECT orders.order_id, orders.pickup_date,orders.total_cost,orders.weight,orders.buyer_id,buyer.b_name, FROM orders INNER JOIN buyer ON orders.buyer_id=buyer.buyer_id where orders.pickup_date >= CURDATE() 
        ";
        $result=$this->connection->query($sql);
        $arr=array();
        if($result){
         while($row=mysqli_fetch_assoc($result))
         array_push($arr,$row);
       return $arr;
     
 
         }else
         echo "error";
          
 
     }

     function get($id){
		    return $this->read('mentor', array('mentor_id'), array('user_id'=>$id));
     }

     public function read_id($id){
		return $this->read('mentor', array('*'), array('user_id'=>$id));

    }

    public function readBymid($id){
      echo "ddd";
      return $this->read('mentor', array('*'), array('mentor_id'=>$id));
  
      }

    public function join_get($mentorid){
        $sql = "SELECT *,user.firstname,user.lastname from farmer INNER join mentor on farmer.mentor_id=mentor.mentor_id inner join user on farmer.user_id=user.user_id WHERE mentor.mentor_id = '".$mentorid."'  ";
        $result=$this->connection->query($sql);
        $arr=array();
        if($result){
         while($row=mysqli_fetch_assoc($result))
         array_push($arr,$row);
       return $arr;
     
 
         }else
         echo "error";
    }
    public function getMentor_details($mentorid){
      $sql = "SELECT *,user.firstname,user.lastname from mentor inner join user on mentor.user_id=user.user_id WHERE mentor.mentor_id = '".$mentorid."'  ";
      $result=$this->connection->query($sql);
      $arr=array();
      if($result){
       while($row=mysqli_fetch_assoc($result))
       array_push($arr,$row);
     return $arr;
   

       }else
       echo "error";
  }

    function get_info(){
        $sql="SELECT item.veg_Id,item.item_id,item.Item_type,item.avail_weight,item.item_end,item.total_cost,item.min_weight,item.farmer_id,vegetable.vege_name, user.user_id, farmer.user_id,farmer.farmer_id,user.firstname , user.lastname FROM item INNER JOIN vegetable on item.veg_Id=vegetable.vege_id INNER JOIN farmer on item.farmer_id=farmer.farmer_id INNER JOIN user ON farmer.user_id=user.user_id where item.item_end >= CURDATE()";
        $result=$this->connection->query($sql);
        $arr=array();
        if($result){
         while($row=mysqli_fetch_assoc($result))
         array_push($arr,$row);
       return $arr;
     
 
         }else
         echo "error";
    }

    function delete_item($id){
      $sql = "DELETE FROM item WHERE item_id = '".$id."'";
      $result=$this->connection->query($sql);
      if($result){
        echo "done";
      }else echo "error";
  
    }

    function edit_item($id){
      $sql = "SELECT vegetable.vege_name,item.item_id,item.item_type,item.item_des,item.min_weight,item.avail_weight,item.item_start,item.item_end,item.total_cost,item.farmer_id,farmer.user_id,user.username,user.firstname,user.lastname FROM item INNER JOIN vegetable ON item.veg_Id=vegetable.vege_id INNER JOIN farmer ON item.farmer_id=farmer.farmer_id INNER JOIN user ON user.user_id=farmer.user_id WHERE item.item_id='".$id."'";
      
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

    function view_farmers($mentorid){
      $sql = "SELECT *,user.firstname,user.lastname from farmer INNER join mentor on farmer.mentor_id=mentor.mentor_id inner join user on farmer.user_id=user.user_id WHERE mentor.mentor_id = '".$mentorid."'  ";
      $result=$this->connection->query($sql);
      $finale=array();
      if($result){
        while($row=mysqli_fetch_assoc($result))
        array_push($finale,$row);
        return $finale;
        }
      else echo "error";
    }

   function view_public_profile($farmerid){
      $sql= "SELECT *,address.address_id,address.address_line1,address.address_line2,address.city,address.zip_code,cities.id,farmer.user_id,farmer.mentor_id,mentor.mentor_id FROM user INNER JOIN address ON user.user_id = address.user_id INNER JOIN cities ON address.city = cities.id INNER JOIN farmer ON user.user_id=farmer.user_id INNER JOIN mentor ON farmer.mentor_id=mentor.mentor_id WHERE farmer.farmer_id = '".$farmerid."' ";
      $result=$this->connection->query($sql);
      $finale=array();
   
      if($result){
        while($row=mysqli_fetch_assoc($result))
        array_push($finale,$row);
        return $finale;
        
      
      }else echo "error";
    }

    


    

}

?>