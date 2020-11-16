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
            header ("Location: /thoga.lk?signup=1");
        }else{
            echo "<script>alert('error in SignUp');</script>";
            header ("Location: /thoga.lk?signup=0");
        }

    }

    public function addfarmer(){
        if(isset($_POST['submit'])){
            $user = $this->model->addfarmer($_POST);
            header ("Location: /thoga.lk");
        }else{
            echo "<script>alert('error in SignUp');</script>";
            header ("Location: /thoga.lk?signup=0");
        }
    }

    public function adddriver(){
        if(isset($_POST['submit'])){
            $user = $this->model->adddriver($_POST);
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
            header ("Location: /thoga.lk");
        }else{
            echo "<script>alert('error in SignUp');</script>";
            header ("Location: /thoga.lk?signup=0");
        }
    }

    public function addmentor(){
        if(isset($_POST['submit'])){
            $user = $this->model->addmentor($_POST);
            //header ("Location: /thoga.lk");
        }else{
            echo "<script>alert('error in SignUp');</script>";
            header ("Location: /thoga.lk?signup=0");
        }
    }
    
}




    ?>