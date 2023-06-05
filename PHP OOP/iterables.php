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
            echo "<br>";

            // OR

            function getIterable():iterable {
                return ["d", "e", "f"];
            }

            $myIterable = getIterable();
            foreach ($myIterable  as $item) {
                echo $item;
            }
          
        ?>

        <!-- PHP - Creating Iterables -->
        <?php
            // Create an Iterator
            class MyIterator implements Iterator {
                private $items = [];
                private $pointer = 0;

                public function __construct($items) {
                    $this->items = array_values($items);
                }

                public function current() {
                    return $this->items[$this->pointer];
                }

                public function key() {
                    return $this->pointer;
                }

                public function next() {
                    $this->pointer++;
                }

                public function rewind() {
                    $this->pointer = 0;
                }

                public function valid() {
                    return isset($this->items[$this->pointer]);
                }
            }

            function printIterable(iterable $myIterable) {
                foreach ($myIterable as $item) {
                    echo $item;
                }
            }

            $iterator = new MyIterator(["a", "b", "c"]);
            $iterator->rewind();
            printIterable($iterator);

        ?>


    </body>
</html>