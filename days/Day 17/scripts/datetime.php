<?php

$date = new DateTime('now');

echo 'Today is ' . $date->format('Y-m-d H:i:s') . PHP_EOL;

echo 'Day: ' . $date->format('d') . PHP_EOL;

$newDate = $date->modify('+1 day');

echo 'Tommorow is ' . $newDate->format('Y-m-d H:i:s') . PHP_EOL;
