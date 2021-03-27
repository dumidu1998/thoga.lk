<?php
require_once(__DIR__ . '/../../core/db_model.php');


class userModel extends db_model
{
    
    public function  getallusers(){
        $sql="SELECT * FROM user INNER JOIN usertype on usertype.type_id=USER.usertype_id";
        return $this->queryfromsql($sql);
    }
    public function  getallusersbyuname($uname){
        $sql="SELECT * FROM user INNER JOIN usertype on usertype.type_id=USER.usertype_id WHERE user.username LIKE '%".$uname."%'";
        return $this->queryfromsql($sql);
    }
    public function  getallbyutype($utype){
        $sql="SELECT * FROM user INNER JOIN usertype on usertype.type_id=USER.usertype_id WHERE usertype.user_type='".$utype."'";
        return $this->queryfromsql($sql);
    }
    public function  getallbyutypeanduname($utype,$uname){
        $sql="SELECT * FROM user INNER JOIN usertype on usertype.type_id=USER.usertype_id WHERE usertype.user_type='".$utype."' AND user.username LIKE '%".$uname."%'";           
        return $this->queryfromsql($sql);
    }


}
?>