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
		/*
		|--------------------------------------------------------------------------
		| check the callback from URI user with URI variable from public
		|--------------------------------------------------------------------------
		| if the $callback is false then it will return status code 404 on the 
		| website
		| and return the page of 404 
		| 
		|
		*/
		if (is_string($callback)) {
			return $this->renderView($callback);
		}
		/*
		|--------------------------------------------------------------------------
		| check if the callback is string 
		|--------------------------------------------------------------------------
		| if the $callback is string then it will return the view of $callback
		| 
		|
		*/
		if (is_array($callback)) {
			$callback[0] = new $callback[0]();
		}
		/*
		|--------------------------------------------------------------------------
		| check if the $callback is array 
		|--------------------------------------------------------------------------
		| if $callback is an array then it will make an instance of the $callback
		| from $callback[0]
		| 
		|
		*/
		return call_user_func($callback, $this->request);
	}
	public function renderView($view, $params = [])
	{
		if ($view === "404") {
			return $this->renderOnlyView($view, $params);
		}
		/*
		|--------------------------------------------------------------------------
		| check if the $view is 404
		|--------------------------------------------------------------------------
		| if the view is 404 it will return the page of 404
		| 
		|
		*/
		$layoutContent = $this->layoutContent();
		$viewContent = $this->renderOnlyView($view, $params);
		return str_replace("{{content}}", $viewContent, $layoutContent);
	}
	public function renderContent($viewContent)
	{
		$layoutContent = $this->layoutContent();
		return str_replace("{{content}}", $viewContent, $layoutContent);
	}
	/*
	|--------------------------------------------------------------------------
	| make function renderContent
	|--------------------------------------------------------------------------
	| make variable $layout content to run function layoutcontent();
	| and return replacing of {{ content }} from views/pages from the layout
	| 
	|
	*/
	protected function layoutContent()
	{
		ob_start();
		include_once Application::$ROOT_DIR . "/views/Layout/template.php";
		return ob_get_clean();
	}
	/*
	|--------------------------------------------------------------------------
	| make function layoutcontent
	|--------------------------------------------------------------------------
	| make an object start at and include the template from views/Layout
	| and return object clean
	| 
	|
	*/
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
