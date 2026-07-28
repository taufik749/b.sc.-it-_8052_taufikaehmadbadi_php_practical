<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conn = new PDO("mysql:host=localhost:3307;dbname=studentdb","root","");

        $sql = "INSERT INTO student123(name, email, city)
        VALUES ('Rahul', 'rahul@gmail.com', 'Rajkot')";

        $conn->exec($sql);
        echo"Record Inserted Successfuly";
    ?>
</body>
</html>