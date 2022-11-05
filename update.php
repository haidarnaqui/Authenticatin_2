<?php
require "db.php";
$id=$_GET['updateid'];
// $sql="select * from user id=$id";
// $res=mysql_query($sql);
// if($row=mysql_fetch_Array($res))
// {
// $name=$row['name'];
// $email=$row['email'];
// $password=$row['password'];
// }
$sql="select name,email,userid,password from registration where id='$id'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);

$name=$row['name'];
$email=$row['email'];
$userid=$row['userid'];
$password=$row['password'];

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $userid=$_POST['userid'];
    // $password=$_POST['password'];
    $pwd=$_POST['password'];
    $password = md5($pwd);
   
    $sql="update registration set id=$id,name='$name',userid='$userid',email='$email',password='$password' where id=$id";
   $res= mysql_query($sql);
   header('location:display.php');

};


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Users Details</title>
  </head>
  <body>
<div class="container m-5">
<form method="POST">
  <div class="form-group">
    <center><h1>Update Record</h1></center>
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name"  placeholder="Enter Your Name" autocomplete="off" value=<?php echo $name; ?>> 
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Enter Your Email" autocomplete="off" value=<?php echo $email; ?>>
  </div>
  
  <div class="form-group">
    <label for="userid">Userid</label>
    <input type="text" class="form-control" id="userid" name="userid" placeholder="Enter Your Userid" autocomplete="off" value=<?php echo $userid; ?>>
  </div>
  

  <div class="form-group">
    <label for="name">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password" autocomplete="off" value=<?php echo $password; ?>>
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>
</div>

  </body>
</html>