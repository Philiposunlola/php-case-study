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
    <!-- PHP Superglobal - $GLOBALS -->

    <?php
        $x = 75;
        $y = 25; 
        
        function addition() {
        $GLOBALS['z'] = $GLOBALS['x'] * $GLOBALS['y'];
        }
        
        addition();
        echo $z;
    

    ?>

</body>    