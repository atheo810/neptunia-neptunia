<?php

namespace Neptunia;

/**
 * Class Request
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

	public function method()
	{
		return strtolower($_SERVER["REQUEST_METHOD"]);
	}

	/*
	|--------------------------------------------------------------------------
	| method
	|--------------------------------------------------------------------------
	| returnin lower string of variable $_SERVER["REQUEST_METHOD"]
	| 
	|
	*/
	public function isGet()
	{
		return $this->method() === 'get';
	}
	/*
	|--------------------------------------------------------------------------
	| isGet
	|--------------------------------------------------------------------------
	| returning the values if the method() equals to get
	| 
	|
	*/
	public function isPost()
	{
		return $this->method() === 'post';
	}
	/*
	|--------------------------------------------------------------------------
	| isPost
	|--------------------------------------------------------------------------
	| returning the values if the method() equals to post
	| 
	|
	*/
	public function getBody()
	{
		$body = [];
		if ($this->method() === 'get') {
			foreach ($_GET as $key => $value) {
				$body[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
			}
		}
		if ($this->method() === 'post') {
			foreach ($_POST as $key => $value) {
				$body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
			}
		}
		return $body;
	}
	/*
	|--------------------------------------------------------------------------
	| getBody
	|--------------------------------------------------------------------------
	| make store arrays in variable $body
	| check if methoc() equals to get, and loop foreach values and filter 
	| sanitize, the same things goes on for post
	| 
	|
	*/
}
