<?php

class Database {

    public static $connection;

    public static function setUpConnection()
    {
        if (!isset(Database::$connection)) {
            Database::$connection = new mysqli("localhost", "root", "HaskyDog12#$", "pms_db", "3306");
        }
    }

    public static function iud($q)
    {
        Database::setUpConnection();
        Database::$connection->query($q);
    }

    public static function search($q)
    {
        Database::setUpConnection();
        $resultset = Database::$connection->query($q);
        return $resultset;
    }
}

Database::setUpConnection();



// connection error checker
if (Database::$connection->connect_error) {
    die('Database connection failed! Error :' . Database::$connection->connect_error);
} else {
    // echo ("db connection successful");
}
