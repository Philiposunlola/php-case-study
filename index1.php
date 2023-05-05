<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body >
 <?php
        $myName = "philip osunlola";
        $myAge = "20";
        echo $myName; echo "<br>";
        echo $myAge;   echo "<br>";

        function myTest() {
        $x = 5;
        $y = 4;
        $z = $x + $y;
        echo "<p>The addition of variables is :$z </p>";
        };
        myTest();
 ?>
    
 <?php

        $name = "philip";
        $surname = "osunlola";
        Function myWord() {
            
        };
        myWord();
        echo "<br>";
        echo $name; echo "<br>";
        echo $surname;
        echo "<br>";
                
?>

          <!-- Global Scope -->
 <?php
        $num1 = 4;
        $num2 = 8;

        function myFunction() {
            global $num1, $num2;
            $num1 = $num1 + $num2;
        };

        myFunction();
        echo $num1;

 ?>

  <!-- LOOCAL SCOPE -->
<?php
    function myFunction1() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
    }
    myFunction1();
?>


  <!-- The static Keyword -->
<?php
function myTest1() {
  static $x = 0;
  echo $x;
  $x++;
}

    myTest1();
    echo "<br>";
    myTest1();
    echo "<br>";
    myTest1();
?>

    <!--THE ECHO STATEMENT  -->
    
<?php
    echo "<h1>PHP CAN BE FUN </h1> <br>";
    echo "HELLO WORLD <br>";
    echo " I'M GOING TO MAKE3 MONEY IS THIS LIFE <br>";
    echo "I WILL NEVER BE POOR <br>";

    $txt1 = "i want to learn php";
    $txt2 = "i want to make money that's why sha";
    $x= 5;
    $y= 6;

    echo "<h3>  $txt1 </h3> ";
    echo "why i want to learn php is because " . $txt2 . "<br>";
    echo $x * $y ;

?>
   
     <!-- PRINT STATEMENT -->

<?php
    print "<h1>PHP CAN BE FUN </h1> <br>";
    print "HELLO WORLD <br>";
    print" I'M GOING TO MAKE3 MONEY IS THIS LIFE <br>";
    print "I WILL NEVER BE POOR <br>";

    $txt1 = "i want to learn php";
    $txt2 = "i want to make money that's why sha";
    $x= 5;
    $y= 6;

    print "<h3>  $txt1 </h3> ";
    print "why i want to learn php is because " . $txt2 . "<br>";
    print $x * $y ; 
    echo "<br>";

?>

    <!--INTEGER DATA TYPE -->
<?php
    $x = 90775;
    var_dump($x);
    echo "<br>"
?>

<?php  
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
echo "<br>";
echo "<br>"
?> 

   <!-- string statements -->
<?php
echo str_replace("world", "Dolly", "Hello world!");
echo "<br>"
?> 

<?php
echo strpos("Hello world!", "world"); // outputs 6
echo "<br>"
?>

<!-- PHP CONSTANT -->
<?php
define("Welcome", "I will love to meet you");
echo Welcome;

echo "<br>";
echo "<br>";

   // CONSTANT ARRAY
define("Cars", [
    "Toyota",
    "Telsa",
    "Ford"
]);
echo Cars[2];

echo "<br>";
echo "<br>";

define("GREETINGS", "This is my php case study");

function myArray () {
    echo GREETINGS;
}
myArray();

echo "<br>";
echo "<br>"
?>

</body >
</html>



