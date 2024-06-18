<?php

namespace App;

use Exception;

class Person
{
    public array $purchasedProducts = [];

    public function __construct(
        public string $name,
        public int $age,
        public float $money
    ) {
    }

    public function buyProduct(Product $product): void
    {
        if ($this->age < $product->ageRestriction) {
            throw new Exception('Inappropriate age to purchase this product.');
        }

        if ($this->money < $product->price) {
            throw new Exception('Person do not have sufficient money.');
        }

        $this->purchasedProducts[] = $product;
        $this->money -= $product->price;
    }
}
