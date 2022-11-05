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
            $sql="delete from category where parent_id=$id";
            mysql_query($sql);
            $sql="delete from category where id=$id";
            mysql_query($sql);
        header('location:addcategory.php');
        }
?>
    </body>
</html>