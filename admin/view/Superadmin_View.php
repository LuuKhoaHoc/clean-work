<?php
require_once('system/core/BaseView.php');

class Superadmin_View
{
    public function DashboardView($data)
    {
        $view = new BaseView();
        $view->render("admin/view/public/dashboard.php", $data);
    }
    public function OrdersView() {
        $view = new BaseView();
        $view->render("admin/view/public/orders.php");
    }
    public function EmployeeListView($data) {
        $view = new BaseView();
        $view->render("admin/view/public/employees_list.php", $data);
    }
    public function EmployeeEditView($data) {
        $view = new BaseView();
        $view->render("admin/view/public/edit_profile.php", $data);
    }
}