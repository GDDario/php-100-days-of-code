<?php

echo 'Request body: ';
print_r($_REQUEST);

echo "<br>";

$method = $_SERVER['REQUEST_METHOD'] === 'GET' ? $_GET['method'] : $_POST['method'];

echo 'The detected request method was ' . $_SERVER['REQUEST_METHOD'];
echo '<br>';
echo 'The intended request method was ' . strtoupper($method);
