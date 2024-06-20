<?php

namespace App\Models;

use App\Helpers\Database;

class User
{
    private $pdo;

    public function __construct()
    {
        $database = new Database();
        $this->pdo = $database->getPdo();
    }
}
