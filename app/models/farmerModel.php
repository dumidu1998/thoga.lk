<?php

require_once(__DIR__.'/../../core/db_model.php');


class farmerModel extends db_model{
    function get_all(){
        return $this->read('item',array('*'),null);
    }

    function get_details(){
        return $this->read('order_details',array('*'),null);

    }
    
    function get_records(){
        return $this->read('vegetable',array('vege_name'),null);
    }
    
}


?>