<?php

namespace Neptunia\App;

/**
 * Class Router
 * @author atheo810 <atheos810@gmail.com>
 * @package namespace Neptunia\App;
 *
 */
class Router
{
    public Response $response;
    // making instance of Response
    public Request $request;
    // making instance of Request
    protected array $routes = [];
    // making protected array for URI
    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }
    /*
	|--------------------------------------------------------------------------
	| make function Construct for class Router
	|--------------------------------------------------------------------------
	| this construct will define $request, and $response as new Instance
	|
	*/
    public function Get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }
    /*
	|--------------------------------------------------------------------------
	| make function get 
	|--------------------------------------------------------------------------
	| get function will strore the value of URI from our Framework
	|
	*/
    public function Post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }
    /*
	|--------------------------------------------------------------------------
	| make function Post 
	|--------------------------------------------------------------------------
	| post function will strore the value of URI from our Framework
	|
	*/
    public function Resolve()
    {
        $path = $this->request->GetPath();
        // call path from function GetPath() class Request
        $method = $this->request->Method();
        // call method from function Method() class Request
        $callback = $this->routes[$method][$path] ?? false;
        // check if URI from user match the URI framework

        if ($callback === false) {
            $this->response->SetStatusCode(404);
            // make statement status code in web 404
            return $this->RenderView("404");
            // return view 404 to user's
        }
        // check $callback if it's false 
        if (is_string($callback)) {
            return $this->RenderView($callback);
            // return View $callback to user's
        }
        // check $callback if it's String
        if (is_array($callback)) {
            Application::$app->controller = new $callback[0]();
            // make new instance $callback and send it to Application::$app->controller;
            $callback[0] = Application::$app->controller;
            // input value Application::$app->controller to $callback[0]
        }
        // check $callback if it's $callback is array
        return call_user_func($callback, $this->request);
    }
    public function RenderView($view, $params = [])
    {
        if ($view === "404") {
            return $this->RenderOnlyView($view, $params);
        }
        // if view 404 return spesific view to user's
        $layoutcontent = $this->LayoutContent();
        $viewcontent = $this->RenderOnlyView($view, $params);
        return str_replace("{{content}}", $viewcontent, $layoutcontent);
    }
    public function RenderContent($viewContent)
    {
        $layoutContent = $this->LayoutContent();
        return str_replace("{{content}}", $viewContent, $layoutContent);
    }
    // function to render view to user's
    protected function LayoutContent()
    {
        $layout = Application::$app->controller->layout;
        // make layout from the instance of Application::$app->controller->layout
        ob_start();
        // start Object record
        include_once Application::$ROOT_DIR . "/views/Layout/$layout.php";
        // include the Layout
        return ob_get_clean();
        // return object after output buffer
    }

    protected function renderOnlyView($view, $params)
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }
        // set $params to keys with values
        ob_start();
        // start Object record
        include_once Application::$ROOT_DIR . "/views/Pages/$view.php";
        // include the Pages
        return ob_get_clean();
        // return object after output buffer
    }
}
