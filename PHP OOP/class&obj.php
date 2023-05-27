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
                function set_name($name){
                 $this->name = $name;
                }
                function get_name() {
                    return $this->name;
                } function set_color($color){
                    $this->color = $color;
                }
                function get_color() {
                    return $this->color;
                }
            }

            $apple = new Fruit();
            $apple->set_name('Apple');
            $apple->set_color('Black');

            echo "Name: " . $apple->get_name();
            echo "<br>";
            echo "Color: " . $apple->get_color();
            echo "<br>";
        ?>

        
    </body>
</html>