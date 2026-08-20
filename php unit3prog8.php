<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Document</title>
    </head>
<body>
    <?php
        if(isset($_COOKIE["username"]))
        {
            echo"<h2>welcome back !</h2>";
            echo"you are a repeated user.";
        }
        else
        {
            setcookie("username","google",time() + (24*24*60*60),"/");
            echo"<h2>welcome !</h2>";
            echo"you are a new user.";
        }
    ?>
</body>