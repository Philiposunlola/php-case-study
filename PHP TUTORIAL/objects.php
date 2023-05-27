<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
  
    <!-- objects statements -->
    <?php
        class Car {
            public $color;
            public $model;
            function __construct($color, $model) {
                $this->color = $color;
                $this->model = $model;
            }
            function __destruct() {
                echo $this-> color;
                echo "<br>";
                echo $this -> model;
                echo "<br>";
                echo "<br>";
            }
        }

        $myCar = new Car("black", "Volvo");
        $myCar = new Car("red", "Toyota");
    ?>
</body>    