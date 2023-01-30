<?php

namespace Neptunia\App;

/**
 * Class Request
 * @author atheo810 <atheos810@gmail.com>
 * @package namespace Neptunia\App;
 *
 */

class Request
{
    public function GetPath()
    {
        $path = $_SERVER["REQUEST_URI"] ?? "/";
        // get Request URI from Globar scope
        $position = strpos($path, "?");
        // check if position from URI to "?" (php Request Get)
        if ($position === false) {
            return $path;
            // return the URI
        }
        // check if URI false or not
        return substr($path, 0, $position);
        // returning URI String to the position "?
    }
    public function Method()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
        // return Method with lowercase
    }
    public function IsGet()
    {
        return $this->Method() === 'get';
        // return Method if equals to "get"
    }
    public function IsPost()
    {
        return $this->Method() === 'post';
        // return Method if equals to "post"

    }
    public function GetBody()
    {
        $body = [];
        // make variable to store array
        if ($this->Method() === 'get') {
            // check if Method is get
            foreach ($_GET as $key => $value) {
                // store data $_GET to $key with the $value
                $body[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
                // store data $key to $body and filter input, using sanitize sepcial char
            }
        }
        if ($this->Method() === 'post') {
            // check if Method is post
            foreach ($_POST as $key => $value) {
                // store data $_POST to $key with the $value
                $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
                // store data $key to $body and filter input, using sanitize sepcial char
            }
        }

        return $body;
        // return the stored data inside the $body
    }
}
