<?php
 require "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User_Cat Map</title>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
   
</head>
<body>
    <div class="container">
    <div class="logout">
        
         <div class="logo" style="position:relative; top:50px;">
            <img src="logo/evervent-logo.svg" alt="">
         </div>
        <div>
        <button class="btn btn-warning my-5 float-right"><a href="logout.php" class="right_side">Logout</a></button>
        </div>
      </div>

       

    <table class="table" border="2">
  <thead>
  <tr>
      <th colspan="5"><span>User Category Map</span><button class="btn btn-primary float-right"><a href="add_ucmap.php" class="text-light" >Add User</a></th>
    </tr>
    <tr>
      
        <th scope="col">Id</th>
        <th scope="col">User Name</th>
        <th scope="col">Category Name</th>
        
        <th scope="col"><span style="position: relative;left:130px">Action<span></th>
    </tr>
  </thead>
  <tbody>
    
    <?php
   
    // $sql="select id,parent_id, cat.name from category left join category as cat where category.parent_id=cat.id";
    //$sql="select category.*, cat.name as parentName from category left join category as cat on category.parent_id=cat.id order by id asc";

     $sql="select ucm.id,reg.name,cat.name from user_cat_map ucm left join registration reg on ucm.user_id=reg.id left join category cat on ucm.cat_id=cat.id order by id asc";

     $result=mysql_query($sql);
      
     while($r=mysql_fetch_Array($result))
     {
         $id=$r['id'];
        // // $pid=$r['parent_id'];
        // $userName=$r['reg'];
        // $categoryName=$r['categoryName'];
   
        echo "<tr>
                    <td>$r[0]</td>
                    <td>$r[1]</td>
                    <td>$r[2]</td>";
                    
                  echo ' <td>
                        <button class="btn btn-danger"><a href="delete_map.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                        <button class="btn btn-primary"><a href="update_map.php?updateid='.$id.'"  class="text-light">Update</a></button>
                   </td>
                   
        </tr>';
     }
       
    ?>
  
  </tbody>
</table>
    </div>
</body>
</html>