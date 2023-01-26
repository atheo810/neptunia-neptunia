<?php

namespace Neptunia\Controllers;

/**
 * Class Application
 * @author atheo810 <atheos810@gmail.com>
 * @package namespace Neptunia\Controllers;
 *
 */

class Controller
{
	public function home()
	{
		$params = [
			'name' => 'Atheo'
		];
		return \Neptunia\Application::$app->router->renderView("home", $params);
	}
	public function contact()
	{
		return \Neptunia\Application::$app->router->renderView("contact");
	}
}
