<?php

require_once('system/DB.php');

class Customer_Model extends DB
{
    //Customer_Model for Customer to view their profile
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
    public function updatePassword($customerId, $newPassword) {
        
        $query = "UPDATE customer SET password = '$newPassword' WHERE customer = '$customerId'";
        return mysqli_query(DB::connect(), $query);
    }
}