<?php

namespace Neptunia\Config\Database;

/**
 *
 */
class UserDatabase
{
    public function __construct()
    {
        return $connection = new \PDO('mysql:host=127.0.0.1;dbname=belajarsql', "root", "");
    }
}
