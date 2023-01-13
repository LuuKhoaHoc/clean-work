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
        $query = "SELECT * FROM $table LIMIT $rowNum";
        $row = mysqli_query(self::connect(), $query);
        return mysqli_fetch_all($row);
    }

    public static function customer_slt_by_email($email)
    {
        $query = "SELECT * FROM customer WHERE email = '$email'";
        $row = mysqli_query(self::connect(), $query);
        return mysqli_fetch_array($row);
    }

    public static function order_insert(int $customer_id, int $service_type_id, string $address, string $comment)
    {
        $query = "
INSERT INTO customer_order (customer_id, service_type_id, address, comment) VALUES ('$customer_id', '$service_type_id', '$address', '$comment')";
        echo $query;
        return mysqli_query(self::connect(), $query);
    }

    public static function order_selectByID(int $customer_id)
    {
        $query = "SELECT * FROM customer_order WHERE id = '$customer_id'";
        $row = mysqli_query(self::connect(), $query);
        return mysqli_fetch_all($row);
    }

    public static function customer_insert(string $name, string $email, string $phone)
    {
        $query = "INSERT INTO customer (id, name, email, phone) VALUES (NULL, '$name', '$email', '$phone')";
        return mysqli_query(self::connect(), $query);
    }
}

