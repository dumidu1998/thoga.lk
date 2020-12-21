<?php
session_start();
$connection = new mysqli('localhost', 'root', '' , 'thoga.lk');
$sql = "SELECT MAX(ad_id) AS maxid FROM advertisement";
$result=$connection->query($sql);
$row=mysqli_fetch_assoc($result);
$uid=$row['maxid'];
$uid++;
$_SESSION['aduploadid']=$uid;

$fileN = $_FILES["file"]["name"]; // The file name
$fileTmpLoc = $_FILES["file"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["file"]["type"]; // The type of file it is
$fileSize = $_FILES["file"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file"]["error"]; // 0 for NO erros... and 1 for errors
$ext = "jpg";

$fileName="AD_".$uid.".".$ext;

if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
}

if(move_uploaded_file($fileTmpLoc, "../public/uploads/tmpuploads/$fileName")){
    echo "File upload is complete";
} else {
    echo "move_uploaded_file function failed";
}
?>