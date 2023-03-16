<?php
include('site/model/Content_Model.php');
include('site/view/Customer_View.php');
class Customer_Display_Content_Controller
{
    public function showHomeAction($customerInfo)
    {
        $model = new Content_Model();
        $view = new Customer_View();
        $view->LogedInHomeView($customerInfo);
    }
    public function showAboutUsAction($customerInfo)
    {
        $model = new Content_Model();
        $view = new Customer_View();
        $view->LogedInAboutUsView($customerInfo);
    }
    public function showOurServiceAction($customerInfo)
    {
        $model = new Content_Model();
        $view = new Customer_View();
        $view->LogedInOurServiceView($customerInfo);
    }
    public function showServiceDetailAction(string $service, $customerInfo)
    {
        $model = new Content_Model();
        $view = new Customer_View();
        $view->LogedInServiceDetailView($service, $customerInfo);
    }
    public function showError404Action($customerInfo)
    {
        $model = new Content_Model();
        $view = new Customer_View();
        $view->LogedInError404View($customerInfo);
    }
    public function showProfileAction($customerInfo)
    {
        $model = new Content_Model();
        $view = new Customer_View();
        $view->ProfileView($customerInfo);
    }
    public function showChangePasswordAction($customerInfo)
    {
        $model = new Content_Model();
        $view = new Customer_View();
        $view->ChangePasswordView($customerInfo);
    }
    
}