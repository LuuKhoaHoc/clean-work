<?php
require_once('admin/model/Order_Model.php');
require_once('admin/model/History_Model.php');
require_once('admin/model/Content_Model.php');
require_once('admin/model/Employee_Model.php');
require_once('admin/view/Superadmin_View.php');
require_once('system/core/Controller.php');
require_once('system/core/Model.php');
require_once('system/core/BaseView.php');

ob_start();
session_start();

class Superadmin_Display_Content_Controller
{
    public function showDashboard()
    {
        $controller_info = new Controller();
        $superadminInfo = $controller_info->getCustomerInfo();
        $model = new Order_Model();
        $orders = $model->countNewOrder();
        $history_model = new History_Model();
        $etm = $history_model->earnThisMonth() ?? "0";
        $customer_manage = new Customer_Management_Model();
        $ctm = $customer_manage->countCusThisMonth();
        $total = $history_model->totalOrders();
        $total_money = $history_model->totalMoney();
        $data = [
            'superadminInfo' => $superadminInfo,
            'orders' => $orders,
            'etm' => $etm,
            'ctm' => $ctm,
            'total' => $total,
            'total_money' => $total_money
        ];

        $view = new Superadmin_View();
        $view->DashboardView($data);
    }
    public function showOrders() {
        $view = new Superadmin_View();
        $view->OrdersView();
    }
    public function showEmp() {
        $model = new Employee_Model();
        $data =  $model->showEmp();
        $view = new Superadmin_View();
        $view->EmployeeListView($data);
    }
    public function editEmp() {

    }

    public function showProfileAction()
    {
        require('admin/model/Content_Model.php');
        $model = new Content_Model();
        $view = new Admin_View();
        
        $data = $model->getDataFromPage('');
        $view->ProfileView($data);
    }
}