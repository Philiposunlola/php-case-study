<?php
    $cookie_name = "user";
    $cookie_value = "Osunlola Philip";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
?>
<?php
    // set the expiration date to one hour ago
    setcookie("user", "", time() - 3600);
?>
<?php
    setcookie("test_cookie", "test", time() + 3600, '/');
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
            // PHP Create/Retrieve a Cookie
            if (!isset($_COOKIE[$cookie_name])) {
                echo "Cookie named '" . $cookie_name . "' is not set!";
            } else {
                echo "Cookie '" . $cookie_name . "' is set!<br>";
                echo "Value is: " . $_COOKIE[$cookie_name];
                echo "<br>";
            }
        ?>

        <?php
            // Delete a Cookie
            echo "Cookie 'user' is deleted.";
            echo "<br>";
        ?>

        <?php
            // Check if Cookies are Enabled
            if(count($_COOKIE) > 0) {
            echo "Cookies are enabled.";
            } else {
            echo "Cookies are disabled.";
            }
        ?>

    </body>
</html>