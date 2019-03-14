<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title> MoviesNow </title>
    <link rel="icon" type="image/png" href="titleimg.png">
    <link rel="stylesheet" type="text/css" href="style.css"> 


    <script type="text/javascript">
	
	
function validation()

{

var a = document.form.username.value;
if(a=="")
{
	alert("Please enter the username");
document.form.username.focus();	
	return false;
}







if(form.email.value=="")
{
	alert("Please enter the email");
	form.email.focus();	
	return false;
}	
var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

if (reg.test(form.email.value) == false) 
{
	alert('Invalid email address');
	form.email.focus();	
	return false;
}


var a = document.form.password.value;
if(a=="")
{
alert("Please Enter Your Password");
document.form.password.focus();
return false;


}




}




	
	</script>




</head>
    <body>
    <div class="RegisterPage">
    <img src="avatar.jpg" class="avatar">
        <h1>Register  Here</h1>
            <form name="form" method="post" onsubmit="return(validation());">
            
            <input type="text" name="First Name" placeholder="First Name">
            
            <input type="text" name="Last Name" placeholder="Last Name">
            
            <input type="text" name="username" placeholder="Username">
            
            <input type="text" name="email" placeholder="Email">
                
            <input type="password" name="password" placeholder="Password">
	    <input type="submit" name="reg_user" value="Register">
	    <input type="reset" name="reset" value="Reset">
            </form>
        


        </div>
   
    </body>
</html>