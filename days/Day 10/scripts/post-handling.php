<?php

// More confidencial information
$email = $_POST['email'];
$password = $_POST['password'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post handling</title>
</head>

<body>

    <h1>Values submited (POST)</h1>
    <p>Email: <?= $email ?></p>
    <p>Password: <?= $password ?></p>

</body>

</html>