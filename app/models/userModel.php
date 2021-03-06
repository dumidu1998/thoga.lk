<?php
require_once(__DIR__ . '/../../core/db_model.php');

class userModel extends db_model
{
    
    public function  getallusers(){
        $sql="SELECT * FROM user INNER JOIN usertype on usertype.type_id=user.usertype_id";
        return $this->queryfromsql($sql);
    }

    public function  getallusersbyuname($uname){
        $sql="SELECT * FROM user INNER JOIN usertype on usertype.type_id=user.usertype_id WHERE user.username LIKE '%".$uname."%'";
        return $this->queryfromsql($sql);
    }

    public function  getallbyutype($utype){
        $sql="SELECT * FROM user INNER JOIN usertype on usertype.type_id=user.usertype_id WHERE usertype.user_type='".$utype."'";
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
    function updatedetails($data){
		session_start();
		$firstname=$data['fname'];
        $lastname=$data['lname'];
        $mobile1=$data['mobileno1'];
        $mobile2=$data['mobileno2'];
		$user_id=$_SESSION['user'][0]['user_id'];


		$sql="UPDATE user SET firstname='".$firstname."', lastname='".$lastname."',contactno1='".$mobile1."',contactno2='".$mobile2."' WHERE user_id='".$user_id."'";
		$result=$this->connection->query($sql);
		if($result){ return true;}else{return false;}
	}




    public function  getallbyutypeanduname($utype,$uname){
        $sql="SELECT * FROM user INNER JOIN usertype on usertype.type_id=user.usertype_id WHERE usertype.user_type='".$utype."' AND user.username LIKE '%".$uname."%'";           
        return $this->queryfromsql($sql);
    }
    
    

    public function editpassword($pwd,$uid){
        return $this->update('user',array('password'=>$pwd),array('user_id'=>$uid));
    }

    public function obtainpassword($uid){
		return $this->read('user',array('password'),array('user_id'=>$uid));
    }
    
    public function getmentorid($uid){
		return $this->read('farmer',array('mentor_id'),array('user_id'=>$uid));
    }
    
    public function gettel($uid){
		return $this->read('user',array('contactno1'),array('user_id'=>$uid));
        
    }

    public function addotp($token,$otp,$contact){
		return $this->create('otp',array('token'=>$token,'otp'=>$otp,'phone'=>$contact));
    }

    public function confirmotp($otp,$token){
        $sql="SELECT * FROM otp WHERE token='".$token."' AND otp='".$otp."'";
        $result=$this->connection->query($sql);
        $row=mysqli_num_rows($result);
        return $row;
    }

}
?>