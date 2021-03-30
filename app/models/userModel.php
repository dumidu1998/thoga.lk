<?php
require_once('loginModel.php');

class userModel extends loginModel
{
    function __construct()
    {
        $this->model = new loginModel();
    }

    public function  login()
    {
        $v = $this->model->get_data("ucsc_b");
        echo "d";
    }

}
// userModel u = new userModel();
// u->login();
?>


<?php

?>