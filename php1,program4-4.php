<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $Course = "Bsc IT";
    $Year = 3;

        if($Course == "BCA"){
            if($Year == 3){
                echo "Class of Bsc IT Year 3";
            }
            else{
                echo "Invalid Input";
            }
        }
        else{
            if($Course != "BCA"){
                echo "This is class of BCA";
            }
            else{
                echo "Not an class of BCA";
            }
        }
    ?>

</body>
</html>