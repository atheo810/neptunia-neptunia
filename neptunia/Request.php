<?php

namespace Neptunia;

/**
 * Class Application
 * @author atheo810 <atheos810@gmail.com>
 * @package namespace Neptunia;
 *
 */

class Request
{
	public function getPath()
	{
		$path = $_SERVER["REQUEST_URI"] ?? "/";
		$position = strpos($path, "?");
		if ($position === false) {
			return $path;
		}
		return substr($path, 0, $position);
	}
	/*
	|-----------------------------------------------------------------------------
	| getPath
	|-----------------------------------------------------------------------------
	| declare $_SERVER["REQUEST_URI"] if false retuning value "/"
	| declare position = strpos($path, "?"); coutin posistion of URI from "?"
	| if $position === false returning variable from $path
	| return substr($path, 0, $position); printing the URI from position of "?"
	*/

	public function getMethod()
	{
		return strtolower($_SERVER["REQUEST_METHOD"]);
	}
	/*
	|--------------------------------------------------------------------------
	| getMethod
	|--------------------------------------------------------------------------
	| returnin lower string of variable $_SERVER["REQUEST_METHOD"]
	| 
	|
	*/
	public function getBody()
	{
		$body = [];
		if ($this->getMethod() === 'get') {
			foreach ($_GET as $key => $value) {
				$body[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
			}
		}
		if ($this->getMethod() === 'post') {
			foreach ($_POST as $key => $value) {
				$body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
			}
		}

		return $body;
	}
}
