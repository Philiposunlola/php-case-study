<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP OOP</title>
        <link rel="stylesheet" href="style.css">
        <style>
            .error {color: #FF0000;}
        </style>
    </head>
    <body>
        <!-- PHP - Static Methods -->
        <?php
            class greeting {
                public static function welcome() {
                    echo "Hello World!";
                } 
            }

            // Call atatic method
            greeting::welcome();
            echo "<br>"
        ?>

        <!-- PHP - More on Static Methods -->
        <?php
            class greetings {
                public static function welcome() {
                    echo "Hello Philip!"; 
                } 

                public function __construct() {
                    self::welcome();
                }
            }

            new greetings();
        ?>
    </body>
</html>