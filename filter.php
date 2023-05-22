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
                }
            ?>
        </table>

        <?php
            // PHP filter_var() Function
            $str = "<h1>Hello Philip Osunlola</h1>";
            $newstr = filter_var($str, FILTER_SANITIZE_STRING);
            echo $newstr;
            echo "<br>";
        ?>

    </body>
</html>    