<?php

require_once('system/DB.php');

class Customer_Model extends DB
{
    //CustomerManagement_Model for Customer to view their profile
    //Working with `customer`, `customer_rank` and `person_category` tables
    public function getInfoFromCustomer(string $cusEmail, $permission = 0)
    {
        $query = "
            SELECT 
                cus.id,
            	cus.name,
                cus.email,
                cus.phone,
                cr.name,
                cus.time
            FROM `customer` AS cus
            INNER JOIN customer_rank AS cr ON cr.`id` = cus.`rank_id`
            WHERE categoryID = $permission AND cus.email = '$cusEmail';
        ";
        $row = mysqli_query(parent::connect(), $query);
        return mysqli_fetch_all($row);
    }
    public function updatePassword($customerId, $newPassword) {
        
        $query = "UPDATE customer SET password = '$newPassword' WHERE customer.id = '$customerId'";
        return mysqli_query(parent::connect(), $query);
    }
    public function checkUserFromDB($email, $password) {
        $query  = "SELECT `categoryID`  FROM `customer` WHERE email = '$email' AND password = '$password'";
        $row = mysqli_query(parent::connect(),$query);
        $data = mysqli_fetch_all($row);
        if (mysqli_num_rows($row)) {
            return $data[0][0];
        }
        else {
            return null;
        }
    }

}