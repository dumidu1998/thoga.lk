<?php

require_once(__DIR__.'/../../core/db_model.php');

class vegetablesModel extends db_model{

    public function get_all_vegetables(){
        return $this->read('vegetable',array('*'),null);

    }
    public function update_vegetables($id, $prev_price, $curr_price,$name){
        $sql = "UPDATE vegetable SET vege_name = '".$name."', curr_price= '".$curr_price."', prev_price = '".$prev_price."' WHERE vege_id = '".$id."'";
        $result = $this->connection->query($sql);
        echo $sql;
    }
    public function delete_vegetables($id){
        $sql = "DELETE FROM vegetable WHERE vege_id = '".$id."'";
        
    }
}