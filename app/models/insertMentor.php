<?php

require_once(__DIR__.'/../../core/db_model.php');

class insertMentor extends db_model{

    public function insert_data($itemname,$avaiweight,$minweight,$price,$startdate,$enddate,$itemtype,$farmername,$ides){


            $query = "INSERT into item (veg_Id,avail_weight,min_weight,total_cost,item_start,item_end,item_type,farmer_id,item_des) values ('".$itemname."','".$avaiweight."','".$minweight."','".$price."','".$startdate."','".$enddate."','".$itemtype."','".$farmername."','".$ides."')";
            $result =$this->connection->query($query);
           

            if($result){
            echo "Insert Data Successfully.";
            }
            else{
                echo "Error...!";
            }



        
        
    }

    

}

?>