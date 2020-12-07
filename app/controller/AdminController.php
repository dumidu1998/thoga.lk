<?php

require_once(__DIR__.'/../models/adminModel.php');
require_once(__DIR__.'/../../core/View.php');
require_once(__DIR__.'/../models/vegetablesModel.php');


class AdminController {
    function __construct()
    {
        $this->model = new AdminModel();
        $this->vegetables = new vegetablesModel();
    }

    public function index(){
        $view = new View("admin/index");
    }

    public function vieworders(){
        $results=$this->model->orderdetails();
        $upcoming=$this->model->upcomming();
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
        $ordid=$_POST['order_id'];
        // echo $ordid;
        $view = new View("admin/orderdetails");

    }

    public function driverapplication(){
        $view = new View("admin/Driver_application");
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

}




    ?>