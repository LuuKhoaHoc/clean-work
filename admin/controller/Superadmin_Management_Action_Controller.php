<?php
require_once "admin/controller/Superadmin_Display_Content_Controller.php";
class Superadmin_Management_Action_Controller extends Superadmin_Display_Content_Controller
{
    public function checkInput($data) {
        return htmlspecialchars(stripslashes(trim($data)));
    }
    public function updateEmpProfile() {
        $model = new Employee_Model();
        $emp = $model->showEmp($_GET['id']);
        $name = self::checkInput($_POST['name']);
        $phone = self::checkInput($_POST['phone']);
        $model->updateEmp($emp[0]['id'], $name, $phone);
        self::showEmp();
    }
    public function addEmp() {
        $model = new Employee_Model();
        $name = self::checkInput($_POST['name']);
        $phone = self::checkInput($_POST['phone']);
        if (empty($name) && empty($phone)) {
            global $errMsg;
            $errMsg = "Không được để trống thông tin";
            parent::showAddEmp();
            return false;
        }
        $result = $model->addEmp($name, $phone);
        if ($result === false) {
            global $errMsg;
            $errMsg = "Employee had been existed";
            parent::showAddEmp();
        } else {
        $model->addEmp($_POST['name'], $_POST['phone']);
        self::showEmp();
        }
    }
    
    public function upgradeRankEmp()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action'])) {
            $model = new Employee_Model();
            $action = $_POST['action'];
            $selectedIds = $_POST['selected'];
            $position = $_POST['position'];
            if ($action == "promote") {
                foreach ($selectedIds as $id) {
                    $employee = $model->showEmp($id);
                    if ($employee) {
                        $model->promoteEmp($id, $position);
                    }
                }
            } elseif ($action == "demote") {
                foreach ($selectedIds as $id) {
                    $employee = $model->showEmp($id);
                    if ($employee) {
                        $model->demoteEmp($id);
                    }
                }
            } elseif ($action == "dismissed") {
                foreach ($selectedIds as $id) {
                    $employee = $model->showEmp($id);
                    if ($employee) {
                        $model->dismissedEmp($id);
                    }
                }
            }
            parent::showEmp();
        }
    }
}