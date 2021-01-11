<?php

require_once(__DIR__.'/../../core/db_model.php');

class orderModel extends db_model{

    public function setstaus($id){

        $sql="UPDATE orders SET status=1 WHERE order_id=".$id;

        $result=$this->connection->query($sql);

        echo "done";
       
    }
    public function viewmore_farmer($id){
        $sql = "SELECT a.*, b.*,c.*, d.* from orders as a INNER join order_details as b on a.order_id=b.order_id INNER join farmer AS c ON c.farmer_id=b.farmer_id INNER join user as d on c.user_id=d.user_id where a.order_id=".$id;
        $result=$this->connection->query($sql);
        $arr=array();
        if($result){
         while($row=mysqli_fetch_assoc($result))
         array_push($arr,$row);
       return $arr;
     
 
         }else
         echo "error";
    }
    public function viewmore_driver($id){
        $sql="SELECT a.*, b.*,c.*,e.*,f.name_en as province,g.name_en as city,i.name_en as district FROM orders as a INNER JOIN driver as b ON a.driver_id=b.driver_id INNER JOIN user as c ON b.user_id=c.user_id INNER JOIN address as e on c.user_id=e.user_id INNER JOIN provinces as f on f.id=e.province_name INNER JOIN cities as g on g.id=e.city INNER JOIN districts as i on i.id=e.province_name WHERE a.order_id=".$id;
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