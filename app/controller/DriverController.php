<?php

require_once(__DIR__.'/../../core/View.php');

require_once(__DIR__.'/../models/vehicleModel.php');
require_once(__DIR__.'/../models/driverModel.php');
require_once(__DIR__.'/../models/orderModel.php');



class DriverController{
    
    function __construct()
    {
        

        $this->dmodel = new driverModel();
        $this->vmodel = new vehicleModel();
        $this->omodel = new orderModel();

        
    }

    public function driverdashboard(){
        session_start();
        $id=$_SESSION['driver']['driver_id'];
        $result = $this->omodel->getdriver_upcomingorders($id);//driver id
        $view = new View("driver/driverdashboard");
        $view->assign('details',$result);
    }

    public function viewmore(){
        if(isset($_POST['viewmore'])){
            $order_id=$_POST['order_id'];
            $res = $this->omodel->order_drivername($order_id);
            $buyer = $this->omodel->order_buyername($order_id);
            $items = $this->omodel->orderdetails_total($order_id);
            $city= $this->omodel->order_city($order_id);
            

        
        }
        $result = $this->omodel->get_order_details($order_id);
        $view = new View("driver/viewmore");
        $view->assign('order_id',$order_id);
        $view->assign('view',$result);
        $view->assign('res',$res);
        $view->assign('buyer',$buyer);
        $view->assign('cityy',$city);
        $view->assign('items',$items);

        
        
    }

   

    public function showcalendar(){
        session_start();
        $driver_id=$_SESSION['driver']['driver_id'];

        $dates=$this->dmodel->getdates($driver_id);
        $orderdates=$this->dmodel->getorderdates($driver_id);
        $all= json_encode(array_merge($orderdates,$dates));
        $view = new View("driver/showcalendar");
        $view->assign('alldates',$all);

        
    }

    public function unavailabledates(){
        
        if(isset($_POST['submitdates'])){
        
            $startdate=$_POST['startdate'];
            $enddate=$_POST['enddate'];
            // $driver_id=1;//$_SESSION['driverid'];
            session_start();
            $driver_id=$_SESSION['driver']['driver_id'];

            $result= $this->dmodel->insertunavailable_dates($driver_id,$startdate,$enddate);
            $view = new View("driver/showcalendar");
            echo "<script>confirm('Added');</script>";
            header("location:/thoga.lk/driver/calendar");
        }
    }

    public function addunavailability(){
        
        $q=0;
        if(isset($_REQUEST['sdate'])){
            $q=$_REQUEST['sdate'];
        }
        session_start();
        $id=$_SESSION['driver']['driver_id'];

        $this->dmodel->addunavailability($id,$q);
    }

    public function removeunavailability(){
        $q=0;
    if(isset($_REQUEST['sdate'])){
        $q=$_REQUEST['sdate'];
    }

    session_start();
    $id=$_SESSION['driver']['driver_id'];
    $this->dmodel->removeunavailability($id,$q);

    }

    public function viewprofile(){
        session_start();
        $id=$_SESSION['driver']['driver_id'];

        $result = $this->omodel->getdriver_orderhistory($id);//driver id
        $view = new View("driver/driveruserprofile");
        $view->assign('details',$result);
    }
    
    public function showvehicle(){
        session_start();  
        if(isset($_GET['vehicles'])){
            $vehicleid=$_GET['vehicleid'];
            $result = $this->vmodel->getdetails_vehicle($vehicleid);
        }else {
            $vehicleid=$_SESSION['vid'];
            $result = $this->vmodel->getdetails_vehicle($vehicleid);
          
        }
        
        $view = new View("driver/vehicles");
        $view->assign('vehicle',$result);
    }

    public function vehicledetails(){
        session_start();
        $id=$_SESSION['driver']['driver_id'];
        

        $result = $this->vmodel->getdriver_vehicles($id);//driver_id
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
        $result = $this->vmodel->makevehicle_unavailable($vid);//vehicle_id
    }

    public function changeavailability1(){
        $vid=$_GET['vid'];
        $result = $this->vmodel->makevehicles_available($vid);//vehicle_id
    }

    public function changevehicle_cost(){
        $vid=$_POST['vehicleid'];
        $cost=$_POST['cost'];
        $result = $this->vmodel->changevehicle_cost($vid,$cost);//vehicle_id
        header("location:/thoga.lk/driver/vehicles");
        
    }
     
    
    public function getdriver_orderhistory(){
        session_start();
        $id=$_SESSION['driver']['driver_id'];

        $result = $this->omodel->getdriver_upcomingorders($id);//driver id
        $view = new View("driver/driveruserprofile");
        $view->assign('details',$result);
        
    }

    public function showbutton(){
        session_start();
        $view = new View("driver/test");
        
    }




}

?>