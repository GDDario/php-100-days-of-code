<?php

// for
for($i = 0; $i < 2; $i++) {
    echo "[$i] Inside for (brackets)." . PHP_EOL;
}

echo PHP_EOL;

for($i = 0; $i < 2; $i++):
    echo "[$i] Inside for (colon)." . PHP_EOL;
endfor;

echo PHP_EOL;

// while
$i = 0;
while($i < 2) {
    echo "[$i] Inside while (brackets)." . PHP_EOL;
    $i++;
}

echo PHP_EOL;

$i = 0;
while($i < 2):
    echo "[$i] Inside while (colon)." . PHP_EOL;
    $i++;
endwhile;

echo PHP_EOL;

// do-while
$i = 0;

do {
    echo "[$i] Inside do-while." . PHP_EOL;
    $i++;
} while($i < 2);

echo PHP_EOL;

// foreach

$array = ['zero' => 0, 'one' => 1];
foreach($array as $number) {
    echo "[$number]Inside foreach (simple)." . PHP_EOL;
}

echo PHP_EOL;

foreach($array as $key => $number) {
    echo "[$key -> $number] Inside foreach (with key)." . PHP_EOL;
}

// Recursive function

echo PHP_EOL;

function recursive($current, $final) {
    echo "[$current] Inside recursive function." . PHP_EOL;

    if ($current < $final) {
        $current++;
        recursive($current, $final);
    }
}

recursive(0, 1);