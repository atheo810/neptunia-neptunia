<?php
namespace Neptunia;

/**
 * summary
 */
class Application
{
	/**
	 * summary
	 */
	public static string $ROOT_DIR;
	public static Application $app;
	public Router $router;
	public Response $response;
	public Request $request;
	public function __construct($rootPath)
	{
		self::$app = $this;
		self::$ROOT_DIR = $rootPath;
		$this->request = new Request();
		$this->response = new Response();
		$this->router = new Router($this->request, $this->response);
	}
	public function run()
	{
		echo $this->router->resolve();
	}
}
