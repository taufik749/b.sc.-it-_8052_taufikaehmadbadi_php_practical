<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conn = new mysqli("localhost:3307","root","","studentdb");
        $sql = "INSERT INTO student123(name, email, city)
        VALUES ('Parth', 'parth@gmail.com','Rajkot')";
        if(mysqli_query($conn, $sql)){
            echo"Record Inserted Succesfully";
        }
        else{
            echo"Error";
        }
    ?>
</body>
</html>