<?php

require_once(__DIR__.'/../../core/db_model.php');

class insertMentor extends db_model{

    public function insert_data($itemname,$avaiweight,$minweight,$price,$startdate,$enddate,$itemtype,$farmername,$ides,$m_id){


            $query = "INSERT into item (veg_Id,avail_weight,min_weight,total_cost,item_start,item_end,item_type,farmer_id,item_des,mentor_id) values ('".$itemname."','".$avaiweight."','".$minweight."','".$price."','".$startdate."','".$enddate."','".$itemtype."','".$farmername."','".$ides."','".$m_id."')";
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

		return $this->read('farmer', array('*'), array('mentor_id'=>$id));
     }

     public function read_id($id){
		return $this->read('mentor', array('*'), array('user_id'=>$id));

    }

    public function join_get($id){
        $sql = "SELECT user.user_id , mentor.mentor_id FROM user INNER JOIN mentor ON user.user_id = mentor.mentor_id WHERE user.user_id = '".$id."'  ";
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
        $sql="SELECT item.veg_Id,item.item_id,item.Item_type,item.avail_weight,item.item_end,item.total_cost,item.min_weight,item.farmer_id,vegetable.vege_name, user.user_id, farmer.user_id,farmer.farmer_id,user.firstname FROM item INNER JOIN vegetable on item.veg_Id=vegetable.vege_id INNER JOIN farmer on item.farmer_id=farmer.farmer_id INNER JOIN user ON farmer.user_id=user.user_id where item.item_end >= CURDATE()";
        $result=$this->connection->query($sql);
        $arr=array();
        if($result){
         while($row=mysqli_fetch_assoc($result))
         array_push($arr,$row);
       return $arr;
     
 
         }else
         echo "error";
    }

    


    

}

?>