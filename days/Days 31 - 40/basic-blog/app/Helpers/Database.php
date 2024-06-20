<?php

namespace App\Helpers;

class Database
{
    private $pdo;

    // TODO: make PDO connection
    public function __construct()
    {
    }

    public function getPdo()
    {
        return $this->pdo;
    }
}
