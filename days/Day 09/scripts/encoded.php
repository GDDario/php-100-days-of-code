<?php

mb_internal_encoding("UTF-8");
mb_http_output("UTF-8");

$string = "Hello world!";
$length = mb_strlen($string);

echo $length . PHP_EOL;

$string = "Hello, world!";
$substring = mb_substr($string, 0, 6);

echo $substring, PHP_EOL; // Output: Olá, 

$string = "Olá, MUNDO!";
$lowercase = mb_strtolower($string);
$uppercase = mb_strtoupper($string);

echo $lowercase . PHP_EOL;
echo $uppercase . PHP_EOL;
