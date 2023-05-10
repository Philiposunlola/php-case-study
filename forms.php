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

    <form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"><br><br>
        Name: <input type="text" name="name"><br><br>
        E-name: <input type="text" name="email"><br><br>
        Website: <input type="text" name="website"><br><br>
        Comment: <textarea type="comment" rows="5" cols="40"></textarea><br><br>
        Gender:<input type="radio" name="gender" value="female">Female<br><br>
        <input type="radio" name="gender" value="male">Male<br><br>
        <input type="radio" name="gender" value="other">Other<br><br>


    </form>

    <?php
       
    ?>
</body>