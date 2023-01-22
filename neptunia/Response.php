<?php

namespace Neptunia;

/**
 * Class Application
 * @author atheo810 <atheos810@gmail.com>
 * @package namespace Neptunia;
 *
 */

class Response
{
	public function setStatusCode(int $code)
	{
		http_response_code($code);
	}
	/*
	|--------------------------------------------------------------------------
	| setStatusCode
	|--------------------------------------------------------------------------
	| declare http response code in the browser, us can see this at developer
	| option Network
	| 
	|
	*/
}

?>
