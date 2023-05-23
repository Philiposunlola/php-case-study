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

        <table>
            <tr>
                <td>Filter Name</td>
                <td>Filter ID</td>
            </tr>
        
            <?php
                // The PHP Filter Extension
                foreach (filter_list() as $id => $filter) {
                    echo '<tr><td>' . $filter . '<td><td>' . filter_id($filter) .'</td></tr>';
                    echo "<br><br>";
                }
            ?>
        </table>

        <?php
            // PHP filter_var() Function
            $str = "<h1>Hello Philip Osunlola</h1>";
            $newstr = filter_var($str, FILTER_SANITIZE_STRING);
            echo $newstr;
            echo "<br><br>";
        ?>

        <?php
            // Validate an Integer
            $int = 0;

            if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT ) === false ) {
                echo ("interger is valid");
            } else {
                echo ("interger is not valid");
            }
            echo "<br><br>";
        ?>

        <?php
            // Validate an IP Address
            $ip = "127.0.0.1";

            if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
                echo ("$ip is a valid ip address");
            } else {
                echo ("$ip is not a valid address");
            }
            echo "<br><br>";
        ?>

        <?php
            // Sanitize and Validate an Email Address
            $email = "philiposun@gmail.com";

            // remove all illegal character from email
            $email = filter_var($email, FILTER_VALIDATE_EMAIL);

            // Validate email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                echo ("$email is a valid email");
            }else {
                echo ("$email is not a avalid email");
            }
            echo "<br><br>";
        ?>

        <?php
            // Sanitize and Validate a URL
            $URL = "https://github.com/Philiposunlola";
            
            // remove all illegal character from URL
            $URL = filter_var($URL, FILTER_SANITIZE_URL);

            // Validate URL
            if (!filter_var($URL, FILTER_SANITIZE_URL) === false) {
                echo ("$URL is a valid URL");
            } else {
                echo ("$URL is not a valid URL");
            }
            echo "<br><br>";
        ?>

    </body>
</html>    