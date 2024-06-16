<?php

define('strict_types', 1);

require_once('../vendor/autoload.php');

use App\Category;
use App\Product;

$category1 = new Category('1', 'Fruits');
$category2 = new Category('2', 'Cars');

$product1 = new Product(1, 'Tomato', $category1);
$product2 = new Product(2, 'Olive', $category1);

$product3 = new Product(3, 'Gol', $category2);
$product4 = new Product(4, 'Polo', $category2);