<?php

use Neptunia\Config\Routes\web;

// Route instance
$route = new Web();

// alamat route dan lokasi file
$route->add("/home", "home.php");
$route->add("/", "index.php");
$route->notfound("404.php");
