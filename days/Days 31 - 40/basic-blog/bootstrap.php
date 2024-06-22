<?php

// Error configuration -----------------------------

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Vendor and functions requires -------------------

require 'vendor/autoload.php';
require 'App/Functions/helpers.php';

// Load and set up environment variables -----------

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/');
$dotenv->load();