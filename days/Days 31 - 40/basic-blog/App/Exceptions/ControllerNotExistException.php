<?php

namespace App\Exceptions;

class ControllerNotExistException extends ControllerException
{
    public function __construct(
        string $controller
    )
    {
        parent::__construct($controller);

        $this->message .= ' - Controller does not exist';
    }
}