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
            $city= $this->model2->joinget4($order_id);
        
        }
        $result = $this->model2->get($order_id);
        $view = new View("driver/viewmore");
        $view->assign('order_id',$order_id);
        $view->assign('view',$result);
        $view->assign('res',$res);
        $view->assign('buyer',$buyer);
        $view->assign('cityy',$city);
        $view->assign('items',$items);
        
    }

    public function showcalendar(){
        $driver_id=1;//$_SESSION['driverid'];
        $dates=$this->model->getdates($driver_id);
        $orderdates=$this->model->getorderdates($driver_id);
        $all= json_encode(array_merge($orderdates,$dates));
        $view = new View("driver/showcalendar");
        $view->assign('alldates',$all);

        
    }

    public function unavailabledates(){
        
        if(isset($_POST['submitdates'])){
        
            $startdate=$_POST['startdate'];
            $enddate=$_POST['enddate'];
            $driver_id=1;//$_SESSION['driverid'];
            $result= $this->model->insertdates($driver_id,$startdate,$enddate);
            $view = new View("driver/showcalendar");
            echo "<script>confirm('Added');</script>";
            header("location:/thoga.lk/driver/calendar");
        }
    }

    public function viewprofile(){
        $view = new View("driver/driveruserprofile");
    }
    
    public function showvehicle(){
        session_start();  
        if(isset($_GET['vehicles'])){
            $vehicleid=$_GET['vehicleid'];
            $result = $this->model->get2($vehicleid);
        }else {
            $vehicleid=$_SESSION['vid'];
            $result = $this->model->get2($vehicleid);
          
        }
        
        $view = new View("driver/vehicles");
        $view->assign('vehicle',$result);
    }

    public function vehicledetails(){
         
        $result = $this->model->get3(1);//driver_id
        $view = new View("driver/vehicledetails");
        $view->assign('vehicledet',$result);
    }

    public function about_us(){
        $view = new View("driver/aboutus");
    }
    
    public function forum(){
        $view = new View("forum");
        
    }

    public function changeavailability0(){
        $vid=$_GET['vid'];
        echo $vid;
        $result = $this->model->makeunavailable($vid);//vehicle_id
    }

    public function changeavailability1(){
        $vid=$_GET['vid'];
        $result = $this->model->makeavailable($vid);//vehicle_id
    }

    public function changecost(){
        $vid=$_POST['vehicleid'];
        $cost=$_POST['cost'];
        $result = $this->model->changecost($vid,$cost);//vehicle_id
        header("location:/thoga.lk/driver/vehicles");
        
    }

}

?>