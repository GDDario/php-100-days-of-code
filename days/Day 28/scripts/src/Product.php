<?php

namespace App;

class Product implements Printable
{
    public int $id;
    public string $name;
    public Category $category;

    public function __construct(int $id, string $name, Category $category)
    {
        $this->id = $id;
        $this->name = $name;
        $this->category = $category;

        $this->print();
    }

    public function print(): void
    {
        echo "--- PRODUCT {$this->id} ---" . PHP_EOL;
        echo "Name: {$this->name}" . PHP_EOL;
        echo "Category: {$this->category->name}" . PHP_EOL;
        echo "---------------------------" . PHP_EOL;
    }
}
