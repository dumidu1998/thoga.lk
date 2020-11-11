<?php
require_once(__DIR__.'/../../../core/db_model.php');

class driverdash extends db_model{

    function get($id){

        return $this->read('orders', array('*'), array('driver_id'=>$id));

        
    }
    

}

?>






