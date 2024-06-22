<?php

require '../bootstrap.php';

use App\Helpers\Uri;
use App\Controllers\BaseController;

$controller = new BaseController;
$controller = $controller->load();

dd($controller);

// $controller = new Controller();
// $controller->getController();

// $method = new Method();
// $method->getMethod();

// $controler->$method($parameters);
 
// $parameters = new Parameters;
// $parameters->getParameters();