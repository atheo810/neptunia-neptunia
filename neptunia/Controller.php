<?php

namespace Neptunia;

/**
 * Class Controller
 * @author atheo810 <atheos810@gmail.com>
 * @package namespace Neptunia;
 *
 */
class Controller
{
    public string $layout = 'template';
    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public function render($view, $params = [])
    {
        return Application::$app->router->renderView($view, $params);
    }
}
