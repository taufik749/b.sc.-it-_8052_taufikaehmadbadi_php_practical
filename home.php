<?php
    echo"<h2>home page</h2>";
    if(isset($_COOKIE['username']))
    {
        echo "welcome : ".$_cookie['username'];
    }
    else
    {
        echo"cookie not found";
    }
    echo"<br><br>";
    echo "<br> <a href = 'cookie.html'> Go Back </a>";
?>