<?php

function classicFunction()
{
    $var = '.';

    echo "This is a classic function$var" . PHP_EOL;
}

function functionWithParameters(string $param1, int $param2)
{
    echo "This is a classic function with parameters: $param1, $param2" . PHP_EOL;
}

function functionWithVarArgs(...$args)
{
    echo 'This is a classic function with varArgs parameter.' . PHP_EOL;
    foreach ($args as $arg) {
        echo $arg . PHP_EOL;
    }
}

$anonymousFunction = function () {
    echo 'This is an anonymous function.' . PHP_EOL;
};

$value = 'Non scope variable.';
$anonymousFunctionWithNonScopeVariables = function () use ($value) {
    echo $value . PHP_EOL;
    echo "This is an anonymous function." . PHP_EOL;
};

$arrowFunction = fn () => 'This is an anonymous/arrow function.' . PHP_EOL;

classicFunction();

echo PHP_EOL;

functionWithParameters('Name', 12);

echo PHP_EOL;

functionWithVarArgs('Arg1', 'Arg2', 'Arg3');

echo PHP_EOL;

functionWithVarArgs(...['Arg1', 'Arg', 'Arg3']);

echo PHP_EOL;

$anonymousFunction();

echo PHP_EOL;

$anonymousFunctionWithNonScopeVariables();

echo PHP_EOL;

echo $arrowFunction();
