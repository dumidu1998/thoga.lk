<?php

require_once(__DIR__.'/../../core/db_model.php');

class vegetablesModel extends db_model{

    public function get_all_vegetables(){
        return $this->read('vegetable',array('*'),null);

    }
    public function update_vegetables($id, $prev_price, $curr_price,$name){
        $sql = "UPDATE vegetable SET vege_name = '".$name."', current_price= '".$curr_price."', prev_price = '".$prev_price."' WHERE vege_id = '".$id."'";
        $result = $this->connection->query($sql);
    }

    public function delete_vegetables($id){
        $sql = "DELETE FROM vegetable WHERE vege_id = '".$id."'";
        $result = $this->connection->query($sql);
    }

    public function add_vegetable($name,$price){
        $sql= "INSERT INTO `vegetable` (`vege_id`, `vege_name`, `image`, `current_price`, `prev_price`) VALUES (NULL, '".$name."', '".$name.".jpg', ".$price.", '0')";
        $result = $this->connection->query($sql);
    }
    
    public function getmprices(){
        return $this->read('vegetable',array('*'),null);
    }

    public function getmpricebyid($id){
        return $this->read('vegetable',array('*'),array('vege_id'=>$id));
    }
}