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
    echo readfile("webdictionary.txt") . "<br><br>";
    ?>

    <!-- PHP File Open/Read/Close -->
    <?php

        // PHP Open File - fopen()
        $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
            echo fread($myfile,filesize("webdictionary.txt"));
            fclose($myfile);
            echo "<br><br>";

        // PHP Read Single Line - fgets()
        $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
            echo fgets($myfile);
            fclose($myfile);
            echo "<br><br>";

        // PHP Check End-Of-File - feof()
        $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");

            while(!feof($myfile)) {
                echo fgets($myfile) . "<br>";
            }
            fclose($myfile);
            echo "<br><br>"
    ?>


    <!-- PHP File Create/Write -->

    <?php
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        $txt = "Osunlola Philip\n";
        fwrite($myfile, $txt);
        $txt = "Osunlola Nicholas\n";
        fwrite($myfile, $txt);
        $txt = "Osunlola John\n";
        fwrite($myfile, $txt);
        $txt = "Tunmise Madu\n";
        fwrite($myfile, $txt);
        $txt = "Akambe Grace\n";
        fwrite($myfile, $txt);
        fclose($myfile);
    ?>


</body>    



