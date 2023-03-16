<?php

require_once('system/DB.php');

class Order_Model extends DB
{
    //Order_Model for Admin to regulate orders from customers
    //Working with `order`, `order_state`, `service type`, `team` tables

    public static function SelectOrderByID(int $ord_id): array // Hàm tìm order theo ID rồi in ra
    {
        $query = "SELECT * FROM customer_order WHERE id = '$ord_id'";
        $row = mysqli_query(self::connect(), $query);
        return mysqli_fetch_all($row);
    }
    public static function show_order($state_id = -1): array
    {
        $query = "
            SELECT
                ord.id as id,
                ord.time AS time,
                cus.name AS customer_name,
                cus.email AS email,
                cus.phone AS phone,
                ser.name AS service,
                ser.price as price,
                ord.address AS address,
                 sta.name AS state
            FROM `customer_order` AS ORD
            INNER JOIN `customer` AS cus ON cus.id = ord.customer_id
            INNER JOIN `service type` AS ser ON ser.id = ord.service_type_id
            INNER JOIN `order_state` AS sta ON sta.id = ord.state
        ";
        if ($state_id != -1) {
            $query .= "WHERE ord.state = $state_id";
        }
        $row = mysqli_query(parent::connect(), $query);
        return mysqli_fetch_all($row);
    }
    public static function InsertIntoOrder(int $customer_id, int $service_type_id, string $address, string $comment): bool|\mysqli_result
    {
        $query = "
            INSERT INTO customer_order (customer_id, service_type_id, address, comment) 
            VALUES ('$customer_id', '$service_type_id', '$address', '$comment')
        ";
        return mysqli_query(self::connect(), $query);
    }
    public static function InsertEmployessIntoTeam(int $ord_id) // Hàm add employees vào team
    {
        $query = "
            INSERT INTO `team`(`order_id`, `employee_id`)
            SELECT
                $ord_id,
                team_1.`id`
            FROM team_1;        
        ";
        return mysqli_query(self::connect(), $query);
    }
    public static function UpdateOrderState(int $state_id, int $ord_id) // Hàm đổi state order theo yêu cầu
    {
        $query = "
            UPDATE customer_order
            SET `customer_order`.`state` = $state_id
            WHERE `customer_order`.`id` = $ord_id;
            ";
        return mysqli_query(self::connect(), $query);
    }
    public static function DeleteTeam($ord_id)
    {
        $query = "
            DELETE FROM team
            WHERE team.order_id = $ord_id;
        ";
        return mysqli_query(self::connect(), $query);
    }
    public static function DeleteOrder(int $ord_id)
    {
        $query = "
            DELETE FROM customer_order
            WHERE `customer_order`.`id` = $ord_id;
        ";
        return mysqli_query(self::connect(), $query);
    }
    public static function countNewOrder()
    {
        $query = "SELECT COUNT(*) FROM `customer_order`;";
        $row = mysqli_query(self::connect(), $query);
        echo mysqli_fetch_all($row)[0][0];
    }
}