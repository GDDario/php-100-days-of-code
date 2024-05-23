<?php

$var = 11;

if ($var > 10) {
    echo 'If with curly brackets.' . PHP_EOL;
}

if ($var === 1) {
} else {
    echo 'Else with curly brackets.' . PHP_EOL;
}

if ($var === 1) {
} else if($var === 11) {
    echo 'Else if with curly brackets.' . PHP_EOL;
}

if ($var > 10):
    echo 'If with colon.' . PHP_EOL;
endif;

if ($var === 10):
else:
    echo 'Else with colon.' . PHP_EOL;    
endif;

if ($var === 10):
elseif($var > 10):
    echo 'Else if with colon.' . PHP_EOL;    
endif;

switch($var) {
    case 10:
        echo 'Switch with curly braces.' . PHP_EOL;    
        break;
    case 11:
        echo 'Switch with curly braces.' . PHP_EOL;  
        break;  
    default:
        echo 'Switch with curly braces.' . PHP_EOL;    
        break;
}

switch($var):
    case 10:
        echo 'Switch with curly braces.' . PHP_EOL;    
        break;
    case 11:
        echo 'Switch with curly braces.' . PHP_EOL;  
        break;  
    default:
        echo 'Default switch with curly braces.' . PHP_EOL;    
        break;
endswitch;

echo $var = 11 ? 'Ternary operator' : '' . PHP_EOL;

echo $var ?? 'Null Coalescing.' . PHP_EOL;

echo match($var) {
    10 => 'Match.' . PHP_EOL,
    11 => 'Match.' . PHP_EOL,
    default => 'Default match.' . PHP_EOL,
};

function checkVar($var) {
    if ($var <= 10) {
        return 'Guard clause if.' . PHP_EOL;
    }
    
    return 'Guard clause else.' . PHP_EOL;
}

echo checkVar($var);