<?php

require_once(__DIR__.'/../models/signupModel.php');
require_once(__DIR__.'/../../core/View.php');
require_once(__DIR__.'/LoginController.php');


class SignUpController {
    function __construct()
    {
        $this->model = new signupModel();
        $this->Lview = new LoginController();
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
        session_start();
        if(isset($_POST['submit'])){
            $status = $this->model->addbuyer($_POST);
            $_SESSION['signupstatus']=$status;
            header ("Location: /thoga.lk");
        }
    }

    public function addfarmer(){
        session_start();
        if(isset($_POST['submit'])){
            $status = $this->model->addfarmer($_POST);
            $_SESSION['signupstatus']=$status;
            header ("Location: /thoga.lk");
        }
    }

    public function adddriver(){
        session_start();
        if(isset($_POST['submit'])){
            $status = $this->model->adddriver($_POST);
            $maxid=$this->model->getmaxDid();
            $sid=$maxid;
            $ext=".jpg";
            $cpath= $_SERVER['DOCUMENT_ROOT']."/thoga.lk/public/uploads/tmpuploads/";
            $Sfile = $cpath.$maxid;
            $Dfile= $_SERVER['DOCUMENT_ROOT']."/thoga.lk/public/uploads/driveruploads/".$sid;
            rename($Sfile."_1".$ext, $Dfile."_DLF".$ext);
            rename($Sfile."_2".$ext, $Dfile."_DLB".$ext);
            rename($Sfile."_3".$ext, $Dfile."_V".$ext);
            rename($Sfile."_4".$ext, $Dfile."_RL".$ext);
            $_SESSION['signupstatus']=$status;
            header ("Location: /thoga.lk");
        }
    }

    public function addmentor(){
        session_start();
        if(isset($_POST['submit'])){
            $status = $this->model->addmentor($_POST);
            $_SESSION['signupstatus']=$status;
            header ("Location: /thoga.lk");
        }
    }
    
}


    ?>