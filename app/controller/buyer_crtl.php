<?php

require_once(__DIR__.'/../models/item.php');

class buyer{
    function __construct()
    {
        $this->model = new item();
    }

    function getAll_get(){
        $result = $this->model->get_all();
        print_r($result);
        
    }
}


?>