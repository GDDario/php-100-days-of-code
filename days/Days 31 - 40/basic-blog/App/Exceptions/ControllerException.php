<?php

namespace App\Exceptions;

use Exception;

class ControllerException extends Exception
{
    public function __construct(
        string $controller
    )
    {
        parent::__construct('Error in controller ' . $controller);
    }
}