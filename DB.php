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
    public static function show_order(): array {
        $query = "SELECT\n"

            . "    ord.`id` AS `order id`,\n"

            . "    `time`,\n"

            . "    `cus`.`name` AS NAME,\n"

            . "    `cus`.`email` AS email,\n"

            . "    `cus`.`phone` AS phone,\n"

            . "    ser.`name` AS service,\n"

            . "    ser.`price` AS price,\n"

            . "    `address`\n"

            . "FROM\n"

            . "    `customer_order` AS ORD\n"

            . "INNER JOIN customer AS cus\n"

            . "ON\n"

            . "    cus.id = ORD.customer_id\n"

            . "INNER JOIN `service type` AS ser\n"

            . "ON\n"

            . "    ser.id = ORD.service_type_id;";
        $row = mysqli_query(self::connect(), $query);
        return mysqli_fetch_all($row);
    }
}

