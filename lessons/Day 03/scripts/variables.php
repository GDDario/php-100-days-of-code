<?php

$var = 'Variable content';

$val1 = 'First value';
$val2 = 'val1';

$val3 = 'Third value. Val2: ' . $$val2;
$val4 = 'val3';

echo $$val4 . PHP_EOL;

