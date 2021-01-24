<?php

require_once(__DIR__.'/../../core/db_model.php');


class farmerModel extends db_model{
    function get_all(){
        return $this->read('item',array('*'),null);
    }

    function get_details(){
       $sql="SELECT orders.order_id, orders.pickup_date,orders.total_cost,orders.weight,orders.buyer_id,buyer.b_name FROM orders INNER JOIN buyer ON orders.buyer_id=buyer.buyer_id where orders.pickup_date >= CURDATE() 
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
    
}


?>