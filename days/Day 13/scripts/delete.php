<?php

include "mysql-connection.php";

session_start();

$connection = mysqlConnection();

$id = $_POST['id'];

$query = "DELETE FROM user WHERE id = ?";
$statement = mysqli_prepare($connection, $query);

mysqli_stmt_bind_param($statement, 'i', $id);
mysqli_stmt_execute($statement);

mysqli_stmt_close($statement);

header('Location: users.php');
exit;