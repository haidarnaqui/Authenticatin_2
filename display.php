<?php
 require "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
     <script>
      function check()
      {
        alert("Are You Sure to Delete this Record");
      }
     </script>
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

        <!-- <div class="add" style="position:relative;right:200px; top:30;">
         <button class="btn btn-primary my-5 float-right"><a href="user.php" class="text-light" >Add User</a> 
         </button>
      </div> -->

    <table class="table" border="2">
  <thead>
    <tr>
      <th colspan="5"><span>User Details</span><button class="btn btn-primary float-right"><a href="user.php" class="text-light" >Add User</a></th>
    </tr>
    <tr>

      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col"><span style="position: relative;left:130px">Action<span></th>
    </tr>
  </thead>
  <tbody>
    
    <?php
     $sql="select id,name,email,password from registration order by id asc";
     $result=mysql_query($sql);
      
     while($r=mysql_fetch_Array($result))
     {
        $id=$r['id'];
        $name=$r['name'];
        $email=$r['email'];
        $password=$r['password'];
        echo '<tr>
                    <td scope="row">'.$id.'</td>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$password.'</td>
                    <td>
                        <button class="btn btn-danger" onclick="check()"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                        <button  class="btn btn-secondary"><a href="changepwd.php?changepwd='.$id.'" class="text-light">Change Password</a></button>
                        <button class="btn btn-primary"><a href="update.php?updateid='.$id.'"  class="text-light">Update</a></button>
                   </td>
                   
        </tr>';
     }
       
    ?>
  
  </tbody>
</table>
    </div>
</body>
</html>