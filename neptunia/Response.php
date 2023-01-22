<?php

namespace Neptunia;

/**
 * summary
 */
class Response
{
	/**
	 * summary
	 */
	public function setStatusCode(int $code)
	{
		http_response_code($code);
	}
}

?>
