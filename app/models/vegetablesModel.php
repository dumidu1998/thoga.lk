<?php

require_once(__DIR__.'/../../core/db_model.php');

class vegetablesModel extends db_model{

    public function get_all_vegetables(){
        return $this->read('vegetable',array('*'),null);

    }
}