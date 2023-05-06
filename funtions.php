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
        echo addNumbers(5, "5") . "<br>" . "<br>";
    ?>

    <?php
        function sum (int $x, int $y) {
            $z = $x + $y;
            return $z;
        }   
        echo "5 + 10 = " . sum(5, 10) . "<br>";
        echo "5 + 10 = " . sum(4, 8) . "<br>";
        echo "5 + 10 = " . sum(3, 6) . "<br>" . "<br>";
    ?>

    <?php 
        function Numbers(float $c, float $d) {
            return $c + $d;
        }
        echo addNumbers(1.2, 5.2) . "<br>" . "<br>";;
    ?>

    <?php
        function add_five(&$value) {
        $value += 5;
        }

        $num = 2;
        add_five($num);
        echo $num;
    ?>


</body>    