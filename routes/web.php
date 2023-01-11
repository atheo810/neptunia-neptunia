<?php

/**
 *
 * 2 parameter
 * route : alamat routing
 * file : lokasi file yang dituju jika alamat route sama
 */
class web
{
    public function add($route, $file)
    {
        //mengganti garing di depan dan belakang
        //$_SERVER['REQUEST_URI'] akan kosong jika /

        if (!empty($_SERVER['REQUEST_URI'])) {
            $route = preg_replace("/(^\/)|(\/$)/", "", $route);
            $reqUri =  preg_replace("/(^\/)|(\/$)/", "", $_SERVER['REQUEST_URI']);
        } else {
            $reqUri = "/";
        }

        if ($reqUri == $route) {
            //jika ditemukan maka akan include file
            include("../views/".$file);

            //keluar jika alamat route ditemukan.
            exit();
        }
    }
    public function notfound($file)
    {
        include("../views/".$file);
    }
}

// Route instance
$route = new Web();

// alamat route dan lokasi file
$route->add("/home", "home.php");
$route->add("/", "index.php");
$route->notfound("404.php");
