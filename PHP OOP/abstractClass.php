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
        <!-- PHP OOP - Abstract Classes And Methods -->
        <?php
            // parent class
            abstract class Car {
                public $name;
                public function __construct($name) {
                    $this->name = $name;
                } abstract public function intro() : string;
            }

            // Child classes
            class Audi extends Car {
                public function intro(): string {
                    return "Nicholas best car! I'm an $this->name!.";
                }
            }

            class Tesla extends Car {
                public function intro(): string {
                    return "Philip best car! I'm a $this->name!.";
                }
            }

            class Benz extends Car {
                public function intro(): string {
                    return "John best car! I'm a $this->name!.";
                }
            }

            // Create objects from the child class_exists
            $audi = new audi ("Audi");
            echo $audi->intro();
            echo "<br>"; 

            $tesla = new tesla ("Tesla");
            echo $tesla->intro();
            echo "<br>"; 

            $Benz = new benz ("Benz");
            echo $Benz->intro();
            echo "<br><br>"; 
        ?>

        <!-- PHP - More Abstract Class Examples -->
        <?php
            abstract class ParentClass {
                // abstract method with an argumnt 
                abstract protected function prefixName($name);
            }

            class ChildClass extends ParentClass {
                public function prefixName($name) {
                    if ($name == "Osunlola Philip") {
                        $prefix = "Mr. ";
                    }elseif ($name == "Tofunmi Philip") {
                        $prefix = "Mrs. ";
                    }else {
                        $prefix = "";
                    }
                    return "{$prefix} {$name}";
                }
            }

            $class = new ChildClass;
            echo $class->prefixName("Osunlola Philip");
            echo "<br>";
            echo $class->prefixName("Tofunmi Philip");
            echo "<br><br>";
        ?>

            <!-- Abstract method has an argument -->
        <?php
        abstract class BigClass {
        // Abstract method with an argument
        abstract protected function prefixName($name);
        }

        class SmallClass extends BigClass {
        // The child class may define optional arguments that are not in the parent's abstract method
            public function prefixName($name, $separator = ".", $greet = "Dear") {
                if ($name == "Nicholas Osunlola") {
                     $prefix = "Mr. ";
                } elseif ($name == "John Osunlola") {
                     $prefix = "Mrs. ";
                } else {
                      $prefix = "";
                }
                return "{$greet} {$prefix}{$separator} {$name}";
            }
        }

        $class = new ChildClass;
        echo $class->prefixName("Nicholas Osunlola");
        echo "<br>";
        echo $class->prefixName("John Osunlola");
        ?>
    </body>
</html>