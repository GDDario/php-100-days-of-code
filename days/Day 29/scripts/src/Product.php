<?php

namespace App;

class Product
{
    public function __construct(
        public string $name,
        public float $price,
        public ?int $ageRestriction = null
    ) {
    }
}
