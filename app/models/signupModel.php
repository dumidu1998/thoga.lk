<?php

require_once(__DIR__.'/../../core/db_model.php');

class signupModel extends db_model{
    function get_all(){
		return $this->read('item',array('*'),null);
    }

    function read_cities(){
        return $this->read('cities',array('*'),null);
    }

    function read_provinces(){
        return $this->read('provinces',array('*'),null);
    }

    function read_districts(){
        return $this->read('districts',array('*'),null);
    }

    


}


?>