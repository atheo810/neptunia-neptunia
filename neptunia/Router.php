<?php

namespace Neptunia;

/**
 * Class Application
 * @author atheo810 <atheos810@gmail.com>
 * @package namespace Neptunia;
 *
 */
class Router
{
	public Response $response;
	public Request $request;
	protected array $routes = [];
	/*
	|--------------------------------------------------------------------------
	| making instance for Response, Request, and protected array []
	|--------------------------------------------------------------------------
	| protected array will store the data of routing in our project
	| 
	|
	*/

	public function __construct(Request $request, Response $response)
	{
		$this->request = $request;
		$this->response = $response;
	}
	/*
	|--------------------------------------------------------------------------
	| construct of Router
	|--------------------------------------------------------------------------
	| need the class of Request and Response
	| and declare of that class in $this
	| 
	|
	*/

	public function get($path, $callback)
	{
		$this->routes["get"][$path] = $callback;
	}
	/*
	|--------------------------------------------------------------------------
	| function get
	|--------------------------------------------------------------------------
	| need variable of our paths name in this case is our URI, and 
	| callback which is the something that we want to show to the user's
	| and store the data to $routes[];
	| 
	|
	*/

	public function post($path, $callback)
	{
		$this->routes["post"][$path] = $callback;
	}
	/*
	|--------------------------------------------------------------------------
	| function post
	|--------------------------------------------------------------------------
	| need variable of our paths name in this case is our URI, and 
	| callback which is the something that we want to show to the user's
	| and store the data to $routes[];
	| 
	|
	*/


	public function resolve()
	{
		$path = $this->request->getPath();
		$method = $this->request->getMethod();
		$callback = $this->routes[$method][$path] ?? false;

		if ($callback === false) {
			$this->response->setStatusCode(404);
			return $this->renderView("404");
		}
		if (is_string($callback)) {
			return $this->renderView($callback);
		}
		if (is_array($callback)) {
			$callback[0] = new $callback[0];
		}
		return call_user_func($callback);
	}
	public function renderView($view, $params = [])
	{
		if ($view === "404") {
			return $this->renderOnlyView($view, $params);
		}
		$layoutContent = $this->layoutContent();
		$viewContent = $this->renderOnlyView($view, $params);
		return str_replace("{{content}}", $viewContent, $layoutContent);
	}
	public function renderContent($viewContent)
	{
		$layoutContent = $this->layoutContent();
		return str_replace("{{content}}", $viewContent, $layoutContent);
	}
	protected function layoutContent()
	{
		ob_start();
		include_once Application::$ROOT_DIR . "/views/Layout/template.php";
		return ob_get_clean();
	}
	protected function renderOnlyView($view, $params)
	{
		foreach ($params as $key => $value) {
			$$key = $value;
		}
		ob_start();
		include_once Application::$ROOT_DIR . "/views/Pages/$view.php";
		return ob_get_clean();
	}
	/*
	|--------------------------------------------------------------------------
	| make function renderOnlyView
	|--------------------------------------------------------------------------
	| make an object start and include the views/Page/$file.php
	| with parameter foreach into the view
	| and returt object clean
	| 
	|
	*/
}
