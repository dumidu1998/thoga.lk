<?php

require_once(__DIR__.'/../../core/db_model.php');

class insertmodel extends db_model{

    public function insert_data($itemname,$avaiweight,$minweight,$price,$startdate,$enddate,$itemtype,$ides,$f_id){


            $query = "INSERT into item (veg_Id,avail_weight,min_weight,total_cost,item_start,item_end,item_type,item_des,farmer_id) values ('".$itemname."','".$avaiweight."','".$minweight."','".$price."','".$startdate."','".$enddate."','".$itemtype."','".$ides."','".$f_id."')";
            echo $query;
            
            $result =$this->connection->query($query);
           

            if($result){
           echo "Insert Data Successfully.";
            }
            else{
                echo "Error...!";
            }



        
        
    }
    public function read_id($id){
		return $this->read('farmer', array('*'), array('user_id'=>$id));

    }

}

?>