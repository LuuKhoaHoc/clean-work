<?php

require_once('system/DB.php');

class Customer_Management_Model extends DB
{
    //CustomerManagement_Model for Admin to manage Customer data
    //Working with `customer`, `customer_rank` and `person_category` tables
    public function getAdminInfoFromCustomer(string $cusEmail, $permission = 1)
    {
        $query = "
            SELECT 
                cus.id,
            	cus.name,
                cus.email,
                cus.phone,
                pc.type,
                cus.time
            FROM `customer` AS cus
            INNER JOIN `person_category` AS pc ON pc.`id` = cus.`categoryID`
            WHERE categoryID = $permission AND cus.email = '$cusEmail';
        ";
        $row = mysqli_query(parent::connect(), $query);
        return mysqli_fetch_assoc($row);
    }
    public static function countCusThisMonth() // Ham đếm cus mới của tháng
    {
        $query = "SELECT count(*) FROM `customer`
                WHERE `customer`.time > Last_day(adddate(now(), interval -1 month));";
        $row = mysqli_query(self::connect(), $query);
        return mysqli_fetch_all($row)[0][0];
    }
    public static function InsertIntoCustomer(string $name, string $email, string $phone): bool|\mysqli_result // Hàm add customer
    {
        $query = "INSERT INTO customer (`id`, `name`, `email`, `phone`) VALUES (NULL, '$name', '$email', '$phone')";
        return mysqli_query(self::connect(), $query);
    }
    public function showCustomer() {
        $query = "SELECT id, name, email, phone, time FROM customer";
        $row = mysqli_query(parent::connect(), $query);
        return mysqli_fetch_all($row, MYSQLI_ASSOC);
    }
}