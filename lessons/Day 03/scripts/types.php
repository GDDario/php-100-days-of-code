<?php

declare(strict_types=1);

$stringType = 'Value';
echo 'stringType is string? ' . boolStr(is_string($stringType)) . PHP_EOL;

$integerType = 12;
echo 'integerType is integer? ' . boolStr(is_integer($integerType)) . PHP_EOL;

$floatType = 1.3;
echo 'floatType is float? ' . boolStr(is_float($floatType)) . PHP_EOL;

$boolType = false;
echo 'boolType is bool? ' . boolStr(is_bool($boolType)) . PHP_EOL;

$arrayType = [];
echo 'arrayType is array? ' . boolStr(is_array($arrayType)) . PHP_EOL;

$objectType = new DateTime();
echo 'objectType is object? ' . boolStr(is_object($objectType)) . PHP_EOL;

$nullType = null;
echo 'nullType is null? ' . boolStr(is_null($nullType)) . PHP_EOL;

$callableType = function () {
    return "Value";
};
echo 'callableType is callable? ' . boolStr(is_callable($callableType)) . PHP_EOL;

$callableType2 = fn () => "Value";
echo 'callableType2 is callable? ' . boolStr(is_callable($callableType2)) . PHP_EOL;

$resourceType = fopen('../resources/text.txt', 'r');
echo 'resourceType is resource? ' . boolStr(is_resource($resourceType)) . PHP_EOL;

/**
 * Prints the boolean result in a string format,
 */
function boolStr(bool $value): string {
    return $value ? 'true' : 'false';
}