<?php

require_once(__DIR__.'/../models/signupModel.php');
require_once(__DIR__.'/../../core/View.php');


class SignUpController {
    function __construct()
    {
        $this->model = new signupModel();
    }

    public function show(){
        $view = new View("signup/index");
        $city = $this->model->read_cities();
        $province = $this->model->read_provinces();
        $district = $this->model->read_districts();
        $view->assign('cities', $city);
        $view->assign('provinces', $province);
        $view->assign('districts',$district);
    }

    public function addbuyer(){
        if(isset($_POST['submit'])){
            $user = $this->model->addbuyer($_POST);
        }
        showd();
    }

    public function showd(){
        $view = new View("index");
    }
    
}




    ?>