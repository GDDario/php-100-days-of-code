<?php

$emailPattern = "/^([a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6})$/";
$string = 'example@example.com';

if (preg_match($emailPattern, $string)) {
	echo 'Valid email!';
} else {
	echo 'Invalid email!';
}

echo PHP_EOL;
