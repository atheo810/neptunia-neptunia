<?php
namespace Neptunia;

/**
 * Class Application
 * @author atheo810 <atheos810@gmail.com>
 * @package namespace Neptunia;
 *
 */

class Application
{
	public static string $ROOT_DIR;
	public static Application $app;
	public Router $router;
	public Response $response;
	public Request $request;
	/*
	|--------------------------------------------------------------------------
	| Making instance Router, Response, Request, and Application
	|--------------------------------------------------------------------------
	| static Application for simply call, also making static string $ROOT_DIR
	| for directory name, so user doesnt have to know the __DIR__
	| 
	|
	*/

	public function __construct($rootPath)
	{
		self::$app = $this;
		self::$ROOT_DIR = $rootPath;
		$this->request = new Request();
		$this->response = new Response();
		$this->router = new Router($this->request, $this->response);
	}
	/*
	|-----------------------------------------------------------------------------
	| making new instance for Response, Request, Router
	|-----------------------------------------------------------------------------
	| self::$ROOT_DIR = $rootPath; mean we using dirname as roort for this class
	| self::$app = $this; including $this to the $app that's belong to Application
	|
	*/

	public function run()
	{
		echo $this->router->resolve();
	}
	/*
	|--------------------------------------------------------------------------
	| Making public function run()
	|--------------------------------------------------------------------------
	| function run for running the Application, 
	| 
	|
	*/
}
