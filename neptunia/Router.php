<?php

namespace Neptunia;

/**
 * Class Application
 * @author atheo810 <atheos810@gmail.com>
 * @package namespace App;
 *
 */
class Router
{
	public Response $response;
	public Request $request;
	protected array $routes = [];
	public function __construct(Request $request, Response $response)
	{
		$this->request = $request;
		$this->response = $response;
	}

	public function get($path, $callback)
	{
		$this->routes["get"][$path] = $callback;
	}
	public function post($path, $callback)
	{
		$this->routes["post"][$path] = $callback;
	}
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
		return call_user_func($callback);
	}
	public function renderView($view)
	{
		if ($view === "404") {
			return $this->renderOnlyView($view);
		}
		$layoutContent = $this->layoutContent();
		$viewContent = $this->renderOnlyView($view);
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
	protected function renderOnlyView($view)
	{
		ob_start();
		include_once Application::$ROOT_DIR . "/views/$view.php";
		return ob_get_clean();
	}
}
