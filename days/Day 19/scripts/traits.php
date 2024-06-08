<?php

trait Logger {
    public function log(string $message): void {
        echo "[LOG]: {$message}" . PHP_EOL;
    }
}


class User {
    use Logger;

    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function setName(string $name): void {
        $this->name = $name;
        $this->log("User name set to {$name}");
    }
}

class Product {
    use Logger;

    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function setName(string $name): void {
        $this->name = $name;
        $this->log("Product name set to {$name}");
    }
}

$user = new User("Alice");
$user->setName("Bob");

$product = new Product("Laptop");
$product->setName("Desktop");

