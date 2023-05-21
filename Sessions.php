<?php
    // Start the session
    session_start();
?>
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
    <?php
        // set session variables
        $_SESSION["favcolor"] = "blue";
        $_SESSION["favanimal"] = "dog";
        echo "Session variables are set.";
    ?>
</body>