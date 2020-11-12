<?php

require_once(__DIR__.'/../models/driver/driverdash.php');
require_once(__DIR__.'/../../core/View.php');
require_once(__DIR__.'/../models/driver/viewmoree.php');

class DriverController{
    
    function __construct()
    {
        $this->model = new driverdash();
        $this->model2 = new viewmoree();
        $this->model3 = new viewmoree();
    }

    public function driverdashboard(){
        $result = $this->model->get(1);//driver id
        $view = new View("driver/driverdashboard");
        $view->assign('details',$result);
    }

    public function viewmore(){
        if(isset($_POST['viewmore'])){
            $order_id=$_POST['order_id'];
            $res = $this->model2->joinget2($order_id);
            $buyer = $this->model2->joinget1($order_id);
            $items = $this->model2->joinget3($order_id);
        
        }
        $result = $this->model2->get($order_id);
        $view = new View("driver/viewmore");
        $view->assign('order_id',$order_id);
        $view->assign('mmmm',$result);
        $view->assign('res',$res);
        $view->assign('buyer',$buyer);
        $view->assign('items',$items);
        
        
    }

    public function calerndar(){
        $view = new View("driver/calendar");
        
    }

    public function viewprofile(){
        $view = new View("driver/driveruserprofile");
    }






}


?>