<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
 
 <!-- if...else statements-->

    <?php
        $name = "philip";
        $lastName = "osunlola";

        if ($name === $lastName ) {
            echo "They are the same";
        } 
        elseif ($name === "philip") {
            echo " they are not still the same sef";
        }
        else {
            echo "They are not the same";
        }
        echo "<br>";
    ?>  

    <?php
        $age = 20;

        switch ($age) {
            case 15:
                echo "variable is equal to 15";
                break;
            case 20;
                echo "variable is equal to 20";
                break;
            default;
            echo "none were true";
            break;         
        }
        echo "<br>";
        echo "<br>";
    ?>
</body>