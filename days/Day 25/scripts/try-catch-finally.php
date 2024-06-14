<?php

try {
    $error = 1 / 0;
} catch (ArithmeticError $e) {
    echo 'Error catched' . PHP_EOL;
} finally {
    echo 'Finishing';
}