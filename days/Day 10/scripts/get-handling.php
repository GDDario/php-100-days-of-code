<?php

// Less confidencial information
$name = $_GET['name'];
$age = $_GET['age'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get handling</title>
</head>

<body>

    <h1>Values submited (GET)</h1>
    <p>Name: <?= $name ?></p>
    <p>Age: <?= $age ?></p>

</body>

</html>