<html>
    <head>
        <title></title>
        
    </head>
    <body>
    <?php
        require "db.php";
        if(isset($_GET['deleteid']))
        {
            $id=$_GET['deleteid'];
            
            $sql="delete from user_cat_map where id=$id";
            mysql_query($sql);
        header('location:ui_ucmap.php');
        }
?>
    </body>
</html>