<?php
require_once 'config.php';

class DB
{
    public static function connect()
    {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if (!$conn) {
            die('Error: Connection failed ' . mysqli_error());
        }
        return $conn;
    }


    public static function SelectWithLimit($table, int $rowNum) // Hàm select theo limit
    {
        $query = "SELECT * FROM $table LIMIT $rowNum";
        $row = mysqli_query(self::connect(), $query);
        return mysqli_fetch_all($row);
    }

    public static function SelectCustomerByEmail($email) // Hàm tìm customer theo email
    {
        $query = "SELECT * FROM customer WHERE email = '$email'";
        $row = mysqli_query(self::connect(), $query);
        return mysqli_fetch_array($row);
    }

    public static function SelectOrderByID(int $ord_id) // Hàm tìm order theo ID rồi in ra
    {
        $query = "SELECT * FROM customer_order WHERE id = '$ord_id'";
        $row = mysqli_query(self::connect(), $query);
        return mysqli_fetch_all($row);
    }


    public static function chooseEmployeesIntoView(int $manpower)
    {
        $query = "
            CREATE VIEW team_1 AS 
            SELECT `id`
            FROM `employees`
            WHERE `employees`.`is_free` = 1
            LIMIT $manpower;        
        ";
        return mysqli_query(self::connect(), $query);
    }

    // Hàm add order mới vào db
    public static function InsertIntoOrder(int $customer_id, int $service_type_id, string $address, string $comment)
    {
        $query = "
            INSERT INTO customer_order (customer_id, service_type_id, address, comment) 
            VALUES ('$customer_id', '$service_type_id', '$address', '$comment')
        ";
        return mysqli_query(self::connect(), $query);
    }

    public static function InsertIntoCustomer(string $name, string $email, string $phone) // Hàm add customer
    {
        $query = "INSERT INTO customer (id, name, email, phone) VALUES (NULL, '$name', '$email', '$phone')";
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

    public static function InsertIntoHistory($ord_id, int $result)
    {
        $query = "
            INSERT INTO order_history(
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
            WHERE ORD.id = $ord_id;
        ";
        return mysqli_query(self::connect(), $query);
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
        return mysqli_query(self::connect(), $query);
    }

    public static function UpdateHistoryResult(int $result_id, int $ord_id)
    {
        $query = "
            UPDATE `order_history`
            SET `order_history`.`result` = $result_id
            WHERE `order_history`.`id` = $ord_id;
        ";
        return mysqli_query(self::connect(), $query);
    }

    public static function UpdateEmployeeStateToFreeFromTeam(int $ord_id)
    {
        $query = "
            UPDATE employees
            SET `employees`.`is_free` = 1
            WHERE employees.id IN (SELECT `team`.`employee_id` FROM team WHERE team.order_id = $ord_id);
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


    public static function DeleteOrder(int $ord_id)
    {
        $query = "
            DELETE FROM customer_order
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
        if ($state_id != -1) $query .= "WHERE ord.state = $state_id";
        $row = mysqli_query(self::connect(), $query);
        return mysqli_fetch_all($row);
    }

    public static function verifying_verified($ord_id)
    {
        self::UpdateOrderState(3, $ord_id);

        self::chooseEmployeesIntoView(3);

        self::InsertEmployessIntoTeam($ord_id);

        self::UpdateEmployeeStateToBusyFromView();

        $query = "DROP VIEW team_1;";
        mysqli_query(self::connect(), $query);

    }

    public static function verified_ongoing($ord_id)
    {
        self::UpdateOrderState(4, $ord_id);
    }

    public static function ongoing_inprogress($ord_id)
    {
        self::UpdateOrderState(5, $ord_id);
    }

    public static function inprogress_completed($ord_id)
    {
        self::UpdateOrderState(6, $ord_id);

        self::UpdateEmployeeStateToFreeFromTeam($ord_id);

        self::InsertIntoHistory($ord_id, 0);

        self::DeleteTeam($ord_id);
    }

    public static function completed_finished($ord_id)
    {
        self::UpdateHistoryResult(1, $ord_id);

        self::DeleteOrder($ord_id);
    }

    public static function disproved($ord_id)
    {
        self::UpdateEmployeeStateToFreeFromTeam($ord_id);

        self::InsertIntoHistory($ord_id, -1);

        self::DeleteTeam($ord_id);

        self::DeleteOrder($ord_id);
    }
}

