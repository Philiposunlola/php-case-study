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
        <!-- PHP Exceptions -->

        <?php
            function divide($dividend, $divisor) {
                if ($divisor == 0) {
                    throw new Exception("Division by Zero");
                }
                return $dividend / $divisor;
            }

            try {
                echo divide(1000, 5);
            } catch (Exception $e) {
                echo "Unable to divide";
            }
        ?>
    </body>
</html>