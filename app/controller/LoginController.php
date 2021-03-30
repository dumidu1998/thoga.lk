<?php
require_once(__DIR__.'/../models/loginModel.php');
require_once(__DIR__.'/../../core/View.php');

class LoginController{
    public function __construct()
    {
        $this->user = new loginModel();
    }
    public function login(){
        session_start();
        if(isset($_POST['login'])){
                $uname = $_POST['uname'];
                $pwd = $_POST['pwd'];
                $result = $this->user->get_user($uname, $pwd);
                print_r($result);
                echo mysqli_num_rows($result);
                if(mysqli_num_rows($result)){
                    $_SESSION['loginerror']=0;
                    $user_data = $this->user->get_data($uname);
                    $_SESSION['user'] = $user_data;
                    
                    foreach($user_data as $keys => $values){
                         echo $values['user_type'];
                        if($values['user_type'] == 'buyer'){
                           // echo ("buyer");
                            header("location:buyer/home");
                        }elseif($values['user_type'] == 'farmer'){
                            //print_r($user_data);
                            //echo "im the farmer"; 
                            header("location:farmer/dash");
                        }elseif($values['user_type'] == 'driver'){
                            $id=$this->user->get_driver_id($_SESSION['user'][0]['user_id']);
                            $_SESSION['driver']['driver_id']=$id[0]['driver_id'];
                            $_SESSION['driver']['user_id']=$_SESSION['user'][0]['user_id'];
                            header("location:driver/dashboard");
                        }elseif($values['user_type'] == 'mentor'){
                            header("location:mentor/dash");
                        }elseif($values['user_type'] == 'admin'){
                            
                        }
                    }
                }else{
                    $_SESSION['loginerror']=1;
                    header("location: /thoga.lk");
                }
        }
    }

    public function view(){
        $View = new View("login/login");
    }

    public function admin_login(){
        $View = new View("login/admin_login");
    }
    public function logout(){
        session_destroy();
        header("location: /thoga.lk");
    }

    public function admin_log(){
        // session_destroy();
        session_start();
        if(isset($_POST['login'])){
            $uname = $_POST['uname'];
            $pwd = md5($_POST['pwd']);
            $result = $this->user->log_admin($uname,$pwd);
            $out = array();
            if(mysqli_num_rows($result)){
                while ($row = mysqli_fetch_assoc($result))
                    array_push($out, $row);
                $adminid=$out[0]['user_name'];
                $_SESSION['loginerror']=0;
                $_SESSION['usertype']='admin';
                $_SESSION['admin_uname']=$adminid;
                print_r($_SESSION);
                header("location:/thoga.lk/admin");
            }else{
                $_SESSION['loginerror']=1;
                header("location:/thoga.lk/adminlogin?error=1");
                
            }
        }
    }
    

}