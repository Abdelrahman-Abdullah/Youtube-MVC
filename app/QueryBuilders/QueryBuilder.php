<?php

namespace app\QueryBuilders;

use core\Database;

/**
 * QueryBuilder class to handle all database queries

*/
class QueryBuilder
{
    protected $connection;

    /**
     * QueryBuilder constructor.
     *
     * Create a new instance of the Database class
    */
    public function __construct()
    {
        $this->connection = Database::connect();
    }

    /**
     * Get all records from a table
     *
    */
    public function getAll($table)
    {
        $sql = "SELECT * FROM {$table}";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}