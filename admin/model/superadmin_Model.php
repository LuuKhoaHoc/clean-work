<?php
require 'admin_Model.php';
class superadmin_Model extends admin_Model
{
    public static function countNewOrder()
    {
        $query = "SELECT COUNT(*) FROM `customer_order`;";
        $row = mysqli_query(self::connect(), $query);
        return mysqli_fetch_all($row)[0][0];
    }

    public static function earnThisMonth(): string
    {
        $query = "SELECT SUM(ser.price)
            FROM order_history AS ord
            INNER JOIN `service type` AS ser ON ser.id = ord.service_type_id
            WHERE result > 0 AND month(end) = month(now());";
        $row = mysqli_query(self::connect(), $query);
        $result = mysqli_fetch_all($row)[0][0];
        if ($result == "") {
            return '$ 0';
        } else {
            return '$' . $result;
        }
    }

    public static function countCusThisMonth()
    {
        $query = "SELECT count(*) FROM `customer`
                WHERE `customer`.time > Last_day(adddate(now(), interval -1 month));";
        $row = mysqli_query(self::connect(), $query);
        return mysqli_fetch_all($row)[0][0];
    }

    public static function totalOrders()
    {
        $query = "SELECT COUNT(*) FROM `order_history` WHERE result > 0;";
        $row = mysqli_query(self::connect(), $query);
        return mysqli_fetch_all($row)[0][0];
    }

    public static function totalMoney()
    {
        $query = "SELECT SUM(ser.price)
            FROM `order_history` AS ORD
            INNER JOIN `service type` AS ser ON ser.id = ORD.service_type_id
            WHERE ord.result > 0;";
        $row = mysqli_query(parent::connect(), $query);
        return '$ ' . mysqli_fetch_all($row)[0][0];
    }

    public static function monthWithMoney()
    {
        $query = "
        SELECT MONTH(ORD.`end`) as MONTH, SUM(ser.price) as Money
        FROM `order_history` AS ORD INNER JOIN `service type` AS ser ON ser.id = ORD.service_type_id
        WHERE ORD.result > 0 GROUP BY MONTH ORDER BY MONTH;";
        $row = mysqli_query(parent::connect(), $query);
        return mysqli_fetch_all($row);
    }

    public static function showEmp()
    {
        $query = "
        SELECT emp.id, emp.name, emp.phone, employee_rank.name
        FROM employees AS emp
        INNER JOIN  employee_rank ON `emp`.rank_id = employee_rank.id;
    ";
        $row = mysqli_query(parent::connect(), $query);
        return mysqli_fetch_all($row);
    }
}