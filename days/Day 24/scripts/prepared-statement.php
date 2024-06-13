<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

$name = 'Jhon';
$email = "malicious@gmail.com'); DROP TABLE user; --";

$mysqli = new mysqli('localhost', 'root', '', 'prepared_statement_test');

$stmt = $mysqli->prepare("INSERT INTO user (name, email) VALUES (?, ?)");
$stmt->bind_param('ss', $name, $email);
$stmt->execute();

// Vulnerable
// $sql = "INSERT INTO user (name, email) VALUES ('$name', '$email')";
// $mysqli->query($sql);
// $mysqli->close();
