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
        // A class can have both static and non-static methods. A static method can be accessed from a method in the same class using the self keyword and double colon (::):
            class greetings {
                public static function welcome() {
                    echo "Hello Philip!"; 
                } 

                public function __construct() {
                    self::welcome();
                }
            }

            new greetings();
            echo "<br>"
        ?>

        <!-- Static methods can also be called from methods in other classes. To do this, the static method should be public: -->
        <?php
            class A {
                public static function welcome(){
                    echo "Hello Nicholas!";
                }
            }

                class B {
                    public function message() {
                        A::welcome();
                    }
                }
            

            $obj = new B();
            echo $obj -> message();
            echo "<br>"
        ?>
    </body>
</html>