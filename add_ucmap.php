<?php
require "db.php";
if(isset($_POST['submit']))
{
    // $id=$_POST['id'];
    $u_id=$_POST['user_id'];
     $c_id=$_POST['category_id'];
     
foreach ($c_id as $c_idd)
 {
    $sql="select * from user_cat_map where user_id='$u_id' and cat_id='$c_idd' LIMIT 1";
    // echo $sql;die;
    $result=mysql_query($sql);
    if($row=mysql_fetch_Array($result))
    {
        echo "already exist ";
      echo '<a href="add_ucmap.php">Back to Click Here</a>';die;
    }

    else
    {
        $sql="insert into user_cat_map(user_id,cat_id) values($u_id,$c_idd)";
        mysql_query($sql);
     }
    
    //    print_r(mysql_query($sql));die;
       

         header('location:ui_ucmap.php');
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
            right: 42%;
        }
        .lb2
        {
            position: relative;
            right: 40%;
        }
    </style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add user Category Map</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST"> 
         <h3>Add  User Category Map</h3>
      
        <form>
        <div class="form-group">
            <label for="userid" class="lb1">User Id</label>

            <select name="user_id">
                <option value="-" selected>User Id</option>
                <?php
                $sql="select * from registration";
                $res=mysql_query($sql);
                while($row=mysql_fetch_Array($res))
                {
                    echo "<option value='$row[0]'>$row[0]</option>"; 
                }
                ?>
            </select>

        </div>
        <div class="form-group">
            <label for="pid" class="lb2">Category Id</label>
            <select name="category_id[]" multiple>
                <option value="0" selected>Category Id</option>
                <?php
                $sql="select * from category order by id ASC";
                $res=mysql_query($sql);
                while($row=mysql_fetch_Array($res))
                {
                    echo "<option value='$row[0]'>$row[0]</option>";
                }
                ?>
            </select>
           

             <!-- <select name='subject[]' multiple size=6>
        <option value='english'>ENGLISH</option>
        <option value='maths'>MATHS</option>
        <option value='computer'>COMPUTER</option>
        <option value='chemistry'>CHEMISTRY</option>
        <option value='geography'>GEOGRAPHY</option>
        <option value='italian'>ITALIAN</option>
      </select> -->
            <input type="submit" name="submit" value="Submit" class="form-btn">
        </div>
    </form>
        </form>
    </div>
    
  
</body>
</html>