<?php

$fruit = "Apple";

include "another-fruit.php"; // Path do not exist

echo "$fruit and $anotherFruit" . PHP_EOL; // Undefined variable