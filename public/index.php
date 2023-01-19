<?php

// melakukan import dari autoload.php milik composer
// melakukan import dari folder routes
require_once __DIR__.'/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "../..");
$dotenv->load();

require_once __DIR__.'/../routes/web.php';
