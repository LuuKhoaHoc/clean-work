<?php
include('site/model/Content_Model.php');
include('site/view/Customer_View.php');
session_start();

class Customer_Display_Content_Controller
{
    public function showHomeAction()
    {
        $model = new Content_Model();
        $view = new Customer_View();
        $customerInfo = $_SESSION['customer_info'];
        $view->LogedInHomeView($customerInfo);
    }

    public function showAboutUsAction()
    {
        $model = new Content_Model();
        $view = new Customer_View();
        $customerInfo = $_SESSION['customer_info'];
        $view->LogedInAboutUsView($customerInfo);
    }

    public function showOurServiceAction()
    {
        $model = new Content_Model();
        $view = new Customer_View();
        $customerInfo = $_SESSION['customer_info'];
        $view->LogedInOurServiceView($customerInfo);
    }

    public function showServiceDetailAction()
    {
        $service = $_GET['s'] ?? '';
        $service = ucwords(str_replace('-', ' ', $service));
        $model = new Content_Model();
        $service = $model->getSerFromDB($service);
        $view = new Customer_View();
        $customerInfo = $_SESSION['customer_info'];
        $view->LogedInServiceDetailView($service, $customerInfo);
    }

    public function showError404Action()
    {
        $model = new Content_Model();
        $view = new Customer_View();
        $customerInfo = $_SESSION['customer_info'];
        $view->LogedInError404View($customerInfo);
    }

    public function showProfileAction()
    {
        $model = new Content_Model();
        $view = new Customer_View();
        $customerInfo = $_SESSION['customer_info'];
        $view->ProfileView($customerInfo);
    }

    public function showChangePasswordAction()
    {
        $model = new Content_Model();
        $view = new Customer_View();
        $customerInfo = $_SESSION['customer_info'];
        $view->ChangePasswordView($customerInfo);
    }

    public function showViewOrder()
    {
        $model = new Content_Model();
        $view = new Customer_View();
        $customerInfo = $_SESSION['customer_info'];
        $orders = $model->showOrder($customerInfo['email']);
        $view->ViewOrder($customerInfo, $orders);
    }
}