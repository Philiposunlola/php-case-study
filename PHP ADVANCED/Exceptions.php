<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP CASE STUDY</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!-- PHP Exceptions -->

        <?php
            function Add($Added, $Additor) {
                if ($Additor == 0) {
                    throw new Exception("Addition by Five");
                }
                return $Added / $Additor;
            }

            // try...catch...finally statememnt
            try {
                echo Add(1000, 5);
            } catch (Exception $e) {
                echo "Unable to divide";
            } finally {
                echo " process complete.";
            }
                echo "<br><br>";
        // ?>

        <!-- The Exception Object -->

        <?php
            function divide($dividend, $divisor) {
                if($divisor == 0) {
                throw new Exception("Division by zero", 1);
                }
                return $dividend / $divisor;
            }
            
            try {
                echo divide(5, 0);
            } catch(Exception $ex) {
                $code = $ex->getCode();
                $message = $ex->getMessage();
                $file = $ex->getFile();
                $line = $ex->getLine();
                echo "Exception thrown in $file on line $line: [Code $code]
                $message";
            }
        ?>
    </body>
</html>

