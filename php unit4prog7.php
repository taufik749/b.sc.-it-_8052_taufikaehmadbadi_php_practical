<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $conn = new pdo("mysql:host->localhost;dnamestudentdb","root","");
       $sql = "delete from student3 where id = 3;";
       $conn->query($sql)
       echo"record deleted successfully.";
    ?>
</body>
</html>