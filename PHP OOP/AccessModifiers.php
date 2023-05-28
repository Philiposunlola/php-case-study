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

                function set_name($name) {
                    $this->name = $name;
                }
                function set_color($color) {
                    $this->color = $color;
                }
                function set_weight($weight) {
                    $this->weight = $weight;
                }
            }

            $mango = new Fruit ();
            $mango->set_name('Mango');
            $mango->set_color('Yellow');
            $mango->set_weight('200');
        ?>
    </body>
</html>