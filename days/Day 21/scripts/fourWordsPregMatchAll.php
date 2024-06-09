<?php

$fourLetterWordPattern = "/\b\w{4}\b/";
$string = 'This is a string with some four-letters word.';

preg_match_all($fourLetterWordPattern, $string, $matches);
print_r($matches);
