<?php

require_once('system/DB.php');

class Content_Model extends DB {
    //Content_Model for Customer to view changable text on UI
    //working with `content_manager` table
//    public function getDataFromPage(string $page) {
//        $query = "
//        SELECT title, content FROM `content_manager` WHERE page = '$page';
//        ";
//        $row = mysqli_query(parent::connect(), $query);
//        return mysqli_fetch_all($row);
//    }
    public function getSerFromDB(string $service) {
        $query = "SELECT * FROM `service type` as ser WHERE ser.name = '$service'" ;
        $row = mysqli_query(parent::connect(),$query);
        return mysqli_fetch_assoc($row);
    }
        public function showOrder($email): array
    {
        $query = "
            SELECT
                row_number() over (order by email) as id,
                ord.time AS time,
                cus.name AS customer_name,
                cus.email AS email,
                cus.phone AS phone,
                ser.name AS service,
                ser.price as price,
                ord.address AS address,
                sta.name AS state
            FROM `customer_order` AS ord
            INNER JOIN `customer` AS cus ON cus.id = ord.customer_id
            INNER JOIN `service type` AS ser ON ser.id = ord.service_type_id
            INNER JOIN `order_state` AS sta ON sta.id = ord.state
            WHERE cus.email = '$email'
        ";
        $row = mysqli_query(parent::connect(), $query);
        return mysqli_fetch_assoc($row);
    }
}