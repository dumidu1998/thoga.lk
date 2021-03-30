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
    
    public function  getAlldetailsforprofile($id){
        $sql="SELECT a.*, b.user_type, c.*, 
		d.name_en AS c_name, 
		p.name_en AS p_name, 
		t.name_en AS d_name, 
		d2.name_en AS NC1,
		d3.name_en AS NC2
		FROM user as a 
		INNER JOIN usertype AS b ON a.usertype_id = b.type_id 
		INNER JOIN address as c on a.user_id=c.user_id 
		INNER JOIN cities AS d on c.city=d.id 
		INNER JOIN cities as d2  ON a.nearestcity1=d2.id 
		INNER JOIN cities as d3 ON a.nearestcity2=d3.id
		INNER JOIN provinces AS p on c.province=p.id 
		INNER JOIN districts AS t on c.district=t.id 
		WHERE a.user_id = " . $id;        
        return $this->queryfromsql($sql);
    }
    
    public function  gettypedetails($uid,$utype){
        $sql="SELECT * FROM ".$utype." WHERE user_id=".$uid;           
        return $this->queryfromsql($sql);
    }

    public function editpassword($pwd,$uid){
        return $this->update('user',array('password'=>$pwd),array('user_id'=>$uid));
    }

    public function obtainpassword($uid){
		return $this->read('user',array('password'),array('user_id'=>$uid));
        
    }

}
?>