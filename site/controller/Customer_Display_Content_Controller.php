<?php
require_once ('site/model/Content_Model.php');
require_once ('site/view/Customer_View.php');
require_once ('system/core/Controller.php');

session_start();

class Customer_Display_Content_Controller
{
    public function showHomeAction()
    {
        $view = new Customer_View();
        $controller = new Controller();
        $customerInfo = $controller->getCustomerInfo();
        $view->LogedInHomeView($customerInfo);
    }

    public function showAboutUsAction()
    {
        $view = new Customer_View();
        $controller = new Controller();
        $customerInfo = $controller->getCustomerInfo();
        $view->LogedInAboutUsView($customerInfo);
    }

    public function showOurServiceAction()
    {
        $view = new Customer_View();
        $controller = new Controller();
        $customerInfo = $controller->getCustomerInfo();
        $view->LogedInOurServiceView($customerInfo);
    }

    public function showServiceDetailAction()
    {
        $service = $_GET['s'] ?? '';
        $service = ucwords(str_replace('-', ' ', $service));
        $model = new Content_Model();
        $service = $model->getSerFromDB($service);
        $view = new Customer_View();
        $controller = new Controller();
        $customerInfo = $controller->getCustomerInfo();
        $view->LogedInServiceDetailView($service, $customerInfo);
    }

    public function showError404Action()
    {
        $view = new Customer_View();
        $controller = new Controller();
        $customerInfo = $controller->getCustomerInfo();
        $view->LogedInError404View($customerInfo);
    }

    public function showProfileAction()
    {
        $view = new Customer_View();
        $controller = new Controller();
        $customerInfo = $controller->getCustomerInfo();
        $view->ProfileView($customerInfo);
    }

    public function showChangePasswordAction()
    {
        $view = new Customer_View();
        $controller = new Controller();
        $customerInfo = $controller->getCustomerInfo();
        $view->ChangePasswordView($customerInfo);
    }

    public function showViewOrder()
    {
        $model = new Content_Model();
        $view = new Customer_View();
        $controller = new Controller();
        $customerInfo = $controller->getCustomerInfo();
        $orders = $model->showOrder($customerInfo['email']);
        $view->OrderView($customerInfo, $orders);
    }
    public function showChangeInfoAction()
    {
        $view = new Customer_View();
        $controller = new Controller();
        $customerInfo = $controller->getCustomerInfo();
        $view->ChangeProfileView($customerInfo);
    }
    public function showNavAction() {
        $view = new Customer_View();
        $controller = new Controller();
        $customerInfo = $controller->getCustomerInfo();
        $view->NavView($customerInfo);
    }
    public function showContactAction() {
        $view = new Customer_View();
        $controller = new Controller();
        $customerInfo = $controller->getCustomerInfo();
        $view->ContactView($customerInfo);
    }
}