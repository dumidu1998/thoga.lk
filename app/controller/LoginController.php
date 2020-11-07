<?php
require_once(__DIR__.'/../models/loginModel.php');
require_once(__DIR__.'/../../core/View.php');

class LoginController{
    public function __construct()
    {
        $this->user = new loginModel();
    }
    public function login(){
        
        if(isset($_POST['login'])){
                $uname = $_POST['uname'];
                $pwd = $_POST['pwd'];
                $result = $this->user->get_user($uname, $pwd);


                if(mysqli_num_rows($result)){
                    echo "yay";
                    $user_data = $this->user->get_data($uname);
                    print_r($user_data);
                }else{
                    echo "no result";
                }
        }
    }

    public function view(){
        $View = new View("login/login");
        $result = $this->user->get_all_users();

        $View->assign('data', $result);
        
        
    }
    

}