<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

function mysqlConnection() {
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'test';

    $connection = mysqli_connect($server, $username, $password, $database);

    if (!$connection) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    return $connection;
}