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
        <!-- PHP  CLASS && OBJECT -->
        <?php
            class Fruit {
                // Properties
                public $name;
                public $color;

                // Methods
                function __construct($name, $color) {
                 $this->name = $name;
                 $this->color = $color;
                }
                function get_name() {
                    return $this->name;
                }
                function get_color() {
                    return $this->color;
                }
            }

            $apple = new Fruit("Apple", "Black");

            echo "Name: " . $apple->get_name();
            echo "<br>";
            echo "Color: " . $apple->get_color();
            echo "<br>";
        ?>

            <!-- PHP - instanceof -->
        <?php
            class Investors {
            // Properties
                public $name;
                public $color;

                // Methods
                function set_name($name) {
                    $this->name = $name;
                }
                function get_name() {
                    return $this->name;
                }
            }

            $apple = new Investors();
            var_dump($apple instanceof investors);
            echo "<br>";
        ?>

        <!-- PHP OOP - Destructor -->
        <?php
            class Car{
            // Properties
                var $name;
                var $color;

                // Methods
                function __construct($name, $color) {
                    $this->name = $name;
                    $this->color = $color; 
                }
                function __destruct() {
                    echo "The fruit is {$this->name} and the color is {$this->color}."; 
                }
            }

            $apple = new Car("Benz", "red");
        ?>

        
    </body>
</html>