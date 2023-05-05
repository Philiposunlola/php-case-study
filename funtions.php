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
 
    <!-- PHP FUNCTION STATEMENTS -->

    <?php
        function familyName($fname, $year) {
        echo "$fname osunlola was born on the $year.<br>";
        }

        familyName("philip", "2002");
        familyName("nicholas", "2003");
        familyName("job", "2004");
        familyName("john", "2005");
        familyName("kenedy", "2006");

        echo "<br>";

    ?>

    <?php 

        function addNumbers (int $a, int $b) {
            return $a + $b; 
        }
        echo addNumbers(5, "5");
    ?>
</body>    