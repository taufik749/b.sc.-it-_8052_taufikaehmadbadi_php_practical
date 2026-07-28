<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   $conn = new mysqli("localhost","root","studentdb");
   if($conn->connect_error)
   {
        die("connection Failed");
   }        
   $sql ="SELECT * FROM studentdb";
   $result = $conn->query($sql);
   
   if($result->num_rows>0)
   {
        while($row = $result->fetch_assoc())
        {
                echo "ID : " . $row["id"] ."<br>";
                echo "name  : " . $row["name"] . "<br>";
                echo "email : " . $row["email"] . "<br>";
                echo  "city : " . $row["city"] . "<br><br>";
        }        
    
   }    
   else
   {
    echo"NO RECORD FOUND.";
   } 
   $conn->close();
?>   

</body>
</html>