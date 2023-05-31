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
        <!-- PHP - Using Interfaces -->
        <?php
            interface Animal {
                public function makeSound();
            }

            class Cat implements Animal {
                public function makeSound() {
                    echo "Meow";
                }
            }

            $animal = new Cat();
            $animal->makeSound();
            echo "<br>";
        ?>

        <?php
            // Interface definition
            interface School {
                public function schoolType();
            }
            
            // Class definitions
            class HGPS implements School {
                public function schoolType() {
                echo " Primary School . <br> ";
                }
            }
            
            class FSTC implements School{
                public function schoolType() {
                echo " Boys and Girls School . <br>";
                }
            }
            
            class FGGC implements School {
                public function schoolType() {
                echo " Girls School ";
                }
            }
            
            // Create a list of animals
            $hgps = new HGPS();
            $fstc = new FSTC();
            $fggc = new FGGC();
            $schools = array($hgps, $fstc, $fggc);
            
            // Tell the animals to make a sound
            foreach($schools as $schools) {
                $schools->schoolType();
            }
        ?>
    </body>
</html>