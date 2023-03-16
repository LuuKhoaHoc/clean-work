<?php

require_once('system/config.php');

class DB
{
    public static function connect(): \mysqli
    {
        $conn = new \mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if (!$conn) {
            die('Error: Connection failed ' . mysqli_error());
        }
        return $conn;
    }
}