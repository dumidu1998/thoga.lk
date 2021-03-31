<?php

require_once(__DIR__.'/../../core/db_model.php');


class farmerModel extends db_model{
    function get_all(){
        return $this->read('item',array('*'),null);
    }

    function get_mentor_requests(){
      $sql = "SELECT farmer.farmer_id ,user.firstname,user.lastname, districts.name_en AS district, cities.name_en AS city FROM farmer INNER JOIN user ON 
      farmer.user_id = user.user_id INNER JOIN address ON address.user_id= user.user_id INNER JOIN districts ON
      address.district=districts.id INNER JOIN cities ON address.city=cities.id where farmer.mentor_id=0";
      $result=$this->connection->query($sql);
      $finale=array();
      if($result){
             while($row=mysqli_fetch_assoc($result)){
        array_push($finale,$row);
         }
        return $finale;
  
      }else
      echo "error";        
    }

    function get_details($farmerid){
       $sql="SELECT order_details.order_id,order_details.farmer_id, orders.order_id, orders.pickup_date,orders.total_cost,orders.weight,orders.buyer_id,  buyer.buyer_id,buyer.user_id,user.user_id,user.firstname,user.lastname FROM orders INNER JOIN buyer ON orders.buyer_id=buyer.buyer_id INNER JOIN user ON user.user_id=buyer.user_id INNER JOIN order_details ON order_details.order_id=orders.order_id where orders.pickup_date >= CURDATE() AND order_details.farmer_id = '".$farmerid."'
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

    function get_info(){
        $sql="SELECT item.veg_Id,item.item_id,item.Item_type,item.avail_weight,item.item_end,item.total_cost,item.min_weight,vegetable.vege_name FROM item INNER JOIN vegetable on item.veg_Id=vegetable.vege_id where item.item_end >= CURDATE()
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
    
    function get_records(){
        return $this->read('vegetable',array('*'),null);
    }

    function updatedetails($data){
      session_start();
      $firstname=$data['fname'];
          $lastname=$data['lname'];
          $mobile1=$data['mobileno1'];
          $mobile2=$data['mobileno2'];
        $user_id=$_SESSION['user'][0]['user_id'];;
  
  
      $sql="UPDATE user SET firstname='".$firstname."', lastname='".$lastname."',contactno1='".$mobile1."',contactno2='".$mobile2."' WHERE user_id='".$user_id."'";
      $result=$this->connection->query($sql);
      if($result){ return true;}else{return false;}
    }
  


    
    function getfarmerallbyid($id){
      $sql="SELECT farmer.* ,user.*,address.district as disid, districts.name_en AS district, cities.name_en AS city, address.zip_code, 
      address.address_line1, address.address_line2, provinces.name_en AS province, c3.name_en AS HT, c1.name_en AS NS1, 
      c2.name_en AS NS2 FROM farmer INNER JOIN user ON farmer.user_id = user.user_id INNER JOIN address ON 
      address.user_id= user.user_id INNER JOIN districts ON address.district=districts.id INNER JOIN cities on 
      address.city = cities.id INNER JOIN provinces ON address.province=provinces.id INNER JOIN cities c1 ON c1.id=user.nearestcity1 
      INNER JOIN cities c2 ON c2.id=user.nearestcity2 INNER JOIN cities c3 ON c3.id=user.hometown where farmer.farmer_id=".$id;
      
		  return $this->queryfromsql($sql);
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
    
public function read_id($id){
  return $this->read('farmer', array('*'), array('user_id'=>$id));

}

public function requestmentor($id){
  return $this->update('farmer', array('mentor_id'=>'0'), array('user_id'=>$id));

}

public function removementor($id){
  return $this->update('farmer', array('mentor_id'=>'-1'), array('farmer_id'=>$id));

}



    
}


?>