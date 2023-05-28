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

        <?php
            class Fruit {
            public $name;
            public $color;

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

            $apple = new Fruit("Apple", "red");
            echo $apple->get_name();
            echo "<br>";
            echo $apple->get_color();
        ?>
    </body>
</html>