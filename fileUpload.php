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
    <!-- Create The HTML Form -->

    <form actions="upload.php" method="post" enctype="multipart/form-data">
        select imaage to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" name="Upload Image" id="submit">
    </form>
    
    <?php
       $target_dir = "uploads/";
       $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
       $uploadOk = 1;
       $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
       // Check if image file is a actual image or fake image
       if(isset($_POST["submit"])) {
         $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
         if($check !== false) {
           echo "File is an image - " . $check["mime"] . ".";
           $uploadOk = 1;
         } else {
           echo "File is not an image.";
           $uploadOk = 0;
         }
       }
    ?>
    
</body>