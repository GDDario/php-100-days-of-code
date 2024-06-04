<?php

#if (file_exists("mytestfile.txt")) {
#    $file = fopen("mytestfile.txt", "r");
#} else {
#    die("Error: The file does not exist.");
#}

// Custom error handler
//function customError($errno, $errstr)
//{
//    echo "!! Error: [$errno] $errstr" . PHP_EOL;
//    echo "Ending Script" . PHP_EOL;
//   die();
//}

//set_error_handler("customError");

try {
    echo 1 / 0;
} catch(Throwable $e) {
    echo 'Error catched.' . PHP_EOL;
}

//trigger error
#echo($test);
