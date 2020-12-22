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
		$sql = "SELECT orders.*, buyer.*,user.* FROM orders INNER JOIN buyer ON orders.buyer_id=buyer.buyer_id INNER JOIN user ON buyer.user_id=user.user_id WHERE orders.pickup_date < CURDATE() ORDER BY user.user_id ASC";
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
		$sql2 = "SELECT orders.*, buyer.*,user.* FROM orders INNER JOIN buyer ON orders.buyer_id=buyer.buyer_id INNER JOIN user ON buyer.user_id=user.user_id WHERE orders.pickup_date >= CURDATE() ORDER BY user.user_id ASC";
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
}
