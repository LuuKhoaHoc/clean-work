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

    public function confirmOrder(int $id, int $numState = 3)
    {
        if (isset($_POST["submit"])) {
            DB::changeStateOrder($id, $numState);
        }
        // TODO: Cần hỏi -customer_id lấy đâu ra để thay đổi state đây, chưa hình dung rõ lắm về cái này
        // Thay đổi state trong order_state table
        // Hàm này chạy lúc bấm nút confirm trong danh sách Order trên admin page
    }

    public function receiveCleaningTeam()
    {
        // TODO: Implement receiveCleaningTeam() method.
        // Chuyen state cua Order thành 6 ( complete )
        // Chuyen state cua employees thanh 1 ( is_free )

    }

//    public function receivePayment()
//    {
//        // TODO: Implement receivePayment() method.
//        // Chuyen state cua Order thành 7 ( finshed )
//
//    }

    public function dispatchCleaningTeam(int $order_id, int $empNeeded)
    {
        // State nhan vien thanh busy
        // Them employees_id vao 'team-table'
        // chuyen state cua Order đó thành 4 ( on-going )

    }
}