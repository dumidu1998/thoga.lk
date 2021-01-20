<?php

require_once(__DIR__.'/../models/adminModel.php');
require_once(__DIR__.'/../../core/View.php');
require_once(__DIR__.'/../models/vegetablesModel.php');
require_once(__DIR__.'/../models/driverModel.php');
require_once(__DIR__.'/../models/mentorModel.php');


class AdminController {
    function __construct()
    {
        $this->model = new AdminModel();
        $this->vegetables = new vegetablesModel();
        $this->drivers = new driverModel();
        $this->mentors = new mentorModel();
    }

    public function index(){
        $results=$this->drivers->get_pending();
        $mentors=$this->mentors->get_pending();
        $view = new View("admin/index");
        $view->assign('results', $results);
        $view->assign('mentors', $mentors);
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
    public function editVeg(){
        if(isset($_POST['edit'])){
            $this->vegetables->update_vegetables($_POST['id'],$_POST['prev_price'],$_POST['curr_price'],$_POST['veg_name']);
        }
        if(isset($_POST['del'])){
            $this->vegetables->delete_vegetables($_POST['id']);
        }
    }

    public function testajax(){
        $view = new View("admin/testajax");
    }

    public function processajax(){
        $g=$_GET['dd'];
        $b = $_GET['ddd'];
      
        echo  $b." ".$g;

    }

}




    ?>