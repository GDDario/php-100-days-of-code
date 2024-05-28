<?php

$simpleString = 'This is a simple quoted string.';

echo $simpleString . PHP_EOL;

$var = 'variables';
$doubleQuotedString = "This is a more complex string. It supports $var.";

echo $doubleQuotedString . PHP_EOL;

// Some functions ----------------------------------------
$length = strlen($doubleQuotedString);
$position = strpos("This", $doubleQuotedString);
$newString = str_replace("World", "PHP", "Hello, World!");
$substring = substr("Hello, World!", 7, 5);
$lowercase = strtolower("Hello, World!");
$uppercase = strtoupper("Hello, World!");
$capitalized = ucfirst("hello, world!");
$lowercaseFirst = lcfirst("Hello, World!");
$capitalizedWords = ucwords("hello, world!");
$trimmed = trim("  Hello, World!  ");
$leftTrimmed = ltrim("  Hello, World!");
$rightTrimmed = rtrim("Hello, World!  ");
$array = explode(", ", "Hello, World, PHP");
$string = implode(", ", ["Hello", "World", "PHP"]);
$repeated = str_repeat("Hello, ", 3);
$reversed = strrev("Hello, World!");
$formattedNumber = number_format(1234567.89);
$md5 = md5("Hello, World!");
$sha1 = sha1("Hello, World!");
$encoded = htmlspecialchars("<a href='test'>Test</a>");
$entities = htmlentities("<a href='test'>Test</a>");
$escaped = addslashes("Hello 'World'!");
$array = str_split("Hello");
$result = strcmp("Hello", "World");

