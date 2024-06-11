<?php

$data = array(
    "name" => "Joao",
    "age" => 25,
    "city" => "Sao Paulo"
);

$jsonData = json_encode($data);

echo "Array to JSON: " . $jsonData . PHP_EOL . PHP_EOL;

$jsonData = '{"name": "João", "age": 25, "city": "São Paulo"}';

$data = json_decode($jsonData, true);

$dataObject = json_decode($jsonData);

echo "JSON to array: " . PHP_EOL;
print_r($dataObject);
