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
use Neptunia\Controllers\SiteController;
use Neptunia\Controllers\AuthController;
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

$app->router->get("/", [SiteController::class, "home"]);
$app->router->get("/contact", [SiteController::class, "contact"]);
$app->router->post("/contact", [SiteController::class, "handlercontact"]);
$app->router->get("/login", [AuthController::class, 'login']);
$app->router->post("/login", [AuthController::class, 'login']);
$app->router->get("/register", [AuthController::class, 'register']);
$app->router->post("/register", [AuthController::class, 'register']);



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
