<?php
require_once 'config.php';

#[AllowDynamicProperties] class DB
{
    public static function connect()
    {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if (!$conn) {
            die('Error: Connection failed ' . mysqli_error());
        }
        return $conn;
    }

    public static function slt_limit($table, int $rowNum) // Hàm select theo limit
    {
        $query = "SELECT * FROM $table LIMIT $rowNum";
        $row = mysqli_query(self::connect(), $query);
        return mysqli_fetch_all($row);
    }

    public static function customer_slt_by_email($email) // Hàm tìm customer theo email
    {
        $query = "SELECT * FROM customer WHERE email = '$email'";
        $row = mysqli_query(self::connect(), $query);
        return mysqli_fetch_array($row);
    }

    // Hàm add order mới vào db
    public static function order_insert(int $customer_id, int $service_type_id, string $address, string $comment)
    {
        $query = "
INSERT INTO customer_order (customer_id, service_type_id, address, comment) VALUES ('$customer_id', '$service_type_id', '$address', '$comment')";
        return mysqli_query(self::connect(), $query);
    }

    public static function order_selectByID(int $customer_id) // Hàm tìm order theo ID rồi in ra
    {
        $query = "SELECT * FROM customer_order WHERE id = '$customer_id'";
        $row = mysqli_query(self::connect(), $query);
        return mysqli_fetch_all($row);
    }

    public static function customer_insert(string $name, string $email, string $phone) // Hàm add customer
    {
        $query = "INSERT INTO customer (id, name, email, phone) VALUES (NULL, '$name', '$email', '$phone')";
        return mysqli_query(self::connect(), $query);
    }

    public static function changeStateOrder(int $changeNum, $csID) // Hàm đổi state order theo yêu cầu
    {
        $query = "UPDATE customer_order SET state = '$changeNum' WHERE customer_id = '$csID'";
        return mysqli_query(self::connect(), $query);
    }

    public static function changeStateEmployees($id) // Hàm đổi state employees theo yêu cầu
    {
        $query = "UPDATE employees SET is_free  = 0 WHERE id = '$id'";
        return mysqli_query(self::connect(), $query);
    }

    public static function addEmptoTeam(int $order_id, int $employee_id) // Hàm add employees vào team
    {
        $query = "INSERT INTO team (order_id, employee_id) VALUES ('$order_id', '$employee_id')";
        return mysqli_query(self::connect(), $query);
    }

    public static function show_order(): array
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
            INNER JOIN `order_state` AS sta ON sta.id = ord.state;
            ";
        $row = mysqli_query(self::connect(), $query);
        return mysqli_fetch_all($row);
    }

    public static function verifying_verified($ord_id)
    {
        $query = "
            UPDATE customer_order
            SET `customer_order`.`state` = 3
            WHERE `customer_order`.`id` = $ord_id;

            CREATE VIEW team_1 AS SELECT
                `id`
            FROM `employees`
            WHERE `employees`.`is_free` = 1
            LIMIT 3;

            INSERT INTO `team`(`order_id`, `employee_id`)
            SELECT
                $ord_id,
                team_1.`id`
            FROM team_1;

            UPDATE `employees`
            SET `employees`.`is_free` = 0
            WHERE `employees`.`id` IN(
            SELECT `id`
            FROM team_1
            );

            DROP VIEW team_1;
        ";

        echo "<pre>$query</pre>";
         mysqli_query(self::connect(), $query);
    }

    public static function verified_ongoing($ord_id)
    {
        $query = "
            UPDATE customer_order
            SET `customer_order`.`state` = 4
            WHERE `customer_order`.`id` = $ord_id;
        ";
        return mysqli_query(self::connect(), $query);
    }

    public static function ongoing_inprogress($ord_id)
    {
        $query = "
            UPDATE customer_order
            SET `customer_order`.`state` = 5
            WHERE `customer_order`.`id` = $ord_id;
        ";
        return mysqli_query(self::connect(), $query);
    }

    public static function inprogress_completed($ord_id)
    {
        $query = "
            UPDATE customer_order
            SET `customer_order`.`state` = 6
            WHERE `customer_order`.`id` = $ord_id;

            UPDATE employees
            SET `employees`.`is_free` = 1
            WHERE employees.id IN (SELECT `team`.`employee_id` FROM team WHERE team.order_id = $ord_id);

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
                0
            FROM customer_order AS ORD
            INNER JOIN(
                SELECT
                    `team`.`order_id`,
                    GROUP_CONCAT(`team`.`employee_id`) AS employee_list
                FROM `team`
                GROUP BY order_id
            ) AS team
            ON ORD.id = team.`order_id`
            WHERE ORD.id = $ord_id;

            DELETE FROM team
            WHERE team.order_id = $ord_id;
        ";
        return mysqli_query(self::connect(), $query);
    }

    public static function completed_finished($ord_id)
    {
        $query = "
            UPDATE `order_history`
            SET `order_history`.`result` = 1
            WHERE `order_history`.`id` = $ord_id;

            DELETE FROM customer_order
            WHERE `customer_order`.`id` = $ord_id;
        ";
        return mysqli_query(self::connect(), $query);
    }

    public static function disproved($ord_id) {
        $query = "
            UPDATE employees
            SET `employees`.`is_free` = 1
            WHERE employees.id IN (SELECT `team`.`employee_id` FROM team WHERE team.order_id = $ord_id);

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
                -1
            FROM
                customer_order AS ORD
            INNER JOIN(
                SELECT
                    `team`.`order_id`,
                    GROUP_CONCAT(`team`.`employee_id`) AS employee_list
                FROM `team`
                GROUP BY order_id
            ) AS team
                ON ORD.id = team.`order_id`
            WHERE ORD.id = $ord_id;

            DELETE FROM team
            WHERE team.order_id = $ord_id;

            DELETE FROM customer_order
            WHERE `customer_order`.`id` = $ord_id;
        ";
        echo "<pre>$query</pre>";
//        return mysqli_query(self::connect(), $query);
    }
}

