<?php

require_once(__DIR__.'/../models/item.php');
require_once(__DIR__.'/../../core/View.php');


class BuyerController {
    function __construct()
    {
        $this->model = new item();
    }

    function getAll_get(){
        $result = $this->model->get_all();
        print_r($result);
        
    }

    public function selectDriver( ){
        $view = new View("buyer/selectDriver");
        $view->assign('data', []);
        
        
        
    }
}


?>