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


                if(mysqli_num_rows($result)){
                    // echo "yay";
                    $user_data = $this->user->get_data($uname);
                    $_SESSION['user'] = $user_data;
                    // print_r($_SESSION['user']);
                    // print_r($user_data);
                    foreach($user_data as $keys => $values){
                        if($values['user_type'] == 'buyer'){
                            // echo "im the buyer";
                            header("location:buyer/home");

                            header("location:buyer/home");
                            // print_r($user_data);

                        }elseif($values['user_type'] == 'farmer'){
                            // header("location:buyer/summery");
                            print_r($user_data);
                            echo "im the farmer"; 
                        }elseif($values['user_type'] == 'driver'){

                        }elseif($values['user_type'] == 'mentor'){

                        }elseif($values['user_type'] == 'admin'){

                        }
                    }
                    

                }else{
                    echo "no result";
                }
        }
    }

    public function view(){
        
        $View = new View("login/login");
    }
    

}