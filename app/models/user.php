<?php

require_once(__DIR__.'/../../core/db_model.php');

class user extends db_model{
    function get_all(){
		return $this->read('item',array('*'),null);
    }

    function read_cities(){
        return $this->read('city',array('*'),null);
    }

    function read_provinces(){
        return $this->read('province',array('*'),null);
    }


}


?>