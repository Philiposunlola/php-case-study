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

        <!-- PHP OOP - Inheritance -->
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
                    echo "Am i a friut or a berry? ";
                }
            }
              $strawberry = new Strawberry("strawberry", "red");
              echo $strawberry->message();
              echo $strawberry->intro();
              echo "<br>";
        ?>

            <!-- PHP - Inheritance and the Protected Access Modifier -->
        <?php
            class Bags{
                public $name;
                public $color;
                public function __construct($name, $color) {
                    $this->name = $name;
                    $this->color = $color;
                }
                protected function intro() {
                    echo "The Bag is {$this->name} and the color is {$this->color}.";
                }
            }

            class Nike extends Bags {
                public function message() {
                    echo "Am i Bag or a Nike? ";
                    $this -> intro();
                } 
            }

            // Try to call three methods from outside class
            $Bags = new Nike("Nike", "White");  // OK. __construct() is public
            $Bags->message(); // OK. message() is public
            echo "<br>";
        ?>

        <!-- PHP - Overriding Inherited Methods -->
        <?php
            class shoe {
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
                
                class addidas extends shoe {
                  public $weight;
                  public function __construct($name, $color, $weight) {
                    $this->name = $name;
                    $this->color = $color;
                    $this->weight = $weight;
                  }
                  public function intro() {
                    echo "The shoe is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
                  }
                }
                
                $addidas = new addidas("addidas", "black", 50);
                $addidas->intro();
            
        ?>
    </body>
</html>