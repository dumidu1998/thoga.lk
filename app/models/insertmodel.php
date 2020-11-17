<?php

require_once(__DIR__.'/../../core/db_model.php');

class insertmodel extends db_model{

    public function insert_data($itemname,$avaiweight,$minweight,$price,$startdate,$enddate,$itemtype,$itemimage){


            $query = "INSERT into item (veg_Id,avail_weight,min_weight,price,item_start,item_end,item_type,item_image) values ('".$itemname."','$avaiweight','$minweight','$price','$startdate','$enddate','$itemtype','')";
            
            $result =$this->connection->query($query);
           

            if($result){
           // echo "Insert Data Successfully.";
            }
            else{
                echo "Error...!";
            }



        
        
    }

}

?>