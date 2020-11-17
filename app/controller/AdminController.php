<?php

require_once(__DIR__.'/../models/adminModel.php');
require_once(__DIR__.'/../../core/View.php');


class AdminController {
    function __construct()
    {
        $this->model = new adminModel();
    }

    public function index(){
        $view = new View("admin/index");
    }

    public function vieworders(){
        $view = new View("admin/vieworders");

    }

    public function admanager(){
        $view = new View("admin/admanager");
    }

    public function usermanager(){
        $view = new View("admin/usermanager");
    }

    public function viewuser(){
        $view = new View("admin/user");
    }

}




    ?>