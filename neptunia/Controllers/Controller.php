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
	public function contact()
	{
		return \Neptunia\Application::$app->router->renderView("contact");
	}
}
