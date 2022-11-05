<?php
require "db.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <style>
        img{
            width: 100px;
            height: 100px;
            position: relative;
        }
        
        *{
            margin: 0;
            padding: 0;
            outline: none;
            border: none;
            text-decoration: none;
        }
        .container
        {
            min-height: 100vh;
            display: flex;
            padding: 20px;
            text-align: center;
           
            background-color: yellow;
            
        }
       .right_side
       {
        position: relative;
        left: 70%;
        font-weight: bold;
        font-size: large;
        margin-left: 10px;
       }
       .sidebar_user
       {
        position: relative;
        top: 80px;
        right: 165px;
        width: 200px;
        font-size: large;
       display: block;
       }
       .sidebar_mang
       {
        position: relative;
        top: 100px;
        right: 200px;
        display:block;
       }
       .sidebar_user_new
       {
        position: relative;
        top: 120px;
        right:325px;
        width: 250px;
        display: block;
       }
       .content
        {
            min-height: 50vh;
            align-items: center;
            justify-content: center;
            padding: 20px;
            padding-bottom: 60px;
            background: #eee;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 1);
            background: #eee;
            text-align: center;
            width: 500px;
            height: 200px;
            position: relative;
            top: 100px;
            right: 300px;
        }
       h1,h3{
        position: relative;
        top:100px;
        color:darkcyan;
       }
       span
       {
        color: green;
       }
       .sidebar__uc{
        position: relative;
        top: 160px;
        width: 200px;
        right:505px;
       }
    </style>
</head>
<body>
 <form action="">
 <div class="container">
 <img src="logo/evervent-logo.svg" alt="">
    <a href="logout.php" class="right_side">Logout</a>
    <a href="login.php" class="right_side">Login</a>
    <a href="display.php" class="sidebar_user">User Management</a>
    <a href="addcategory.php" class="sidebar_user_new">Category Management</a>
    <a href="ui_ucmap.php" class="sidebar__uc">User Category Map</a>
    <div class="content">
           <h1>Welcome : <span><?php echo $_SESSION['userid']; ?></span></h1>
           <h3>You are now dashboard page</h3>
        
    </div>
 </div>
 </form>
</body>
</html>