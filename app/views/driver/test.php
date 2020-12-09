<?php
$q=0;
if(isset($_REQUEST['sdate'])){
    $q=$_REQUEST['sdate'];
}
session_start();
$connection = new mysqli('localhost', 'root', '' , 'thoga.lk');
$did=1;//$_SESSION['driverid'];

$sql="INSERT INTO unavailable_dates(date_id,driver_id,startdate,enddate) VALUES(null,'".$did."','".$q."','".$q."')";
$result=$connection->query($sql);
?>
