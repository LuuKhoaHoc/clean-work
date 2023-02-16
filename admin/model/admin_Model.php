<?php
require 'system/DB.php';
class admin_Model extends \Administrator\CleanWork\system\DB
{
    public static function disproved($ord_id): void
    {
        parent::UpdateEmployeeStateToFreeFromTeam($ord_id);

        parent::InsertIntoHistory($ord_id, -1);

        parent::DeleteTeam($ord_id);

        parent::DeleteOrder($ord_id);
    }

    public static function verifying_verified($ord_id): void
    {
        parent::UpdateOrderState(3, $ord_id);

        parent::chooseEmployeesIntoView(3);

        parent::InsertEmployessIntoTeam($ord_id);

        parent::UpdateEmployeeStateToBusyFromView();

        $query = "DROP VIEW team_1;";
        mysqli_query(parent::connect(), $query);

    }

    public static function verified_ontheway($ord_id): void
    {
        parent::UpdateOrderState(4, $ord_id);
    }

    public static function ontheway_inprogress($ord_id): void
    {
        parent::UpdateOrderState(5, $ord_id);
    }

    public static function inprogress_finished($ord_id): void
    {
        parent::UpdateOrderState(6, $ord_id);

        parent::UpdateEmployeeStateToFreeFromTeam($ord_id);

        parent::InsertIntoHistory($ord_id, 0);

        parent::DeleteTeam($ord_id);
    }

    public static function finished_ended($ord_id): void
    {
        parent::UpdateHistoryResult(1, $ord_id);

        parent::DeleteOrder($ord_id);
    }


    static function show_order($state_id = -1): array
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
}