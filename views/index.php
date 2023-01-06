<?php

require "vendor/autoload.php";
use Neptunia\Config\Database\UserDatabase;

$db = new UserDatabase();

var_dump($db);

echo "<pre>";
var_dump($_SERVER);
echo "</pre>";
