<?php

require_once(__DIR__.'/../models/user.php');
require_once(__DIR__.'/../../core/View.php');


class SignUpController {
    function __construct()
    {
        $this->model = new user();
    }

    public function show(){
        $view = new View("signup/index");
        $result = $this->model->read_cities();
        $view->assign('cities', $result);

    }
}




    ?>