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
        <!-- PHP Callback Functions -->
        <?php
            // Callback Functions using array_map()
            function myCallback($item){
                return strlen($item);
            }

            $strings = ["apple, orange, banana, watermelon"];
            $lengths = array_map("myCallback", $strings);
            print_r($lengths);
            echo "<br>";
        ?>

        <?php
            // Callback Functions with anonymous function
            $strings = ["apple, orange, banana, watermelon"];
            $lengths = array_map(function($item){ 
                return strlen($item);
            }, $strings);
            print_r($lengths);
            echo "<br>";
        ?>

        <?php
            // Callbacks in User Defined Functions
            function exclaim($str) {
                return $str . "! ";
            }

            function ask($str) {
                return $str . "! ";
            }

            function printFormatted($str, $format) {
                // calling the $format callback function
                echo $format($str);
            }

            //  Pass "exclaim" and "ask" as callback functions to printFormatted()
            printFormatted("Hello world", "exclaim");
            echo "<br>";
            printFormatted("Hello world", "ask"); 
        ?>
    </body>
</html>        