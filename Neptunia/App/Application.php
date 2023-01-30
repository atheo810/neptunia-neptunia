<?php

namespace Neptunia\App;


/**
 * Class Application
 * @author atheo810 <atheos810@gmail.com>
 * @package namespace Neptunia;
 *
 */

class Application
{
    public static string $ROOT_DIR;
    // making public static for class Application
    public static Application $app;
    // making instance static for Application  with $app
    public Router $router;
    // making public variable for class Router
    public Controller $controller;
    public Response $response;
    // making public Response with variable
    public Request $request;
    // making public Request with variable
    public function __construct($rootPath)
    {
        self::$app = $this;
        // self::$app because it's static
        self::$ROOT_DIR = $rootPath;
        // self::ROOT_DIR for the Root directory folder
        $this->request = new Request();
        // making instance class of Request 
        $this->response = new Response();
        // making instance class of Response
        $this->controller = new Controller();
        // making instance class of Controller
        $this->router = new Router($this->request, $this->response);
        // making instance class of Router
    }



    public function Run()
    {
        echo $this->router->Resolve();
    }
    /*
	|--------------------------------------------------------------------------
	| Running all activity of all object in the publice/index.
	|--------------------------------------------------------------------------
	| static Application for simply call, also making static string $ROOT_DIR
	| for directory name, so user doesnt have to know the __DIR__
	| 
	|
	*/
}
