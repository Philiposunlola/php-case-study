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

    <!-- PHP FILE HANDING -->
    <?php
    echo readfile("webdictionary.txt");
    ?>

    <!-- PHP File Open/Read/Close -->
    <?php
        $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
        echo fread($myfile,filesize("webdictionary.txt"));
        fclose($myfile);
        ?>
</body>    



