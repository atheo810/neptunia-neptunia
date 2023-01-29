<?php

namespace Neptunia\App;

class Controller
{
    public string $layout = "main";
    // make string for layout template
    public function SetLayout($layout)
    {
        $this->layout = $layout;
        //   set layout from $layout
    }
    public function Render($view, $params = [])
    {
        return Application::$app->router->RenderView($view, $params);
        //   run function Application::$app->rotuer->RenderView()
    }
    // run render function with parameter $view, and $params[] for array / values

}
