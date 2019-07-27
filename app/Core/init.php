<?php

use Dotenv\Dotenv;

define('APP_BASE', __DIR__.'/../../');

require_once __DIR__.'/../../vendor/autoload.php';

$dotEnv = Dotenv::create(APP_BASE);
$dotEnv->load();
