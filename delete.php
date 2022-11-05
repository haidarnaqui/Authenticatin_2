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
            
            $sql="delete from registration where id=$id";
            $res=mysql_query($sql);
        header('location:display.php');
        }
?>
    </body>
</html>