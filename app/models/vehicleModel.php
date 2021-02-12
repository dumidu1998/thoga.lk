<?php 

require_once(__DIR__.'/driverModel.php');

class vehicleModel extends driverModel{

	function __contruct(){
		
	}

	function getdetails_vehicle($id){

        return $this->read('vehicles', array('*'), array('vehicle_id'=>$id));

        
	}
	
	function getdriver_vehicles($id){

        return $this->read('vehicles', array('*'), array('driver_id'=>$id));

        
	}
	
	function makevehicles_available($id){
        $sql = "UPDATE vehicles SET availability = 1 WHERE vehicles.vehicle_id = ".$id;
        $result=$this->connection->query($sql);
        if($result){
            echo "done";
        }else{echo "error";}
    }
	
	function makevehicle_unavailable($id){
        $sql = "UPDATE vehicles SET availability = 0 WHERE vehicles.vehicle_id = ".$id;
        $result=$this->connection->query($sql);
        if($result){
            echo "done";
        }else{echo "error";}
	}
	
	function changevehicle_cost($vid,$cost){
        $sql = "UPDATE vehicles SET cost_km =".$cost." WHERE vehicles.vehicle_id = ".$vid;
        $result=$this->connection->query($sql);
        if($result){
            echo "done";
        }else{echo "error";}
    }
}
 ?>