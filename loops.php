<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>d

    <!-- PHP LOOPS STATEMENTS -->

    <?php

        //  while loop
        $x = 0;

            while ($x <= 50) {
                echo "this number is : $x <br>";
                $x+=10;
            }

            echo "<br>"
    ?>        
    
    <?php
        //   do...while loop
        $y = 5;

            do {
                echo "philip is  $y  <br>";
                $y++;
            } while ($y <= 10);

            echo "<br>"
    ?>

    <?php 
        //  for loop

            for ($z= 5; $z <= 10 ; $z++) { 
                echo "The number is $z <br>";
            }

            echo "<br>"

    ?>

    <?php 
        //  foreach loop

        $names = array("philip", "nicholas", "john", "tofunmi");

            foreach ($names as $value) {
                echo "$value <br>";
            }
            echo "<br>";

        $cars = array("toyota"=>"2000", "tesla"=>"3000", "benz"=>"4000", "ford"=>"1000");

            foreach ($cars as $key => $value) {
                echo "$key = $value <br>";
            }

            echo "<br>"

    ?>

    <?php 
        //  break/continue

            for ($i = 0; $i < 10; $i++) { 
            if ($i == 5) {
                break;
            }
            echo "The number is : $i <br>";
            }

            echo "<br>";
    ?>
</body>    