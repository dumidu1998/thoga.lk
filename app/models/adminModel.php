<?php

require_once(__DIR__ . '/../../core/db_model.php');

class AdminModel extends db_model
{

	function __contruct()
	{
	}

	function get_all()
	{
		return $this->read('driver', array('*'), null);
	}

	function get($id)
	{

		return $this->read('driver', array('*'), array('id' => $id));
	}

	function orderdetails()
	{
		$sql = "SELECT orders.*, buyer.*,user.* FROM orders INNER JOIN buyer ON orders.buyer_id=buyer.buyer_id INNER JOIN user ON buyer.user_id=user.user_id WHERE orders.pickup_date < CURDATE() ORDER BY orders.order_id ASC";
		$result = $this->connection->query($sql);
		$finale = array();
		if ($result) {
			while ($row = mysqli_fetch_assoc($result))
				array_push($finale, $row);
			return $finale;
		} else
			echo "error";
	}

	function upcomming()
	{
		$sql2 = "SELECT orders.*, buyer.*,user.* FROM orders INNER JOIN buyer ON orders.buyer_id=buyer.buyer_id INNER JOIN user ON buyer.user_id=user.user_id WHERE orders.pickup_date >= CURDATE() ORDER BY orders.order_id ASC";
		$result = $this->connection->query($sql2);
		$finale = array();
		if ($result) {
			while ($row = mysqli_fetch_assoc($result))
				array_push($finale, $row);
			return $finale;
		} else
			echo "error";
	}

	function adsubmit($data)
	{
		$caption = $data['caption'];
		$company = $data['company'];
		$position = $data['position'];
		$status = 1;
		$sql = "INSERT INTO advertisement(ad_caption, company, position,	status) Values
		 ('" . $caption . "','" . $company . "','" . $position . "','" . $status . "')";
		$result = $this->connection->query($sql);
		echo $sql;
		if ($result) {
			echo "done";
			return 1;
		} else {
			return 0;
		}
	}


	function getads()
	{
		return $this->read('advertisement', array('*'), null);
	}

	function showadmins()
	{
		return $this->read('admin', array('*'), null);
	}

	function addadmin($data)
	{
		$uname = $data['username'];
		$pwd = md5($data['password']);
		$name = $data['name'];
		$tel = $dataa['tel'];
		$sql = "INSERT INTO admin(user_name,password,name,tel_no) VALUES ('" . $uname . "','" . $pwd . "','" . $name . "','" . $tel . "')";
		$result = $this->connection->query($sql);
		if ($result) {
			return 1;
		} else {
			return0;
		}
	}

	function get_Stat()
	{
		$sql = "INSERT INTO admin(user_name,password,name,tel_no) VALUES ('" . $uname . "','" . $pwd . "','" . $name . "','" . $tel . "')";
		$result = $this->connection->query($sql);
		$finale = array();
		if ($result) {
			while ($row = mysqli_fetch_assoc($result))
				array_push($finale, $row);
			return $finale;
		} else
			echo "error";
	}

	function getalluserdata($id)
	{
		$sql = "SELECT a.*, b.user_type, c.*, 
		d.name_en AS c_name, 
		p.name_en AS p_name, 
		t.name_en AS d_name, 
		d2.name_en AS NC1,
		d3.name_en AS NC2
		FROM user as a 
		INNER JOIN usertype AS b ON a.usertype_id = b.type_id 
		INNER JOIN address as c on a.`user_id`=c.`user_id` 
		INNER JOIN cities AS d on c.city=d.id 
		INNER JOIN cities as d2  ON a.nearestcity1=d2.id 
		INNER JOIN cities as d3 ON a.nearestcity2=d3.id
		INNER JOIN provinces AS p on c.province_name=p.id 
		INNER JOIN districts AS t on c.district=t.id 
		WHERE `user_id` = " . $id;
		$result = $this->connection->query($sql);
		$finale = array();
		if ($result) {
			while ($row = mysqli_fetch_assoc($result))
				array_push($finale, $row);
			return $finale;
		} else
			echo "error";
	}

	function orderdetails_uname($uname)
	{
		$sql = "SELECT orders.*, buyer.*,user.* FROM orders INNER JOIN buyer ON orders.buyer_id=buyer.buyer_id INNER JOIN user ON buyer.user_id=user.user_id WHERE orders.pickup_date < CURDATE() AND (user.firstname LIKE '%".$uname."%' OR user.lastname LIKE '%".$uname."%' OR user.username LIKE '%".$uname."%') ORDER BY orders.order_id ASC";
		$result = $this->connection->query($sql);
		$finale = array();
		if ($result) {
			while ($row = mysqli_fetch_assoc($result))
				array_push($finale, $row);
			return $finale;
		} else
			echo "error";
	}

	function upcomming_uname($uname)
	{
		$sql2 = "SELECT orders.*, buyer.*,user.* FROM orders INNER JOIN buyer ON orders.buyer_id=buyer.buyer_id INNER JOIN user ON buyer.user_id=user.user_id WHERE orders.pickup_date >= CURDATE() AND (user.firstname LIKE '%".$uname."%' OR user.lastname LIKE '%".$uname."%' OR user.username LIKE '%".$uname."%') ORDER BY orders.order_id ASC";
		$result = $this->connection->query($sql2);
		$finale = array();
		if ($result) {
			while ($row = mysqli_fetch_assoc($result))
				array_push($finale, $row);
			return $finale;
		} else
			echo "error";
	}

	function get30days(){
		$sql="SELECT COUNT(orders.order_id) AS ordcount, SUM(orders.total_cost) as totalsales FROM orders WHERE orders.order_date<DATE_SUB(CURDATE(),INTERVAL 0 DAY) AND orders.order_date>DATE_SUB(CURDATE(),INTERVAL 30 DAY)";
		return $this->queryfromsql($sql);
	}

	function getusers(){
		$sql="SELECT COUNT(user_id)as count_users FROM user WHERE user.usertype_id!=100 ";
		return $this->queryfromsql($sql);
	}

	function getactiveproducts(){
		$sql="SELECT count(item.item_id) as itemcount FROM item WHERE item.item_end<DATE_SUB(CURDATE(),INTERVAL 0 DAY)";
		return $this->queryfromsql($sql);
	}

	function checkpwd($user,$pwd){
		$pwd=md5($pwd);
		$sql="SELECT count(admin_id) as numrow FROM admin WHERE admin_id=".$user." AND password='".$pwd."'";
		return $this->queryfromsql($sql);
	}

	function rstpwd($user){
		$pwd=md5("thoga.lk");
		return $this->update('user',array('password'=>$pwd),array('user_id'=>$user));

	}

	function blockuser($user){
		return $this->update('user',array('usertype_id'=>'100'),array('user_id'=>$user));

	}
	function removeuser($user){
		return $this->delete('user',array('user_id'=>$user));

	}



}
