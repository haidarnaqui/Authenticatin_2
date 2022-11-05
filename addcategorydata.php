<?php
require "db.php";
if(isset($_POST['submit']))
{
    // $id=$_POST['id'];
    $pid=$_POST['parent_id'];
    $name=$_POST['name'];
   
  
        $sql="insert into category (parent_id,name) values('$pid','$name')";
        mysql_query($sql);
        header('location:addcategory.php');
    
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
        .container form select
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
        .lb1
        {
            position: relative;
            right: 45%;
        }
        .lb2
        {
            position: relative;
            right: 44%;
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
         <h3>Add Category</h3>
      
        <form>
        <div class="form-group">
            <label for="name" class="lb1">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter the Name">
        </div>
        <div class="form-group">
            <label for="pid" class="lb2">Parent Id</label>
            <select name="parent_id">
                <option value="0" selected>Parent id</option>
                <?php
                $sql="select * from category order by id ASC";
                $res=mysql_query($sql);
                while($row=mysql_fetch_Array($res))
                {
                    echo "<option value='$row[0]'>$row[0].P_Name $row[2]</option>";
                }
                ?>
            </select>
            <input type="submit" name="submit" value="Submit" class="form-btn">
        </div>
    </form>
        </form>
    </div>
</body>
</html>