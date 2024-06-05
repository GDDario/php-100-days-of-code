<?php

$text = "Original\nOriginal\nOriginal\nOriginal";
$file = '../resources/original.txt';

if (!file_exists($file)) {
    return;
}

$content = file_get_contents($file, true);

echo 'Content before: ' . $content . PHP_EOL;

file_put_contents($file, $text, FILE_APPEND);

$content = file_get_contents($file, true);

echo 'Content now: ' . $content . PHP_EOL;

unlink($file);

echo 'File deleted!' . PHP_EOL;

file_put_contents($file, $text);

echo 'File created.' . PHP_EOL;

