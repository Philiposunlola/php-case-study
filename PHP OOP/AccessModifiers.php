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
        <!-- PHP OOP - Access Modifiers -->
        <?php
            class Fruit {
                public $name;
                public $color;
                public $weight;

                function __construct($name, $color, $weight) {
                    $this->name = $name;
                    $this->color = $color;
                    $this->weight = $weight;
                }

                function get_name() {
                    return $this->name;
                }
                function get_color() {
                    return $this->color;
                }
                function get_weight() {
                    return $this->weight;
                }

            }

            $banana = new Fruit ("Banana", "Green", "200");
            echo $banana->get_name();
            echo "<br>";
            echo $banana->get_color();
            echo "<br>";
            echo $banana->get_weight();
            echo "<br>";
        ?>
    </body>
</html>