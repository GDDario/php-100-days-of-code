<?php

$pattern = "/\d+/";
$replacement = "#";
$string = "The password is 1234 and the code is 5678.";
$result = preg_replace($pattern, $replacement, $string);

echo $result . PHP_EOL;

