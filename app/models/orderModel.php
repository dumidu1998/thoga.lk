<?php

require_once(__DIR__.'/../../core/db_model.php');

class orderModel extends db_model{

    public function setstaus($id){

        $sql="UPDATE orders SET status=1 WHERE order_id=".$id;

        $result=$this->connection->query($sql);

        echo "done- SQL Worked";
       
    }
    public function viewmore_farmer($id){
        $sql = "SELECT a.*, b.*,c.*, d.*, e.* from orders as a INNER join order_details as b on a.order_id=b.order_id INNER join farmer AS c ON c.farmer_id=b.farmer_id INNER join user as d on c.user_id=d.user_id INNER JOIN vegetable AS e ON e.vege_id= b.item_id where a.order_id=".$id;
        $result=$this->connection->query($sql);
        $arr=array();
        // echo $sql;
        if($result){
         while($row=mysqli_fetch_assoc($result))
         array_push($arr,$row);
          return $arr;
     
 
         }else
         echo "error in SQL";
    }
    public function viewmore_driver($id){
        $sql="SELECT a.*, b.*,c.*,e.*,x.*,f.name_en as province,g.name_en as city,i.name_en as district FROM orders as a INNER JOIN driver as b ON a.driver_id=b.driver_id INNER JOIN user as c ON b.user_id=c.user_id INNER JOIN address as e on c.user_id=e.user_id INNER JOIN provinces as f on f.id=e.province INNER JOIN cities as g on g.id=e.city INNER JOIN districts as i on i.id=e.province INNER JOIN status AS x on a.status=x.status_id WHERE a.order_id=".$id;
        $result=$this->connection->query($sql);
        $arr=array();
        // echo $sql;
        if($result){
         while($row=mysqli_fetch_assoc($result))
         array_push($arr,$row);
          return $arr;
     
 
         }else
         echo "error";
    }

    public function get_all_orders($id){
		  return $this->read('orders', array('*'), array('buyer_id'=>$id));
    }


    public function get_all_for_chart(){
      $sql="Select CAST(order_date AS DATE) as count_date, count(order_date) as counted_leads from orders where order_date between (CURDATE() - INTERVAL 1 MONTH ) and (CURDATE() + INTERVAL 24 DAY_HOUR) group by count_date";
      $result=$this->connection->query($sql);
      $arr=array();
      if($result){
       while($row=mysqli_fetch_assoc($result))
       array_push($arr,$row);
     return $arr;
        }else
       echo "error";
    }

    function getdriver_upcomingorders($id){


      $sql= "SELECT * FROM  orders where orders.pickup_date>= CURRENT_TIMESTAMP AND status='0' AND driver_id='".$id."'" ;
		
      $result=$this->connection->query($sql);
      
      $finale=array();
      if($result){
          while($row=mysqli_fetch_assoc($result))
        array_push($finale,$row);
          return $finale;
      }else
      echo "error";
    
    }

    function getdriver_orderhistory($did){
      $sql= "SELECT * FROM  orders where orders.pickup_date < CURRENT_TIMESTAMP AND driver_id='".$did."'";
		
      $result=$this->connection->query($sql);
      
      $finale=array();
      if($result){
          while($row=mysqli_fetch_assoc($result))
          array_push($finale,$row);
          return $finale;
      }else
      echo "error";
    

    }


       


    function get_order_details($id){

      return $this->read('orders', array('*'), array('order_id'=>$id));
      
  }

  function  order_buyername($id){
		$sql= "SELECT a.username,a.firstname,a.lastname,a.contactno1,a.contactno2 FROM user AS a INNER JOIN buyer AS b ON a.user_id=b.user_id INNER JOIN orders AS c ON b.buyer_id=c.buyer_id where c.order_id='".$id."'";
		
		$result=$this->connection->query($sql);
		
		$finale=array();
		if($result){
        while($row=mysqli_fetch_assoc($result))
			array_push($finale,$row);
		    return $finale;
		}else
		echo "error";

  }
  
  function  order_drivername($id){

		$sql= "SELECT a.username, a.firstname, a.lastname, a.contactno1, a.contactno2 FROM user AS a INNER JOIN driver AS b ON a.user_id=b.user_id INNER JOIN orders AS c ON b.driver_id=c.driver_id where c.order_id='".$id."'";

		$result=$this->connection->query($sql);
		$finale=array();
		if($result){
      while($row=mysqli_fetch_assoc($result))	
			array_push($finale,$row);
		return $finale;
		}else
		echo "error";

	}

  

  function  orderdetails_total($orderId){
		$sql = "SELECT vegetable.vege_name,item.item_id, item.total_cost, order_details.weight, order_details.farmer_id, order_details.details_id, order_details.order_id,orders.weight,orders.pickup_date,orders.buyer_id,buyer.buyer_id,buyer.b_name, cities.name_en AS city, farmer.farm_name, districts.name_en AS district, provinces.name_en AS province, address.zip_code, address.address_line1, address.address_line2, user.firstname , user.lastname, user.contactno1 ,user.contactno2 FROM order_details INNER JOIN item on item.item_id = order_details.item_id INNER JOIN orders ON order_details.order_id=orders.order_id INNER JOIN buyer ON buyer.buyer_id=orders.buyer_id INNER JOIN vegetable ON vegetable.vege_id= item.veg_id INNER JOIN farmer on farmer.farmer_id=order_details.farmer_id INNER JOIN address ON address.user_id=farmer.user_id INNER JOIN cities ON address.city=cities.id INNER JOIN user ON farmer.user_id=user.user_id INNER JOIN districts ON districts.id=address.district INNER JOIN provinces ON provinces.id=address.province where order_details.order_id='".$orderId."'";
		$result=$this->connection->query($sql);
		$finale=array();
    //echo $sql;
		if($result){
           while($row=mysqli_fetch_assoc($result)){
			array_push($finale,$row);
		   }
		  return $finale;
		}else
		echo "error";
  }

  function  order_city($id){
		$sql= "SELECT a.name_en, b.* FROM districts AS a  INNER JOIN orders AS b ON a.id=b.city where b.order_id='".$id."'";
		
		$result=$this->connection->query($sql);
		
		$finale=array();
		if($result){
        while($row=mysqli_fetch_assoc($result))
			array_push($finale,$row);
		    return $finale;
		}else
		echo "error";
	}
  
  function  order_all($id){
    $sql= "SELECT b.*,a.description FROM orders AS b INNER JOIN status as a ON b.status=a.status_id where b.order_id='".$id."'";
		
		$result=$this->connection->query($sql);
		
		$finale=array();
		if($result){
      while($row=mysqli_fetch_assoc($result))
			array_push($finale,$row);
      return $finale;
		}else
		echo "error";
	}

  function insert_order($data){
    return $this->create('orders',$data);
  }

  function getneworderid(){
    $sql="SELECT LAST_INSERT_ID() as id";
    $newvid=$this->queryfromsql($sql);
    return $newvid[0]['id'];
  } 

  function insert_order_details($order_details){
    return $this->create('order_details',$order_details);
  }

  function get_buyer_upcoming($id){
    $sql= "SELECT a.*,b.*,c.* FROM  orders AS a INNER JOIN driver AS b ON a.driver_id=b.driver_id INNER JOIN user as c ON b.user_id=c.user_id  where a.pickup_date>= CURRENT_TIMESTAMP AND buyer_id='".$id."' AND a.status != 4";
		
    $result=$this->connection->query($sql);
    // echo $sql;
    $finale=array();
    if($result){
        while($row=mysqli_fetch_assoc($result))
      array_push($finale,$row);
        return $finale;
    }else
    echo "error";
  }

  function get_buyer_upcoming_pick($id){
    $sql= "SELECT * FROM  orders where pickup_date>= CURRENT_TIMESTAMP AND buyer_id='".$id."' AND status != 4 AND driver_id is NULL ";
		
    $result=$this->connection->query($sql);
     echo $sql;
    $finale=array();
    if($result){
        while($row=mysqli_fetch_assoc($result))
      array_push($finale,$row);
        return $finale;
    }else
    echo "error";
  }

  function getbuyer_orderhistory($id){
    $sql= "SELECT a.*,b.*,c.* FROM  orders AS a INNER JOIN driver AS b ON a.driver_id=b.driver_id INNER JOIN user as c ON b.user_id=c.user_id  where a.pickup_date < CURRENT_TIMESTAMP AND buyer_id='".$id."'";
  
    $result=$this->connection->query($sql);
    
    $finale=array();
    if($result){
        while($row=mysqli_fetch_assoc($result))
        array_push($finale,$row);
        return $finale;
    }else
    echo "error";
  }
  
  function  getrating($id){
    $sql="SELECT * FROM feedback where order_id=".$id;
    return $this->queryfromsql($sql);
  }
  
  function getcancelled(){
    $sql = "SELECT orders.*, buyer.*,user.* FROM orders INNER JOIN buyer ON orders.buyer_id=buyer.buyer_id INNER JOIN user ON buyer.user_id=user.user_id WHERE orders.status=4 ORDER BY orders.order_id ASC";
    return $this->queryfromsql($sql);
  }

  function getOrderHistory($farmerid){
    $sql="SELECT DISTINCT(order_details.order_id),buyer.b_name,orders.order_id,orders.total_cost,orders.weight,orders.pickup_date,orders.order_id FROM orders 
    INNER JOIN buyer ON orders.buyer_id=buyer.buyer_id 
    INNER JOIN order_details ON orders.order_id=order_details.order_id 
    where orders.pickup_date < CURDATE() AND order_details.farmer_id='".$farmerid."' ";
        $result=$this->connection->query($sql);
        $arr=array();
        $final=array();
        if($result){
         while($row=mysqli_fetch_assoc($result))
         array_push($arr,$row);
         foreach($arr as $key=>$values){
           $orderdetails=$this->orderdetails_total($values['order_id']);
            array_push($final,$orderdetails[0]);
         }
        //  print_r($final);
       return $final;
         }else
         echo "error";
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

  function getorders30($fid){
    $sql="SELECT COUNT(*) as count FROM `orders` INNER JOIN order_details ON orders.order_id=order_details.order_id WHERE
     orders.order_date<DATE_ADD(CURDATE(),INTERVAL 2 DAY) AND orders.order_date>DATE_SUB(CURDATE(),INTERVAL 30 DAY) 
     AND order_details.farmer_id='".$fid."'";
    $result=$this->connection->query($sql);
    $arr=array();
    if($result){
     while($row=mysqli_fetch_assoc($result))
     array_push($arr,$row);
    return $arr;
     }else
     echo "error";
  }

  function getsales30($fid){
    $sql="SELECT SUM(total_cost) as sum FROM `orders` INNER JOIN order_details ON orders.order_id=order_details.order_id WHERE
     orders.order_date<DATE_ADD(CURDATE(),INTERVAL 2 DAY) AND orders.order_date>DATE_SUB(CURDATE(),INTERVAL 30 DAY) 
     AND order_details.farmer_id='".$fid."'";
    $result=$this->connection->query($sql);
    $arr=array();
    if($result){
     while($row=mysqli_fetch_assoc($result))
     array_push($arr,$row);
    return $arr;
     }else
     echo "error";
  }

    function changeorder_status($orderid,$status){
      return $this->update('orders',array('status'=>$status),array('order_id'=>$orderid));
    }
  
    function getstatus($order_id){
      return $this->join2tables(array('status.description'),'orders','status','orders.status=status.status_id',array('orders.order_id'=>$order_id));
    }

    function getnewid(){
      return $this->queryfromsql("select MAX(order_id)+1 AS next_id FROM orders");
    }


    
}