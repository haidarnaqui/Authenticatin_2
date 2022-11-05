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
$sql="select user_id,cat_id from user_cat_map where id='$id' order by id asc";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);


$u_id=$row['user_id'];
$c_id=$row['cat_id'];

if(isset($_POST['submit']))
{
    $u_id=$_POST['user_id'];
    $c_id=$_POST['cat_id'];
//    select * from user_cat_map where user_id='$u_id' and cat_id='$c_id';
   $test="select * from user_cat_map where user_id='$u_id' and cat_id='$c_id' LIMIT 1";

 $result1=mysql_query($test);
    //  print_r($test);die;
    if(!$row=mysql_fetch_row($result1))
    // if(!$row1)
    {
        $sql="update user_cat_map set id=$id,user_id='$u_id',cat_id='$c_id' where id=$id order by id asc";
        $res= mysql_query($sql);
        header('location:ui_ucmap.php');
    }else{
        echo "data already exists user_id=$u_id and cat_id=$c_id";
    }

    // print_r($user_id=$row1['0']);die;
    // $cat_id=$row['1'];


   
    

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

    <title>User Category Map</title>
    <style>
         .container form input 
        
        {
            width: 100%;
            padding: 10px;
            padding: 10px 15px;
            font-size: 15px;
            margin: 8px 0px;
        }
        .container form select
        {
            width: 100%;
            padding: 10px;
            padding: 10px 15px;
            font-size: 15px;
            margin: 8px 0px;
        }
    </style>
  </head>
  <body>
<div class="container m-5">
<form method="POST">
<div class="container">
  <div class="form-group">
    <center><h1>Update Record</h1></center>
    <div class="container">
        <form action="" method="POST"> 
        
        <form>
        <div class="form-group">
            <label for="user_id" class="lb1">User Id</label>
            <select name="user_id">
                <option value=<?php echo $u_id; ?> selected><?php echo $u_id; ?></option>
                <?php
                $sql="select * from registration";
                $res=mysql_query($sql);
                while($row=mysql_fetch_Array($res))
                {
                    echo "<option value='$row[0]'>$row[0].$row[1]</option>";
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="cat_id" class="lb2">Category Id</label>
            <select name="cat_id">
                <option value=<?php echo $c_id; ?> selected><?php echo $c_id; ?></option>
                <?php
                $sql="select * from category";
                $res=mysql_query($sql);
                while($row=mysql_fetch_Array($res))
                {
                    echo "<option value='$row[0]'>$row[0].$row[2]</option>";
                }
                ?>
            </select>
            <input type="submit" name="submit" value="Submit" class="form-btn">
        </div>
            </div>

        </form>
    </div>
  </body>
</html>