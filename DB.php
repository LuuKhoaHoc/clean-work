<?php
require_once 'config.php';

#[AllowDynamicProperties] class DB
{
    public static function connect()
    {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if (!$conn) {
            die('Error: Connection failed ' . mysqli_error());
        }
        return $conn;
    }

    public static function Order_top(int $rowNum) {

    }

    public static function Order_insert(int $customer_id, int $service_type_id, string $address) {

    }

    public static function Order_selectByID(int $customer_id) {
        
    }
}

