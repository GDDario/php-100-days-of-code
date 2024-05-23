<?php

define('CONST', 'Constant value');

echo 'Constant: ' . constant('CONST') . PHP_EOL;

echo 'Is contant defined? ' . boolStr(defined('CONST')) . PHP_EOL;

echo 'Predefined constant: ' . PHP_VERSION . PHP_EOL;

$print = new PrintConstants();

echo 'Magic constant: ' . __FILE__ . PHP_EOL;

/**
 * Prints the boolean result in a string format,
 */
function boolStr(bool $value): string {
    return $value ? 'true' : 'false';
}

class PrintConstants 
{
    const CONSTANT = 'Constant value';

    public function __construct()
    {
        echo 'Class constant: ' . self::CONSTANT . PHP_EOL;

    }
}