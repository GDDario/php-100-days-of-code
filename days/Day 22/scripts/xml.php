<?php

$xml = simplexml_load_file('../resources/example.xml');

echo 'XML read: ';
print_r($xml);

echo PHP_EOL;

$xml = new SimpleXMLElement('<root/>');

$child = $xml->addChild('user');
$child->addChild('name', 'Joao');
$child->addChild('age', '25');
$child->addChild('city', 'Sao Paulo');

echo "XML created: " .  $xml->asXML();
