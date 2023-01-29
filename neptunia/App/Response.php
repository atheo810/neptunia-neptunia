<?php

namespace Neptunia\App;

/**
 * Class Application
 * @author atheo810 <atheos810@gmail.com>
 * @package namespace Neptunia\App;
 *
 */
class Response
{
    public function SetStatusCode(int $code)
    {
        http_response_code($code);
        // set status code depending on $code
    }
}
