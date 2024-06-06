<?php

echo 'Today is ' . date('Y-m-d H:i:s') . PHP_EOL;

$dateString = '2024-06-06 00:10:54';

$date = strtotime($dateString);

echo 'Date string to time (as timestamp): ' . $date . PHP_EOL;