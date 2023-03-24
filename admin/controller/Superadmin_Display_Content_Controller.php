<?php
require_once('admin/model/Order_Model.php');
require_once('admin/model/History_Model.php');
require_once('admin/model/Content_Model.php');
require_once('admin/model/Employee_Model.php');
require_once('admin/view/Superadmin_View.php');
require_once('system/core/Controller.php');
require_once('system/core/Model.php');

class Superadmin_Display_Content_Controller
{
    public function showDashboard()
    {
        session_start();
        $model = new Order_Model();
        $view = new Superadmin_View();

        $data = $model->show_order();
        $view->StatisticView($data);
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