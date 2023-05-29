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
    <body?>
        <?php
            class Fruit {
                public $name;
                public $color;
                public function __construct($name, $color) {
                  $this->name = $name;
                  $this->color = $color;
                }
                public function intro() {
                  echo "The fruit is {$this->name} and the color is {$this->color}.";
                }
              }

              // strawberry is inherited from fruit
              class Strawberry extends Fruit {
                public function message() {
                    echo "Am i a friut or a berry";
                }
              }
              $strawberry = new Strawberry("strawberry", "red");
              echo $strawberry->get_name();
              echo "<br>";
              echo $strawberry->get_color();
        ?>
    </body>
</html>