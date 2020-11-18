<?php

require_once(__DIR__.'/../models/adminModel.php');
require_once(__DIR__.'/../../core/View.php');


class AdminController {
    function __construct()
    {
        $this->model = new AdminModel();
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
        }else{
            unlink($Sfile.$uploadid.$ext);
        }

        header("location: /thoga.lk/admin/admanager");
    }

}




    ?>