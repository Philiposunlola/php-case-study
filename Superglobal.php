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

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name : <input type="text" name="fname">
        <input type="submit">
    </form>
<br>

    <!-- PHP Superglobal - $GLOBALS -->

    <?php
        $x = 75;
        $y = 25; 
        
        function addition() {
        $GLOBALS['z'] = $GLOBALS['x'] * $GLOBALS['y'];
        }
        
        addition();
        echo $z;
        echo "<br> <br>";
    ?>

    <!-- PHP Superglobal - $_SERVER -->

    <?php
        echo $_SERVER['PHP_SELF'];
        echo "<br>";
        echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo $_SERVER['HTTP_HOST'];
        echo "<br>";
        echo $_SERVER['HTTP_REFERER'];
        echo "<br>";
        echo $_SERVER['HTTP_USER_AGENT'];
        echo "<br>";
        echo $_SERVER['SCRIPT_NAME'];
        echo "<br>";
        echo $_SERVER['SERVER_ADDR'];
        echo "<br> <br>";
    ?>

    <!-- PHP Superglobal - $_REQUEST -->

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = htmlspecialchars($_REQUEST['fname']);
        if (empty($name)) {
            echo "Name is empty"; 
        } else {
            echo $name;
        }
    }
    ?>

</body>    