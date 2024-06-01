<?php

if (isset($_POST['name']) && isset($_POST['password'])) {
    session_start();

    include "mysql-connection.php";

    $name = htmlspecialchars($_POST['name']);
    $password = htmlspecialchars($_POST['password']);
    $id = $_GET['id'];

    $connection = mysqlConnection();

    $sql = "UPDATE user SET name = ?, password = ?, updated_at = CURRENT_TIMESTAMP WHERE id = ?";
    $statement = mysqli_prepare($connection, $sql);

    if (!mysqli_stmt_bind_param($statement, 'ssi', $name, $password, $id)) {
        die('Param error: ' . mysqli_stmt_error($statement));
    }

    if (!mysqli_stmt_execute($statement)) {
        die('Execution error: ' . mysqli_stmt_error($statement));
    }

    mysqli_stmt_close($statement);

    header('Location: users.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<body>
    <fieldset>
        <legend>Update user</legend>

        <form action="#" method="post">
            <label>Name</label>
            <br>
            <input type="text" name="name">
            <br>
            <br>
            <label>Password</label>
            <br>
            <input type="password" name="password">

            <br>
            <br>
            <button>Submit</button>
        </form>
    </fieldset>
</body>

</html>