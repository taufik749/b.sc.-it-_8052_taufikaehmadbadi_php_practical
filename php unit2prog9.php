<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conn = new mysqli("localhost:3307", "root", "", "TEST");
                if($conn->connect_error){
                    die("Connection Failed : " . $conn->connect_error);
                }

        $queries = [
                "SELECT
                    HOUR(NOW()) AS Hour,
                    MINUTE(NOW()) AS Minute,
                    SECOND(NOW()) AS Second,
                    DATE_FORMAT(NOW(), '%d-%m-%Y %H:%i:%s') AS Formatted_Date,
                    DATE_SUB(NOW(), INTERVAL 7 DAY) AS Date_Sub,
                    DATE_ADD(NOW(), INTERVAL 7 DAY) AS Date_Add"
        ];

        foreach($queries as $sql){
            echo "<br>";
            $result = $conn->query($sql);

            if($result){
                while($row = $result->fetch_assoc()){
                    foreach($row as $key => $value){
                        echo "<b> $key : </b> $value <br>";
                    }
                }
            }
            else{
                echo "Query Error : " . $conn->error;
            }
        }
        
    ?>
</body>
</html>