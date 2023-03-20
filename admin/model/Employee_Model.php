<?php

require_once('system/DB.php');

class Employee_Model extends DB {
    //Employee_Model for Admin to manage employees
    //Working with `employees`, `employee_rank` tables

    public static function chooseEmployeesIntoView(int $manpower)
    {
        $query = "CREATE VIEW team_1 AS 
            SELECT `id`
            FROM `employees`
            WHERE `employees`.`is_free` = 1
            LIMIT $manpower;        
        ";
        return mysqli_query(parent::connect(), $query);
    }
    public static function UpdateEmployeeStateToBusyFromView() // Hàm đổi state employees theo yêu cầu
    {
        $query = "
            UPDATE `employees`
            SET `employees`.`is_free` = 0
            WHERE `employees`.`id` IN(
            SELECT `id`
            FROM team_1
            );        
        ";
        return mysqli_query(parent::connect(), $query);
    }
    public static function UpdateEmployeeStateToFreeFromTeam(int $ord_id)
    {
        $query = "
            UPDATE employees
            SET `employees`.`is_free` = 1
            WHERE employees.id IN (SELECT `team`.`employee_id` FROM team WHERE team.order_id = $ord_id);
        ";
        return mysqli_query(parent::connect(), $query);
    }
}