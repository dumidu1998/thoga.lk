<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>

<div id="modal" class="container login">
    <span class="close">&times;</span>
<?php
// print_r($data);
?>
        <center>
            <img width=300px src="/thoga.lk/public/images/buyer/logo/farmer logo.png" alt="">

        </center>
       <h3>Log In</h3>
       <p align=center>Sign in Thoga.lk or create new account</p>
       
            
       

        <form action="/thoga.lk/login" method="post">
            <div class = "login-input">
                <input type="text" name="uname" class="login-input-control" id="exampleInputEmail1" placeholder="Email address/Username" required>
            </div>

            <div class="login-input">
                <input type="password" name="pwd" class="login-input-control" id="exampleInputPassword1" placeholder="Password" required>
            </div>

            <button type="submit" class="btn btn-primary" name="login">Log in</button>

            <div class = "signup_text">
                Do not have an account ? <a href="signup">Sign Up</a>

            </div>

        </form>

    </div>
    
</body>
</html>