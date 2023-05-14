<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>
    <!-- The PHP Date() Function -->
    <?php
        echo "Today is " . date("y/m/d") ."<br>";
        echo "Today is " . date("y-m-d") ."<br>";
        echo "Today is " . date("y.m.d") ."<br>";
        echo "Today is " . date("l");
        echo "<br> <br>";
    ?>

        <!-- PHP Tip - Automatic Copyright Year -->
        &copy; 2010-<?php echo date("Y");?><br><br>

    <?php
        // Get a time
        echo "The time is " . date("h:i:sa") . "<br><br>";
        
        // Get Your Time Zone
        date_default_timezone_set("America/New_York");
        echo "The time is " . date("h:i:sa") . "<br><br>";

        // Create a Date With mktime()
        $d = mktime(11, 3, 39, 4, 9, 2023);
        echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br><br>";

        // Create a Date From a String With strtotime()
        $d = strtotime("10:30pm April 15 2014");
        echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br><br>";

        $d=strtotime("tomorrow");
        echo date("Y-m-d h:i:sa", $d) . "<br>";

        $d=strtotime("next Saturday");
        echo date("Y-m-d h:i:sa", $d) . "<br>";

        $d=strtotime("+3 Months");
        echo date("Y-m-d h:i:sa", $d) . "<br>";
    ?>

</body>