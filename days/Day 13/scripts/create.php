<?php

session_start();

include "mysql-connection.php";

$name = htmlspecialchars($_POST['name']);
$password = htmlspecialchars($_POST['password']);

$connection = mysqlConnection();

$sql = "INSERT INTO user(name, password) VALUES (?, ?)";
$statement = mysqli_prepare($connection, $sql);

if (!mysqli_stmt_bind_param($statement, 'ss', $name, $password)) {
    die('Param error: ' . mysqli_stmt_error($statement));
}

if (!mysqli_stmt_execute($statement)) {
    die('Execution error: ' . mysqli_stmt_error($statement));
}

if (mysqli_stmt_affected_rows($statement) > 0) {
    $_SESSION['message'] = 'User created successfully.';
} else {
    $_SESSION['message'] = 'Could not creat a user.';
}

mysqli_stmt_close($statement);

header('Location: users.php');
exit;