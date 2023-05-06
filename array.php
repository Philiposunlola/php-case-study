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


</body>