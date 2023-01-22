<?php

/*
|--------------------------------------------------------------------------
| Using Vendor autoload.php from composer
|--------------------------------------------------------------------------
| including all class stored at composer from here
| 
|
*/
require_once __DIR__ . "/../vendor/autoload.php";

// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "../..");
// $dotenv->load();

/*
|--------------------------------------------------------------------------
| Using Application from Neptunia
|--------------------------------------------------------------------------
| from Neptunia Application making router, the method currently avaible 
| are get and post
| 
|
*/
use Neptunia\Application;

$app = new Application(dirname(__DIR__));

$app->router->get("/", "home");
$app->router->get("/contact", "contact");
$app->router->post("/contact", function () {
	return "handling data";
});

$app->run();
