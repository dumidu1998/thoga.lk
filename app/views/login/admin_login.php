<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-login</title>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/login/admin_login.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>

</head>
<body>
<?php
session_start();
if(isset($_SESSION['loginerror']) && $_SESSION['loginerror']==1){
    echo "<script>swal('ERROR', 'Login Failed! Please Try Again!', 'error');</script>";
}
?>

<div class="admin_login">

    <center>
        <img width=300px src="/thoga.lk/public/images/buyer/logo/farmer logo.png" alt="">

        <h3>Log In</h3>
    </center>
   <p align=center>Admin Login</p>
   
        
   

    <form action="/thoga.lk/admin/log" method="post">
        <div class = "login-input">
            <input type="text" name="uname" class="login-input-control" id="exampleInputEmail1" placeholder="Email address/Username" required>
        </div>

        <div class="login-input">
            <input type="password" name="pwd" class="login-input-control" id="exampleInputPassword1" placeholder="Password" required>
        </div>
        
<center>

    <button type="submit" class="btn" name="login">Log in</button>

    
</center>

    </form>
</div>
    
</body>
</html>