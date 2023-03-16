<?php

require_once('system/DB.php');

class History_Model extends DB
{
    //History_Model for Admin to store data of the past orders
    //Working with `order_history`, `history_result` tables

    public static function InsertIntoHistory($ord_id, int $result)
    {
        $query = 
            "INSERT INTO order_history(
                `id`,
                `start`,
                `customer_id`,
                `service_type_id`,
                `address`,
                `comment`,
                `employee_list`,
                `result`
            )
            SELECT
                ORD.id AS id,
                ORD.time AS START,
                ORD.customer_id,
                ORD.service_type_id,
                ORD.address,
                ORD.comment,
                team.employee_list,
                $result
            FROM customer_order AS ORD
            LEFT JOIN (
                SELECT
                    `team`.`order_id`,
                    GROUP_CONCAT(`team`.`employee_id`) AS employee_list
                FROM `team`
                GROUP BY order_id
            ) AS team
            ON ORD.id = team.`order_id`
            WHERE ORD.id = $ord_id;";
        return mysqli_query(parent::connect(), $query);
    }
    public static function UpdateHistoryResult(int $result_id, int $ord_id)
    {
        $query = "
            UPDATE `order_history`
            SET `order_history`.`result` = $result_id
            WHERE `order_history`.`id` = $ord_id;
        ";
        return mysqli_query(parent::connect(), $query);
    }
    public static function earnThisMonth()
    {
        $query = "SELECT SUM(ser.price)
            FROM order_history AS ord
            INNER JOIN `service type` AS ser ON ser.id = ord.service_type_id
            WHERE result > 0 AND month(end) = month(now());";
        $row = mysqli_query(parent::connect(), $query);
        echo '$' . mysqli_fetch_all($row)[0][0];
    }
    public static function totalOrders()
    {
        $query = "SELECT COUNT(*) FROM `order_history` WHERE result > 0;";
        $row = mysqli_query(parent::connect(), $query);
        echo mysqli_fetch_all($row)[0][0];
    }

    public static function totalMoney()
    {
        $query = "SELECT SUM(ser.price)
            FROM `order_history` AS ORD
            INNER JOIN `service type` AS ser ON ser.id = ORD.service_type_id
            WHERE ord.result > 0;";
        $row = mysqli_query(DB::connect(), $query);
        echo mysqli_fetch_all($row)[0][0];
    }

    public static function monthWithMoney()
    {
        $query = "SELECT MONTH(ORD.`end`) as MONTH, SUM(ser.price) as Money
        FROM `order_history` AS ORD INNER JOIN `service type` AS ser ON ser.id = ORD.service_type_id
        WHERE ORD.result > 0 GROUP BY MONTH ORDER BY MONTH;";
        $row = mysqli_query(DB::connect(), $query);
        return mysqli_fetch_all($row);
    }
}