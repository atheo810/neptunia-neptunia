<?php

namespace Neptunia\Config\Database;

/**
 *
 */
class UserDatabase
{
    public function __construct()
    {
        return $connection = new \PDO(
            $_ENV['DB_CONNECTION'] .
            ":host=" . $_ENV['DB_HOST'].
            ";dbname=" . $_ENV['DB_DATABASE'],
            $_ENV['DB_USERNAME'],
            $_ENV['DB_PASSWORD']
        );
    }
}
