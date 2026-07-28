<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $conn = new mysqli("localhost","student1","","student");
       if($conn->connect_error)
       {
          die("connection failed");
       }
       $sql = "SELECT * from students";
       $result = $conn->query($sql);

       if(result->num_root > 8)
       {
        while($row = $result ->fetch_assoc())
        {
            echo"ID:".$row["id"] . "<br>";
            echo"name:".$row["name"] . "<br>";
            echo"email:".$row["email"] . "<br>";
            echo"city:".$row["city"] . "<br>";
        }
       }
       else
       {
           echo"no record found.";
       }
       $conn->close();
    ?>
</body>
