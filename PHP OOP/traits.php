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
        <!-- PHP - Using Multiple Traits -->
        <?php

            trait message1 {
                public function msg1(){
                    echo "OOP is fun! ";
                }
            }

            trait message2 {
                public function msg2() {
                    echo "OOP reduces the code duplication! ";
                }
            }

            class welcome {
                use message1;
            }

            class welcome2 {
                use message1, message2;
            }

            $obj = new welcome();
            $obj->msg1();
            echo "<br>";

            $obj2 = new welcome2();
            $obj2->msg1();
            $obj2->msg2();
        ?>
    </body>
</html>