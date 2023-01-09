<?php

use clean_work_design\ManagerAbstractClass;

class Manager extends ManagerAbstractClass {
    protected function chooseEmployees(int $empNeeded)
    {
        $conn = DB::connect();
        $query = "SELECT * FROM employees ";
        $result = mysqli_query($conn,$query);
        if (!$result) {
            die("Error :" . mysqli_error());
        } else {
            $row = mysqli_fetch_all($result);
        }
        return $row;
    }

    public function receiveOrder()
    {
        // TODO: Implement receiveOrder() method.
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
}