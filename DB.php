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

    public static function slt_top($table, int $rowNum)
    {
        $query = 'SELECT TOP ' . $rowNum . ' * FROM ' . $table . ';';
        $row = mysqli_query(self::connect(), $query);
    }

    public static function order_insert(int $customer_id, int $service_type_id, string $address)
    {
        $query = "
INSERT INTO customer_order (customer_id, service_type_id, address) VALUES ($customer_id, $service_type_id, $address)";
        $row = mysqli_query(self::connect(), $query);
    }

    public static function order_selectByID(int $customer_id)
    {
        $query = "SELECT * FROM customer_order WHERE id = $customer_id";
        $row = mysqli_query(self::connect(), $query);

    }
}

