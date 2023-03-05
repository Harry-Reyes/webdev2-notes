<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2-28-23</title>
    <style>
        /* HTML Version */
        /* .injectedClass {color: dodgerblue;} */

        /* PHP Version */
        <?php
            echo '.injectedClass {color: dodgerblue;}'
        ?>
    </style>
</head>
<body>
    <h1 class="<?php echo 'injectedClass'?>">Header 1</h1>

    <!-- PHP code initiation -->
    <?php
        // Writing one paragraph line into the html
        echo '<p>First Program in PHP</p>' 
    ?>

    <?php echo '<p>one line<p>' ?>
    <?= '<p>short version<p>' ?>

    <?php
        // Variables must have dollar sign as a first char
        $variabol = 1;

        // You can concatenate strings
        $str = "Number's $variabol <br>";

        echo $str;

        // HERE DOC
        $here = <<<JOSSA
        JOSSA;
    ?>
</body>
</html>