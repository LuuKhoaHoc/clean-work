<?php
require_once('admin/model/Order_Model.php');
require_once('admin/view/Admin_View.php');
require_once "system/core/Controller.php";

class Admin_Display_Content_Controller
{
    public function showOrdersAction()
    {
        session_start();
        $model = new Order_Model();
        $view = new Admin_View();
        $controller = new Controller();
        $customerInfo = $controller->getCustomerInfo();
        $view->OrderView($customerInfo);
    }

}