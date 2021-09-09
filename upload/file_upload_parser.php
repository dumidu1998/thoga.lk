<?php
session_start();

// $connection = new mysqli('db.learnia.xyz', 'root', 'chata', 'thoga.lk');
$connection = new mysqli('localhost', 'root', '', 'thoga.lk');
$sql = "SELECT MAX(driver_id) AS maxid FROM driver";
$result=$connection->query($sql);
$row=mysqli_fetch_assoc($result);
$uid=$row['maxid'];
$uid++;


$fileN = $_FILES["file1"]["name"]; // The file name
$fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["file1"]["type"]; // The type of file it is
$fileSize = $_FILES["file1"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file1"]["error"]; // 0 for NO erros... and 1 for errors
$ext = "jpg";

$fileName=$uid."_".$_SESSION['temp'].".".$ext;

if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
}

if(move_uploaded_file($fileTmpLoc, $_SERVER['DOCUMENT_ROOT']."/thoga.lk/public/uploads/tmpuploads/$fileName")){
    echo "File upload is complete";
    $_SESSION['temp']++;
} else {
    echo "move_uploaded_file function failed";
}
?>