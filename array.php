<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body >
    <!-- ARRAY STATEMENTS -->
  
    <?php
        $cars = array("Benz",
         "Toyata",
          "Tesla",
           "Ford");
        echo "I like ". $cars[2] . " more, but i can buy " . $cars[0] . ", and " .$cars[3] . " if i want to buy it. <br> <br>";
    ?>

    <!-- Get The Length of an Array  -->
      
    <?php
        $sub = array(
            "chemistry",
             "biology", 
             "maths", 
             "english" 
        );
        echo count($sub);
        echo "<br> <br>";
    ?>

    <!-- PHP Indexed Arrays -->
    <?php
        //    loop through an index array

        $names = array("philip", "john", "nicholas", "ope");
        $arrlength = count($names);

        for ($i=0; $i < $arrlength; $i++) { 
            echo $names[$i];
            echo "<br> ";
        }
    ?>

    <!-- PHP Associative Arrays -->
    <?php
    $age = array(
        "Peter"=>"35",
        "Ben"=>"37",
        "Joe"=>"43");

        echo "Peter is " . $age['Peter'] . " years old.";
        echo "<br> <br>";
    ?>

    <?php
        //    loop through an associative array
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

        foreach ($age as $x => $x_value) {
            echo "key=" . $x . ", value=" . $x_value;
            echo "<br> <br>";
        }
    ?>
    
    <!-- PHP Multidimensional Arrays -->
    <?php
    $cars = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
      );
        
      echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
      echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
      echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
      echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

    ?>

    <?php
        //    loop through an Multidimensional array
        $cars = array (
            array("Volvo",22,18),
            array("BMW",15,13),
            array("Saab",5,2),
            array("Land Rover",17,15)
        );

        for ($row=0; $row < 4; $row++) { 
         echo "<P><b>Row number $row</b></p>";
         echo "<ui>";
         for ($col =0; $col < 3; $col++) { 
           echo "<li>".$cars[$row][$col]."</li>";
         }
         echo "</ul>";
         echo "<br> <br>";
        }
    ?>

    <!-- PHP Sorting Arrays -->
    <?php

        // Sort Array in Descending Order - sort()

        $cars = array("Volvo", "BMW", "Toyota");
        rsort($cars);
        $clength = count($cars);
        for ($x=0; $x < $clength; $x++) { 
            echo $cars[$x];
            echo"<br> ";
        }

        // Sort Array in Ascending Order - sort()

        $numbers = array(9, 4, 6, 3, 7, 1);
        sort($numbers);
        $arrlength = count($numbers);
        for ($y=0; $y < $arrlength ; $y++) { 
           echo $numbers[$y];
           echo"<br> ";
        }

        // Sort Array (Ascending Order), According to Value - asort()

        $names = array("philip"=>"20", "nicholas"=>"17", "john"=>"14");
        asort($names);
        foreach($names as $i => $i_value) { 
            echo "key=" . $i . ", value=" . $i_value;
            echo "<br>";
        }

        // Sort Array (Descending Order), According to Value - asort()

        $ages = array("tofunmi"=>"15", "boluwatife"=>"12", "remi"=>"10");
        ksort($ages);
        foreach($ages as $a => $a_value) { 
            echo "key=" . $a . ", value=" . $a_value;
            echo "<br>";
        }


        ?>


</body>