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
        <!-- PHP - Using Iterables -->
        <?php
            function printItersble(iterable $myIterable) {
                foreach ($myIterable as $item) {
                    echo $item;
                }
            }

            $arr = ["a", "b", "c"];
            printItersble($arr);
          
        ?>
    </body>
</html>