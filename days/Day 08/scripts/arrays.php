<?php

$indexedArray = ['Apple', 'Pear', 'Orange'];
echo $indexedArray[0] . PHP_EOL . PHP_EOL;

$associativeArray = [
    'one' => 'Apple',
    'two' => 'Pear',
    'three' => 'Orange'
];
echo $associativeArray['two'] . PHP_EOL . PHP_EOL;

$multidimensionalArray = [
    'fruits' => [
        'one' => [
            'one-one' => [
                'Apple',
                'Pear',
                'Orange'
            ],
            'one-two' => [
                'Cashew',
                'Jabuticaba',
                'Surinam Cherry',
            ]
        ],
        'two' => [
            'two-one' => [
                'Soursop',
                'Cupuaçu',
                'Passion Fruit'
            ],
            'two-two' => [
                'Acerola Cherry',
                'Guarana',
                'Dragon fruit'
            ]
        ]
    ]
];
echo $multidimensionalArray['fruits']['two']['two-two'][2] . PHP_EOL;