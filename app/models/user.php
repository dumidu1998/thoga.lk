<?php

require_once(__DIR__.'/../../core/db_model.php');

class item extends db_model{
    function get_all(){
		return $this->read('item',array('*'),null);
    }
}


?>