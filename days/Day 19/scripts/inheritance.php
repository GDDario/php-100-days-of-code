<?php

class Vehicle
{
    public string $licensePlate;

    public function __construct(
        string $licensePlate
    ) {
        $this->licensePlate = $licensePlate;
    }

    public function printDetails(): void
    {
        echo "License plate: {$this->licensePlate}" . PHP_EOL;
    }
}

class Car extends Vehicle
{
    public string $model;

    public function __construct(
        string $licensePlate,
        string $model
    ) {
        parent::__construct($licensePlate);
        $this->model = $model;
    }

    public function printDetails(): void
    {
        parent::printDetails();
        echo "Model: {$this->model}" . PHP_EOL;
    }
}

$car = new Car('123a-4123', 'Ford Ka 2006');
$car->printDetails();
