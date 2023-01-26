<?php

namespace Neptunia\Controllers;

use Neptunia\Application;
use Neptunia\Controller;



/**
 * Class Application
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
	public function handlercontact()
	{
		$body = Application::$app->request->getBody();
		echo "<pre>";
		var_dump($body);
		echo "<pre>";
		exit;
		return "value tersubmit";
	}
}
