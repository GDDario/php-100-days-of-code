<?php

$globals = $_GLOBALS;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobals</title>
</head>

<body>
    <h3>$_SERVER</h3>

    <?php
        foreach ($_SERVER as $key => $var) {
            echo $key . ': ' . $var . '<br>';
        }
    ?>

    <br><br>

    <h3>$_FILES</h3>

    <?php
        print_r($_FILES);
    ?>

    <h3>$_COOKIE</h3>

    <?php
        print_r($_COOKIE);
    ?>
    <h3>$_SESSION</h3>

    <?php
        print_r($_SESSION);
    ?>
</body>

</html>