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

    function get_details(){
       $sql="SELECT orders.order_id, orders.pickup_date,orders.total_cost,orders.weight,orders.buyer_id,buyer.b_name FROM orders INNER JOIN buyer ON orders.buyer_id=buyer.buyer_id
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
        $sql="SELECT item.veg_Id,item.Item_type,item.avail_weight,item.item_end,item.total_cost,item.min_weight,vegetable.vege_name FROM item INNER JOIN vegetable on item.veg_Id=vegetable.vege_id
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
    
}


?>