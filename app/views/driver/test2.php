<?php
$q=0;
if(isset($_REQUEST['sdate'])){
    $q=$_REQUEST['sdate'];
}

session_start();
$connection = new mysqli('localhost', 'root', '' , 'thoga.lk');
$did=1;//$_SESSION['driverid'];

$sql="DELETE FROM unavailable_dates WHERE startdate ='" . $q . "'";
echo $sql;
$result=$connection->query($sql);
?>
