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
        <!-- PHP and JSON -->

        <?php
            // PHP - json_encode()
            $age = array("peter"=>35, "philip"=>20, "nicholas"=>15);

            echo json_encode($age);
            echo "<br>";

            $cars = array("Tesla", "Toyota", "Benz");

            echo json_encode($cars);
            echo "<br><br>";
        ?>

        <?php
            // PHP - json_decode()
            $jsonobj = '{"John":30, "Tunmise":13, "Grace":40}';

            var_dump (json_decode($jsonobj));
            echo "<br>";

            $jsonobj = '{"John":30, "Tunmise":13, "Grace":40}';

            var_dump (json_decode($jsonobj, true));
            echo "<br><br>";
        ?>

        <?php
            // PHP - Accessing the Decoded Values
            $jsonobj = '{"Zion":30, "Nifemi":13, "Adura":40}';

            $obj = json_decode($jsonobj);
            echo $obj->Zion;
            echo $obj->Nifemi;
            echo $obj->Adura;
            echo "<br>";

            $jsonobj = '{"Tofunmi":23, "Dami":35, "Bolu":21}';

            $arr = json_decode($jsonobj, true);
            echo $arr["Tofunmi"];
            echo $arr["Dami"];
            echo $arr["Bolu"];
            echo "<br><br>";
        ?>

        <?php
            // PHP - Looping Through the Values
            $jsonobj = '{"Zion":30, "Nifemi":13, "Adura":40}';

            $obj = json_decode($jsonobj);
            foreach ($obj as $key => $value) {
                echo $key . " => " . $value . "<br>";
            }
            echo "<br>";

            $jsonobj = '{"Tofunmi":23, "Dami":35, "Bolu":21}';

            $arr = json_decode($jsonobj, true);
            foreach ($arr as $key => $value) {
                echo $key . " => " . $value . "<br>";
            }

        ?>
    </body>
</html>