<?php
require_once "interfaces.php";
require_once "DB.php";

use clean_work_design\IManager;

class Manager
{
    protected function chooseEmployees(int $empNeeded)
    {
        $conn = DB::connect();
        $query = "SELECT * FROM employees ";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Error :" . mysqli_error());
        } else {
            $row = mysqli_fetch_all($result);
        }
        return $row;
    }

    public function receiveOrder(string $name, string $email, string $phone, string $address, int $sti, string $cmt)
    {
        if (empty(DB::customer_slt_by_email($email))) {
            DB::customer_insert($name,$email,$phone);
        }
        $cs = DB::customer_slt_by_email($email);
        DB::order_insert($cs["id"],$sti, $address, $cmt);
    }

    public function callCustomer()
    {
        // TODO: Implement callCustomer() method.
    }

    public function receiveCleaningTeam()
    {
        // TODO: Implement receiveCleaningTeam() method.
    }

    public function receivePayment()
    {
        // TODO: Implement receivePayment() method.
    }

    public function dispatchCleaningTeam(int $empNeeded)
    {
        // TODO: Implement dispatchCleaningTeam() method.
    }
}