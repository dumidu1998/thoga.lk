<?php

require_once(__DIR__.'/../../core/db_model.php');

class loginModel extends db_model{
    function get_all_users(){
		return $this->read('user',array('*'),null);
    }
    function get_user($uname, $pwd){
        $sql = "SELECT * FROM `user` WHERE usename = '$uname' and password = '$pwd' OR email='$uname' and password = '$pwd'";
        $result=$this->connection->query($sql);
		
		if($result){
		  return $result;
		}else
		echo "error";
    }
    function get_data($uname){
		return $this->read('user', array('*'), array('usename'=>$uname));

    }

}