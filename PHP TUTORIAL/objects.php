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
  
    <!-- objects statements  -->
    <?php
    class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
    public function message() {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
    }

    $myCar = new Car("black", "Volvo");
    echo $myCar -> message();
    echo "<br>";
    $myCar = new Car("red", "Toyota");
    echo $myCar -> message();
    echo "<br>";
    echo "<br>"
    ?>
</body>    