<?php

// melakukan import dari autoload.php milik composer
// melakukan import dari folder routes
require_once __DIR__ . "/../vendor/autoload.php";

// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "../..");
// $dotenv->load();
use Neptunia\Application;

$app = new Application(dirname(__DIR__));

$app->router->get("/", "home");
$app->router->get("/contact", "contact");

$app->run();
// memakai configurasi dari class UserDatabase
// use Neptunia\Config\Database\UserDatabase;

// new UserDatabase();
// memakai Route dari web.php
// require_once __DIR__.'/../routes/web.php';
