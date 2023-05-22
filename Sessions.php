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
            $_SESSION["favcountry"] = "Germany";
            echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
            echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br>";
            echo "Favorite country is " . $_SESSION["favcountry"] . ".<br>";
        ?>

        <?php
            // to show all the session
            print_r($_SESSION);
            echo "<br>";
        ?>

        <?php
            //to change a session variable, just overwrite it
            $_SESSION["favanimal"] = "cat";
            print_r($_SESSION);
            echo "<br>";
        ?>

        <?php
            // remove all session variables
            session_unset();

            // destroy the session
            session_destroy();

            echo "All session variables are now removed, and the session is destroyed."
        ?>

    </body>
</html>