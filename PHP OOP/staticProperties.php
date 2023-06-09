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
        <!-- PHP OOP - Static Properties -->
        <?php
            class pi {
                public static $value = 3.14159;
            }

            // Get static property
            echo pi::$value;
            echo "<br>";
        ?>

        <?php
            // A class can have both static and non-static properties. A static property can be accessed from a method in the same class using the self keyword and double colon (::):
            class percent {
                public static $value = 100;
                public function staticValue() {
                    return self::$value;
                }
            }

            $percent = new percent();
            echo $percent->staticValue(); 
            echo "<br>";
        ?>

        <?php
            // To call a static property from a child class, use the parent keyword inside the child class:
            class digits{
                public static $value = 200;
            }

            class x extends digits {
                public function xStatic() {
                    return parent::$value;
                }
            }

            // Get value of an static property directly via child class
            echo x::$value . "<br>";

            // or get value of static property 
            $x = new x();
            echo $x->xStatic();

        ?>

    </body>
</html>