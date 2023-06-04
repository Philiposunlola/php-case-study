<?php
    namespace Html;
    class Table {
        public $title = "";
        public $numRows = 0;
        public function message() {
            echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
        }
    }

    class Row {
        public $numCells = 0;
        public function message() {
          echo "<p>The row has {$this->numCells} cells.</p>";
        }
      }

    $table = new Table();
    $table->title = "My table";
    $table->numRows = 5;
?>

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
        <?php
            $table->message();
        ?>
    </body>
</html>