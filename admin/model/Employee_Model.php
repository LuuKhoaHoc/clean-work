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
    public function showEmp($id = null) {
        $query = "
        SELECT emp.id, emp.name, emp.phone ,employee_rank.name as type
        FROM employees AS emp
        INNER JOIN  employee_rank ON `emp`.rank_id = employee_rank.id
    ";
        if (!empty($id)) {
            $query .= "WHERE emp.id = $id";
        }
        $row = mysqli_query(parent::connect(), $query);
        return mysqli_fetch_all($row, MYSQLI_ASSOC);
    }
    public function getEmpByName($name) {
        $query = "SELECT * FROM employees WHERE `name` = '$name'";
        return mysqli_query(parent::connect(), $query);
    }
    public function getEmpByPhone($phone) {
        $query = "SELECT * FROM employees WHERE `phone` = '$phone'";
        return mysqli_query(parent::connect(), $query);
    }
    public function updateEmp($id, $name, $phone) {
        $query = "UPDATE `employees` SET `name` = '$name', `phone` = '$phone' WHERE id = $id";
        return mysqli_query(parent::connect(), $query);
    }
    public function addEmp($name, $phone){
        $query = "INSERT INTO `employees`(`id`, `name`, `phone`) VALUES (NULL,'$name','$phone')";

        if (mysqli_num_rows(self::getEmpByName($name)) > 0) {
            return false;
        }
        else if (mysqli_num_rows(self::getEmpByPhone($phone)) > 0) {
            return false;
        } else {
            return mysqli_query(parent::connect(), $query);
        }
    }
    public function showEmpRank() {
        $query = "        
        SELECT employee_rank.id, employee_rank.name as type
        FROM employees AS emp
        INNER JOIN  employee_rank ON `emp`.rank_id = employee_rank.id
        GROUP BY type
        ";
        $row = mysqli_query(parent::connect(), $query);
        return mysqli_fetch_all($row, MYSQLI_ASSOC);
    }
    public function promoteEmp($id, $position) {
        $query = "UPDATE `employees` as emp SET emp.rank_id = '$position' WHERE id = $id";
        return mysqli_query(parent::connect(), $query);
    }
    public function demoteEmp($id) {
        $query = "UPDATE `employees` as emp SET emp.rank_id = emp.rank_id - 1 WHERE id = $id";
        return mysqli_query(parent::connect(), $query);
    }
    public function dismissedEmp($id) {
        $query = "UPDATE employees SET rank_id = 0 WHERE id = '$id'";
        return mysqli_query(parent::connect(), $query);
    }
}