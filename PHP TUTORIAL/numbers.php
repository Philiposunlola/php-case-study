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

    <!-- number statements -->
    <?php
        // Check if the type of a variable is integer   
        $x = 5985;
        var_dump(is_int($x));

        echo "<br>";

        // Check again... 
        $x = 59.85;
        var_dump(is_int($x));

        echo "<br>";
        echo "<br>";
    ?> 


    <?php
        // Check if the type of a variable is float
        $y = 53.44;
        var_dump(is_float($y));

        echo "<br>";

        // check again...
        $y = 4355;
        var_dump(is_float($y));

        echo "<br>";

        // Check if the variable is numeric   
        $x = 5985;
        var_dump(is_numeric($x));

        echo "<br>";

        $x = "5985";
        var_dump(is_numeric($x));

        echo "<br>";

        $x = "59.85" + 100;
        var_dump(is_numeric($x));

        echo "<br>";

        $x = "Hello";
        var_dump(is_numeric($x));

        echo "<br>";
        echo "<br>";

        // Cast float to int 
        $x = 23465.768;
        $int_cast = (int)$x;
        echo $int_cast;
        
        echo "<br>";

        // Cast string to int
        $x = "23465.768";
        $int_cast = (int)$x;
        echo $int_cast;

        echo "<br>";
        echo "<br>";
    ?> 

</body>