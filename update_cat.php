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
$sql="select parent_id,name from category where id='$id'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);


$pid=$row['parent_id'];
$name=$row['name'];

if(isset($_POST['submit']))
{
    $pid=$_POST['parent_id'];
    $name=$_POST['name'];
    
   
    $sql="update category set id=$id,parent_id='$pid',name='$name' where id=$id";
   $res= mysql_query($sql);
   header('location:addcategory.php');

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

    <title>Category Details</title>
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
            <label for="name" class="lb1">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter the Name" value=<?php echo $name; ?>>
        </div>
        <div class="form-group">
            <label for="pid" class="lb2">Parent Id</label>
            <select name="parent_id">
                <option value=<?php echo $pid; ?> selected><?php echo $pid; ?></option>
                <?php
                $sql="select * from category";
                $res=mysql_query($sql);
                while($row=mysql_fetch_Array($res))
                {
                    echo "<option>$row[0]</option>";
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