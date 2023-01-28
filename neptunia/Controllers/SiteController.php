<?php

namespace Neptunia\Controllers;

use Neptunia\Application;
use Neptunia\Controller;
use Neptunia\Request;

/**
 * Class SiteController
 * @author atheo810 <atheos810@gmail.com>
 * @package namespace Neptunia\Controllers;
 *
 */

class SiteController extends Controller
{
	public function home()
	{
		$params = [
			'name' => 'Atheo'
		];
		return $this->render("home", $params);
	}
	public function contact()
	{
		return \Neptunia\Application::$app->router->renderView("contact");
	}
	public function handlercontact(Request $request)
	{
		$body = $request->getBody();
		return print_r($body);
	}
}
