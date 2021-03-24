<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/driver/aboutus.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>

    <title>About us</title>
</head>
<body>
<div class="example">
  <button id="b3">A success message!</button>
  <button id="b4">A Error message!</button>
</div>

</body>
<script>

function success(){
	swal("Good job!", "Profile Updated Sucessfully!", "success");
};
function error(){
	swal("ERROR", "Please Try Again!", "error");
};



</script>
<?php  $error=0;?>
<?php
if ($error==0){
    echo "<script>success()</script>";
}else{
    echo "<script>error()</script>";
}
?>
</html>