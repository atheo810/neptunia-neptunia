<?php 
/**
 * 
 * 2 parameter 
 * route : alamat routing
 * file : lokasi file yang dituju jika alamat route sama
 */
class web
{
	
	function __construct(argument)
	{
	}
	public function add($route, $file)
	{
		//mengganti garing di depan dan belakang
		//$_REQUEST['uri'] akan kosong jika /

        if(!empty($_REQUEST['uri'])){
            $route = preg_replace("/(^\/)|(\/$)/","",$route);
            $reqUri =  preg_replace("/(^\/)|(\/$)/","",$_REQUEST['uri']);
        }else{
            $reqUri = "/";
        }

        if($reqUri == $route ){

            //jika ditemukan maka akan include file
            include($file);

            //keluar jika alamat route ditemukan.
            exit();
        }
	}
	public function notfound($file)
	{
	  include($file);
	}
}

// Route instance
$route = new Web();

// alamat route dan lokasi file
$route->add("/home", "index.php");
$route->notfound("404.php");


