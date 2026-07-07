<html lang="en">
    <body>
        <?php   

                $var = "12345";
                echo "<b>Original Value:</b>" . $var . "<br>";
                echo "<b>Original Data Type:</b>" . gettype($var) . "<br><br>";
                settype($var, "integer");
                echo "<b>After Type Casting:</b>" . $var . "<br>";
                echo "<b> New Data Type:</b>" . gettype($var) . "<br><br>";
                settype($var, "double");
                echo "<b>After Converting to Double:</b>" . $var . "<br>";
                echo "<b>Data Type:</b>" . gettype($var) . "<br><br>";
                settype($var, "boolean");
                echo "<b>After Converting to Boolean:</b>";
                var_dump($var);
                echo "<br><b>Data Type:</b>" . gettype($var);
        ?> 
    </body>
</html>