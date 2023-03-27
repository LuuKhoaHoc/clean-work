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
        $view->render("admin/view/public/edit_emp.php", $data);
    }
    public function EmployeeAddView() {
        $view = new BaseView();
        $view->render("admin/view/public/add_emp.php");
    }
    public function CustomerListView($data) {
        $view = new BaseView();
        $view->render("admin/view/public/customer_list.php", $data);
    }
    public function ContentManagerView($data) {
        $view = new BaseView();
        $view->render("admin/view/public/content_manager.php", $data);
    }
    public function ContentEditView($data) {
        $view = new BaseView();
        $view->render("admin/view/public/edit_content.php", $data);
    }
}