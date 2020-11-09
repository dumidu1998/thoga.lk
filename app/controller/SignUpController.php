<?php

require_once(__DIR__.'/../models/signup.php');
require_once(__DIR__.'/../../core/View.php');


class SignUpController {
    function __construct()
    {
        $this->model = new user();
    }

    public function show(){
        $view = new View("signup/index");
        $city = $this->model->read_cities();
        $province = $this->model->read_provinces();
        $view->assign('cities', $city);
        $view->assign('provinces', $province);

    }
}




    ?>