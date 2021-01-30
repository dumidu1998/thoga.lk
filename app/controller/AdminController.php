<?php

require_once(__DIR__.'/../models/adminModel.php');
require_once(__DIR__.'/../../core/View.php');
require_once(__DIR__.'/../models/vegetablesModel.php');
require_once(__DIR__.'/../models/driverModel.php');
require_once(__DIR__.'/../models/mentorModel.php');
require_once(__DIR__.'/../models/farmerModel.php');
require_once(__DIR__.'/../models/orderModel.php');


class AdminController {
    function __construct()
    {
        $this->model = new AdminModel();
        $this->vegetables = new vegetablesModel();
        $this->drivers = new driverModel();
        $this->mentors = new mentorModel();
        $this->farmers = new farmerModel();
        $this->orders = new orderModel();
    }

    public function index(){
        $results=$this->drivers->get_pending();
        $mentors=$this->mentors->get_pending();
        $farmers=$this->farmers->get_mentor_requests();
        $orders=$this->orders->get_all_for_chart();
        $view = new View("admin/index");
        $view->assign('results', $results);
        $view->assign('mentors', $mentors);
        $view->assign('farmers', $farmers);
        $view->assign('ordersforchart', $orders);
    }

    public function vieworders(){
        if(isset($_GET['process'])){
            if(isset($_GET['ordtypeu']) && isset($_GET['ordtypef']) && $_GET['ordtypeu']=="up" && $_GET['ordtypef']=="f" ){
                $results=$this->model->orderdetails();
                $upcoming=$this->model->upcomming();
            }else if(isset($_GET['ordtypeu']) && $_GET['ordtypeu']=="up"){
                $upcoming=$this->model->upcomming();
                $results=0;
            }else if(isset($_GET['ordtypef']) && $_GET['ordtypef']=="f"){
                $results=$this->model->orderdetails();
                $upcoming=0;
            }
            // $upcoming=$this->model->upcomming();
        }else{
            $results=$this->model->orderdetails();
            $upcoming=$this->model->upcomming();
        }
        $view = new View("admin/vieworders");
        $view->assign('results', $results); 
        $view->assign('upcoming', $upcoming); 
    }

    public function admanager(){
        $ads=$this->model->getads();
        $view = new View("admin/admanager");
        $view->assign('ads', $ads); 
    }

    public function usermanager(){
        $view = new View("admin/usermanager");
    }
    
    public function showpricelist(){
        $view = new View("admin/pricelist");
    }

    public function viewuser(){
        $view = new View("admin/userview");
    }

    public function showorder(){
        $ordid=$_GET['ord_id'];
        // echo $ordid;
        
        $view = new View("admin/orderdetails");

    }

    public function driverapplication(){
        $id=$_GET['id'];
        $basic= $this->drivers->get_basic($id);
        $vehicle= $this->drivers->get_vehicle_details($id);
        $view = new View("admin/Driver_application");
        $view->assign('id', $id); 
        $view->assign('basic', $basic); 
        $view->assign('vehicle', $vehicle); 

    }

    public function mentorapplication(){
        $view = new View("admin/Mentor_application");
    }

    public function mentorrequest(){
        $view = new View("admin/Mentor_request");
    }

    public function adsubmit(){
        session_start();
        $in=$_POST;
        $out=$this->model->adsubmit($in);
        $uploadid=$_SESSION['aduploadid'];
        $ext=".jpg";
        $Sfile= $_SERVER['DOCUMENT_ROOT']."/thoga.lk/public/uploads/tmpuploads/AD_";
        $Dfile= $_SERVER['DOCUMENT_ROOT']."/thoga.lk/public/uploads/ads/AD_";
        if($out==1){
            rename($Sfile.$uploadid.$ext, $Dfile.$uploadid.$ext);
            $_SESSION['msg']="Advertisement Submitted Sucessfully";
            echo "<script> alert 'Advertisement added Sucessfully!'; </scrpit>";
        }else{
            unlink($Sfile.$uploadid.$ext);
            $_SESSION['error']="Submit Error. Try Again";

        }
        header("location: /thoga.lk/admin/admanager");
    }

    public function showadmin(){
        $result=$this->model->showadmins();
        $view = new View("admin/admins");
        $view->assign('results', $result); 
    }

    public function addadmin(){
        session_start();
        $return = $this->model->addadmin($_POST);
        if($return ==1){
            $_SESSION['msg']="New Admin Added Sucessfully";
            header("location: showadmin");
        }else{
            $_SESSION['error']="New Admin Added Sucessfully";
            header("location: showadmin");
        }
    }
    
    public function addVeg(){
        $results=$this->vegetables->get_all_vegetables();
        
        $view = new View("admin/add_veg");
        $view->assign('vegetables', $results);
        
    }
    public function editVeg(){
        if(isset($_POST['edit'])){
            $this->vegetables->update_vegetables($_POST['id'],$_POST['prev_price'],$_POST['curr_price'],$_POST['veg_name']);
        }
        if(isset($_POST['del'])){
            echo "<script>confirm('Are you sure to delete vegetable?');</script>";
            $this->vegetables->delete_vegetables($_POST['id']);
        }
        
        header("location: vegetables");

    }

    public function addnewveg(){
        if(isset($_POST['add'])){
            $this->vegetables->add_vegetable($_POST['veg_name'],$_POST['price']);
        } 
    }

}




    ?>