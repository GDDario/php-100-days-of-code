<?php

$pattern = "/[\s,]+/";
$string = "This, is a string with, multiple delimiters.";

$result = preg_split($pattern, $string);

print_r($result);
