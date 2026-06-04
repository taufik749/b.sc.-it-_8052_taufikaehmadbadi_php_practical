<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $month = 4;
        switch($month):
            case 1:
                echo "Januaray";
                break;
            case 2:
                echo "Feburary";
                break;
            case 3:
                echo "March";
                break;
            case 4:
                echo "April";
                break;
            case 5:
                echo "May";
                break;
            case 6:
                echo "June";
                break;           
            case 7:
                echo "July";
                break;
            case 8:
                echo "August";
                break;
            case 9:
                echo "September";
                break;
            case 10:
                echo "October";
                break;
            case 11:
                echo "November";
                break;
            case 12:
                echo "December";
                break;
            default:
                echo "Invalid Input";
                break;
            endswitch;
    ?>

</body>
</html>