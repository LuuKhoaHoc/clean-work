<?php
require('admin/model/Order_Model.php');
require('admin/view/Admin_View.php');
class Admin_Display_Content_Controller
{
    public function showOrdersAction()
    {
        $model = new Order_Model();
        $view = new Admin_View();

        // $data = $model->
        $view->OrderView();
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