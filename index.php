<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title> MoviesNow </title>
    <link rel="icon" type="image/png" href="titleimg.png">
    <link rel="stylesheet" type="text/css" href="style.css">
       
</head>
    <body>
    <div class="login-box">
    <img src="avatar.jpg" class="avatar">
        <h1>Login Here</h1>
            <form name="form" method="post">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
             <input type="submit" name="login_user" value="Login"></br></br>
            <a href="Register.php">Register</a><br><br>
        
            <a href="#">Forget Password</a>    
            </form>
        


        </div>

    </body>
</html>