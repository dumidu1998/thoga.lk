<?php
require_once(__DIR__.'/../../../core/db_model.php');

class driverdash extends db_model{

    function get($id){

        return $this->read('orders', array('*'), array('driver_id'=>$id));

        
    }
    
    function insertdates($driver_id,$startdate,$enddate){
        $sql = "INSERT INTO unavailable_dates (driver_id,startdate,enddate) VALUES ('".$driver_id."','".$startdate."','".$enddate."')";
        $result=$this->connection->query($sql);
        if($result){}else{echo "error";}	
    }
    
    function get2($id){

        return $this->read('vehicles', array('*'), array('vehicle_id'=>$id));

        
    }
    function get3($id){

        return $this->read('vehicles', array('*'), array('driver_id'=>$id));

        
    }

    function getdates($id){
        return $this->read('unavailable_dates', array("startdate AS start","enddate AS end","'Unavailable'AS'title'","'#d00000'AS'color'"), array('driver_id'=>$id));
    }

    function getorderdates($id){
        return $this->read('orders',array("pickup_date AS start","concat('Order # ',order_id) AS title"),array('driver_id'=>$id));
    }
    
}

?>






