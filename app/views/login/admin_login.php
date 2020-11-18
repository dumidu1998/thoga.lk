<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-login</title>
    <link rel="stylesheet" href="/thoga.lk/public/stylesheets/login/admin_login.css">

</head>
<body>

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