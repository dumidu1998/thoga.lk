<?php 

require_once(__DIR__.'/driverModel.php');


class vehicleModel extends driverModel{

	function __contruct(){
		
	}

	function getdetails_vehicle($id){

        return $this->read('vehicles', array('*'), array('vehicle_id'=>$id));

        
	}
	
	function getdriver_vehicles($id){

        return $this->read('vehicles', array('*'), array('driver_id'=>$id,'verified_state'=>'1'));

        
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

    function addnewvehicle($get){
        session_start();
        $vno=$get['vehicleno'];
        $vtype=$get['vehicletype'];
        $maxweight=$get['maxweight'];
        $vcost=$get['vehiclecost'];
        $vtype=$get['vehicletype'];
        $driverid=$_SESSION['driver']['driver_id'];

        $sql ="INSERT INTO vehicles (vehicle_id, driver_id, vehicle_no, cost_km, vehicle_type, maximum_weight, availability, verified_state) VALUES (NULL, '".$driverid."', '".$vno."','".$vcost."', '".$vtype."', '".$maxweight."', '0', '0')";
        $result=$this->connection->query($sql);
        if($result){
            echo "done";
        }else{echo "error";}
    }

    function getnewvehicleid(){
        $sql="SELECT LAST_INSERT_ID() as id";
        $newvid=$this->queryfromsql($sql);
        return $newvid[0]['id'];
    }

    function removevehicle($vid){
        $sql="DELETE FROM vehicles where vehicle_id ='".$vid."'";
        $result=$this->queryfromsql($sql);
        return $result;
    }  

    function get_pending(){
		$sql = "SELECT driver.driver_id ,user.firstname,user.lastname, districts.name_en, vehicles.vehicle_id FROM driver INNER JOIN user ON driver.user_id = user.user_id INNER JOIN address ON address.user_id= user.user_id INNER JOIN districts ON address.district=districts.id INNER JOIN vehicles ON driver.driver_id=vehicles.driver_id WHERE driver.verified_state=1 AND vehicles.verified_state=0 AND vehicles.reject_reason IS NULL";
        return $this->queryfromsql($sql);
	}
    
    function accept($vid){
        return $this->update('vehicles',array('verified_state'=>'1'),array('driver_id'=>$vid));
    }

    function reject($vid,$reason){
        return $this->update('vehicles',array('verified_state'=>'0','reject_reason'=>$reason),array('vehicle_id'=>$vid,));
    }
    
}
 ?>