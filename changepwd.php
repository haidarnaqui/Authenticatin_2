<?php
require "db.php";
$id=$_GET['changepwd'];
if(isset($_POST['submit']))
{
    
    // $old_pwd=$_POST['opwd'];
    $pwd=$_POST['opwd'];
    $old_pwd = md5($pwd);
    $npwd=$_POST['npwd'];
    $new_pwd = md5($npwd);
    

    $sql="select * from registration where password='$old_pwd'";
	  $res=mysql_query($sql);
    if($row=mysql_fetch_Array($res))
    {
	$sql="update registration set password='$new_pwd' where id=$id";
	$res=mysql_query($sql);	
     header('location:display.php');
   }
   else
   {
    echo "Incorrect old Password";
   }
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

    <title>Change Pasword</title>
  </head>
  <body>
<div class="container m-5">
<form method="POST">
  <div class="form-group">
    <label for="opwd">Old Password</label>
    <input type="text" class="form-control" id="opwd" name="opwd" placeholder="Enter Your Old Password" autocomplete="off"> 
  </div>

  <div class="form-group">
    <label for="npwd">New Password</label>
    <input type="text" class="form-control" id="npwd" name="npwd" placeholder="Enter Your New Password" autocomplete="off">
  </div>
  

  <button type="submit" name="submit" class="btn btn-primary">Change Password</button>
</form>
</div>

  </body>
</html>