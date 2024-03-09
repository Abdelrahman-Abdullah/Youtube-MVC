<?php

namespace core;
require_once "../config/database.php";
/**
 * Database class
 * Connect to the database
*/
class Database
{
    protected static $instance = null;
    /**
     * Connect to the database
     * Create a new connection if it doesn't exist
     * @return \PDO
    */
    public static function connect(): ?\PDO
    {
        if (is_null(self::$instance)){
            try {
                self::$instance = new \PDO("mysql:host=".HOST.";dbname=".DBNAME, USER, PASS);
                self::$instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            }catch (\PDOException $e) {
                die("Error: ".$e->getMessage());
            }
        }
        return self::$instance;
    }

}