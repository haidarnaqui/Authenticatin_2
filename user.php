<?php
require "db.php";
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $userid=$_POST['userid'];
    // $password=$_POST['password'];
    $pwd=$_POST['password'];
    $password = md5($pwd);
    $cpwd=$_POST['cpassword'];
    $cpassword = md5($cpwd);
    $sql = " select *from  registration  where email ='$email'";
    $sql2 = " select *from  registration  where userid ='$userid'";
    $result=mysql_query($sql);
    $result2=mysql_query($sql2);
    if($row=mysql_fetch_Array($result))
    {
      echo "$email id  Aleady exist";
    }
    else if($row2=mysql_fetch_Array($result2))
    {
      echo "$userid Aleady exist";
    }
    else if($password!=$cpassword)
    {
        echo "Password and Confirm Paddword does not Match";
       
    }
    else
    {
        $sql="insert into registration (name,email,userid,password) values('$name','$email','$userid','$password')";
        mysql_query($sql);
        header('location:display.php');
    }
};


?>
<html lang="en">
    <style>
        .container
        {
            min-height: 90vh;
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
        p{
            color: red;
        }

    </style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add users</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST"> 
        <h3>Add Users</h3>
      
        <input type="text" name="name" placeholder="Enter your Name"  required autocomplete="off">
  
        <input type="email" name="email" placeholder="Enter your Email"  required autocomplete="off">
        <input type="User Id" name="userid" placeholder="Enter your User Id"  required autocomplete="off">
        <input type="password" name="password" placeholder="Enter your Password"  required autocomplete="off">
        <input type="password" name="cpassword" placeholder="Enter your Confirm password" autocomplete="off" required>
        <input type="submit" name="submit" value="Submit" class="form-btn">
        
        </form>
    </div>
</body>
</html>