<?php

namespace Neptunia;

class Controller
{
    public string $layout = 'main';
    public function setLayout($layout)
    {
    }

    public function render($view, $params = [])
    {
        return Application::$app->router->renderView($view, $params);
    }
}
