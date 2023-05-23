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
        <!-- PHP Filters Advanced -->
        
        <?php
            // Validate an Integer Within a Range
            $int = 122;
            $min = 1;
            $max = 200;

            if (filter_var($int, FILTER_VALIDATE_INT, array("option" => array("min_range"=>$min, "max_range"=>$max))) === false) {
                echo ("variable value is not within the legal range");
            } else {
                echo ("Variable value is within the legal range");
            }
            echo "<br><br>";
        ?>

        <?php
            // Validate IPv6 Address
            $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

            if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
                echo ("$ip is a valid IPv6 address");
            } else {
                echo ("$ip is not a valid IPv6 address");
            }
            echo "<br><br>";
        ?>

        <?php
            // Validate URL - Must Contain QueryString
            $url = "https://github.com/Philiposunlola";

            if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
                echo ("$url is a valid URL with a query string");
            } else {
                echo ("$url is a not valid URL with a query string");
            }
            echo "<br><br>";
        ?>

        <?php
            // Remove Characters With ASCII Value > 127
            $str = "<h1>Hello Philip Osunlola</h1>";

            $newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
            echo $newstr;
            echo"<br><br>";
        ?>
    </body>
</html>