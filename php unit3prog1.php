<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>     
    <?php
        //create
        if(isset($_POST['create']))
        {
            $username = $_post['username'];
            setcookie("username",$username,time()+(24*60*60),"/");
            echo"<h3>cookie created successfully.</h3>";
        }
        else
        {
            echo"<h3>cookie not found.</h3>";
        }

        //read
        if(isset($_POST['read']))
        {
            if(isset($_cookie['username']))
            {
                echo"<h3>cookie value : ".$_cookie['username']."</h3>";
            }
        }

        //delete
        if(isset($_POST['delete']))
        {
            setcookie("username","",time()-3600,"/");
            echo"<h3>cookie deleted successfully.<h3>";
        }

        //header
        if(isset($_POST['header']))
        {
            $username = $_post['username'];
            setcookie("username,"$username,time()+(24*60*60),"/");
            header("location: itu3p14_3home.php");
            exit();
        }

        echo "<br> <a href = 'cookie.html'> Go Back </a>";
        ?>
       
    </body>
</html>

       
