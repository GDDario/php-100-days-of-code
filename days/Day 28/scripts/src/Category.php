<?php

namespace App;

class Category implements Printable
{
    public int $id;
    public string $name;

    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
        
        $this->print();
    }

    public function print(): void
    {
        echo "--- CATEGORY {$this->id} ---" . PHP_EOL;
        echo "Name: {$this->name}" . PHP_EOL;
        echo "----------------------------" . PHP_EOL;
    }
}