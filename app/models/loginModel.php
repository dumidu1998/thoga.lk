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
		// return $this->read('user', array('*'), array('usename'=>$uname, 'email'=>$uname));
      $sql = "SELECT a.*, b.user_type, c.* FROM user as a INNER JOIN usertype AS b ON a.usertype_id = b.type_id INNER JOIN address as c on a.user_id=c.user_id WHERE usename = '$uname' OR email = '$uname' ";
      $result=$this->connection->query($sql);
      $finale=array();
      if($result){
        while($row=mysqli_fetch_assoc($result))
        //print_r($row);
        array_push($finale,$row);
        return $finale;
      

      }else
      echo "error";
    }

}