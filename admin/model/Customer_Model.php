<?php

require_once('system/DB.php');

class Customer_Model extends DB
{
    //Customer_Model for Admin to manage Customer data
    //Working with `customer`, `customer_rank` and `person_category` tables
    public function getInfoFromCustomer(string|int $customerId)
    {
        $query = "
            SELECT 
            	cus.name,
                cus.email,
                cus.phone,
                cr.name
            FROM `customer` AS cus
            INNER JOIN customer_rank AS cr ON cr.`id` = cus.`rank_id`
            WHERE categoryID = 0 AND cus.id = '$customerId';
        ";
        $row = mysqli_query(parent::connect(), $query);
        return mysqli_fetch_all($row);
    }
    public static function countCusThisMonth()
    {
        $query = "SELECT count(*) FROM `customer`
                WHERE `customer`.time > Last_day(adddate(now(), interval -1 month));";
        $row = mysqli_query(self::connect(), $query);
        echo mysqli_fetch_all($row)[0][0];
    }
    public static function InsertIntoCustomer(string $name, string $email, string $phone): bool|\mysqli_result // Hàm add customer
    {
        $query = "INSERT INTO customer (id, name, email, phone) VALUES (NULL, '$name', '$email', '$phone')";
        return mysqli_query(self::connect(), $query);
    }
}