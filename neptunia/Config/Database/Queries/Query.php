<?php

namespace Neptunia\Config\Database\Queries;

use Neptunia\Config\Database\UserDatabase;

/**
 *
 */
class Query extends UserDatabase
{
    public function __construct()
    {
        return $this->connection = parent::__construct();
    }
    public function selectAll($argument)
    {
        $query = "SELECT * FROM ${argument}";
        $statement = $this->connection->query($query);
        $return = $statement->fetchAll(\PDO::FETCH_ASSOC);
        return $return;
    }
    public function where()
    {
    }
    public function create()
    {
    }
}
