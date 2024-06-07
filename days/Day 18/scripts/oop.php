<?php

class Person
{
    private String $name;
    private DateTime $birthDate;
    private ?string $id = null;

    public function __construct()
    {
        echo 'Constructing Person class...' . PHP_EOL;
    }

    public function __destruct()
    {
        echo 'Destructing Person class...' . PHP_EOL;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getBirthDate(): DateTime
    {
        return $this->birthDate;
    }
    public function setBirthDate(string $date): void
    {
        $birthDate = DateTime::createFromFormat('Y-m-d', $date);
        $this->birthDate = $birthDate;
    }

    public function getAge(): int
    {
        $now = new DateTime();
        $days = intval($now->format('Y')) - intval($this->birthDate->format('Y'));

        return $days;
    }
}

$person = new Person();
$person->setName('Arthur');
$person->setBirthDate('2023-12-01');
echo "{$person->getName()}, you age is {$person->getAge()}" . PHP_EOL;
