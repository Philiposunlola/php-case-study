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

        <!-- PHP FORM VALIDATION -->
    <?php
        // define variables and set to empty values 
        // $name = $email = $gender = $comment = $website = "";

        // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //     $name = test_input($_POST["name"]);
        //     $email = test_input($_POST["email"]);
        //     $website = test_input($_POST["website"]);
        //     $comment =  $_POST["comment"]; 
        //     $gender= test_input($_POST["gender"]);
        // }

        function test_input($data) {
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

    <!-- <form method="post"  action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"><br><br>
         Name: <input type="text" name="name">
         <br><br>
         E-name: <input type="text" name="email">
         <br><br>
         Website: <input type="text" name="website">
         <br><br>
         Comment: <textarea type="comment" rows="5" cols="40"></textarea>
         <br><br>
         Gender:
         <input type="radio" name="gender" value="female">Female
         <input type="radio" name="gender" value="male">Male
         <input type="radio" name="gender" value="other">Other
         <br><br>
         <input type="submit" name="submit" value="Submit">
    </form> -->

        <!-- PHP FORM REQUIRED -->
    <?php
        // define variables and set to empty values
        // $nameErr = $emailErr = $genderErr = $commentErr = $websiteErr = "";
        // $name = $email = $gender = $comment = $website = "";

        // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //     if (empty($_POST["name"])) {
        //         $nameErr = "Name is required";
        //       } else {
        //         $name = test_input($_POST["name"]);
        //       }
              
        //       if (empty($_POST["email"])) {
        //         $emailErr = "Email is required";
        //       } else {
        //         $email = test_input($_POST["email"]);
        //       }
                
        //       if (empty($_POST["website"])) {
        //         $websiteErr = "website is required";
        //       } else {
        //         $website = test_input($_POST["website"]);
        //       }
            
        //       if (empty($_POST["comment"])) {
        //         $commentErr = "";
        //       } else {
        //         $comment = test_input($_POST["comment"]);
        //       }
            
        //       if (empty($_POST["gender"])) {
        //         $genderErr = "Gender is required";
        //       } else {
        //         $gender = test_input($_POST["gender"]);
        //       }
        //     }
        
        // function test_input($data) {
        //     $data = trim($data);
        //     $data = stripslashes($data);
        //     $data = htmlspecialchars($data);
        //     return $data;
        // }
    ?>

    <!-- <h2>PHP Form Validation Example</h2>
    <p><span class="error">* required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        Name: <input type="text" name="name">
            <span class="error">* <?php echo $nameErr;?></span>
            <br><br>
        E-mail: <input type="text" name="email">
            <span class="error">* <?php echo $emailErr;?></span>
            <br><br>
        Website: <input type="text" name="website">
            <span class="error"><?php echo $websiteErr;?></span>
            <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea>
            <br><br>
        Gender:
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="other">Other
            <span class="error">* <?php echo $genderErr;?></span>
            <br><br>
        <input type="submit" name="submit" value="Submit">  
    </form> -->

        <!-- PHP FORM URL/E-MAIL -->

    <?php
        //  define variables and set to empty values
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        $name = $email = $gender = $comment = $website ="";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
              $nameErr = "Name is required";
            } else {
              $name = test_input($_POST["name"]);
              // check if name only contains letters and whitespace
              if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed";
              }
            }
          
            if (empty($_POST["email"])) {
              $emailErr = "Email is required";
            } else {
              $email = test_input($_POST["email"]);
              // check if e-mail address is well-formed
              if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
              }
            }
          
            if (empty($_POST["website"])) {
              $website = "";
            } else {
              $website = test_input($_POST["website"]);
              // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
              if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                $websiteErr = "Invalid URL";
              }
            }
          
            if (empty($_POST["comment"])) {
              $comment = "";
            } else {
              $comment = test_input($_POST["comment"]);
            }
          
            if (empty($_POST["gender"])) {
              $genderErr = "Gender is required";
            } else {
              $gender = test_input($_POST["gender"]);
            }
          }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        Name: <input type="text" name="name" value="<?php echo $name;?>">
            <span class="error">* <?php echo $nameErr;?></span>
            <br><br>
        E-mail: <input type="text" name="email" value="<?php echo $email;?>">
            <span class="error">* <?php echo $emailErr;?></span>
            <br><br>
        Website: <input type="text" name="website" value="<?php echo $website;?>">
            <span class="error"><?php echo $websiteErr;?></span>
            <br><br>
        Comment: <textarea name="comment" rows="5" cols="40" value="<?php echo $comment;?>"></textarea>
        <br><br>
        Gender:
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="others") echo "checked";?>  value="other">Other
            <span class="error">* <?php echo $genderErr;?></span>
            <br><br>
        <input type="submit" name="submit" value="Submit">  
    </form>

    <?php
        echo "<h2>Your Input:</h2>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $website;
        echo "<br>";
        echo $comment;
        echo "<br>";
        echo $gender;
        echo "<br>";
    ?>

</body>