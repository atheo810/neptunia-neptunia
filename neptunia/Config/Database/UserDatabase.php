<?php

namespace Neptunia\Config\Database;

/**
 *
 */
class UserDatabase
{
    public function __construct()
    {
        return new \PDO('mysql:host=localhost;dbname=belajarsql', "root", "");
    }
}
