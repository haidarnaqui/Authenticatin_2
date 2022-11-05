<?php
session_start();
require "db.php";
if(isset($_POST['submit']))
{
 

    $userid=$_POST['userid'];
    // $password=$_POST['password'];
    $pwd=$_POST['password'];
    $password = md5($pwd);
  
    $sql = " select *from  registration  where userid ='$userid' and password='$password'";
    
    $result=mysql_query($sql);
 
    if($row=mysql_fetch_Array($result))
    {
      echo "User Accessed";
      $_SESSION['userid']=$userid;
      header('location:dashboard.php');
    }
    else
    {
        echo "User id or password incorrect";
    }
   
};


?>
<html lang="en">
    <style>
        .container
        {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            padding-bottom: 60px;
            background: #eee;
        }
        .container form
        {
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 1);
            background: #eee;
            text-align: center;
            width: 500px;
        }
        .container form h3{

            font-size: 30px;
            text-transform: uppercase;
            margin-bottom: 10px;
            color: #333;
        }
        .container form input
        {
            width: 100%;
            padding: 10px;
            padding: 10px 15px;
            font-size: 15px;
            margin: 8px 0px;
        }
        .an{
            color: green;
            text-shadow: #eee;
        }
        .form-btn
        {
            background: green;
            color: whitesmoke;
            font-size: large;
            text-transform: uppercase;
            cursor: pointer;
        }
        .form-btn:hover
        {
            background: green;
            color: gainsboro;
        }
        p
        {
            margin-top:10px;
            font-size: 20px;
            color:#333;
        }

    </style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST"> 
        <h3>Login</h3>
 
  
        <input type="text" name="userid" placeholder="Enter your User Id"  required autocomplete="off">
   
        <input type="password" name="password" placeholder="Enter your Password"  required autocomplete="off">
    
    
        <input type="submit" name="submit" value="Login Now" class="form-btn">
        <p>Don't have an account?  <a href="register.php" class="an">Register Now</a></p>
        </form>
    </div>
</body>
</html>