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
use Neptunia\Controllers\Controller;
use Neptunia\Application;
/*
|--------------------------------------------------------------------------
| Using Application and Controller from Neptunia
|--------------------------------------------------------------------------
| from Neptunia Application making router, the method currently available 
| are get and post
| 
|
*/

$app = new Application(dirname(__DIR__));
/*
|--------------------------------------------------------------------------
| declare $app for instance Application using dirname(__DIR__)
|--------------------------------------------------------------------------
| the user doesn't need to know the directory name so we passed the
| function dirname to Application for making easier to call Directory
| 
|
*/

$app->router->get("/", [Controller::class, "home"]);
$app->router->get("/contact", [Controller::class, "contact"]);
$app->router->post("/contact", [Controller::class, "contact"]);
/*
|--------------------------------------------------------------------------
| Making router 
|--------------------------------------------------------------------------
| the method currently available is get and post
| 
|
*/

$app->run();
/*
|--------------------------------------------------------------------------
| Running $app 
|--------------------------------------------------------------------------
| when $app->run(), it's mean we running all routing
| 
|
*/
