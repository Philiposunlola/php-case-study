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

        <!-- PHP - Class Constants -->
        <?php
            class Goodbye {
                const LEAVING_MESSAGE = "Thank you for visiting afromart.com.ng!.";
            }

             echo Goodbye::LEAVING_MESSAGE;
             echo "<br>";
        ?>

        <?php
        class Goodday {
            const LEAVING_MESSAGE = "Thank you for visiting https://github.com/Philiposunlola!";
            public function byebye() {
            echo self::LEAVING_MESSAGE;
            }
        }
        
        $goodbye = new Goodday();
        $goodbye->byebye();
        ?>
    </body>
</html>