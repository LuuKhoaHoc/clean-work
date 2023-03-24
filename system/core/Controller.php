<?php
require_once "site/model/Customer_Model.php";
require_once "admin/model/Customer_Management_Model.php";
require_once "site/view/Customer_View.php";
class Controller
{
    public function getCustomerInfo() {
        $model = new Customer_Model();
        $model_admin =  new CustomerManagement_Model();
        $session = $_SESSION['customer_info'];
        $check = $model->checkUserByEmail($session['email']);
        $customerInfo = "";
        if ($check == 0 ) {
            $customerInfo = $model->getInfoFromCustomer($_SESSION['customer_info']['email']);
        } elseif ($check == 1) {
            $customerInfo = $model_admin->getAdminInfoFromCustomer($_SESSION['customer_info']['email'], 1);
        } else {
            $customerInfo = $model_admin->getAdminInfoFromCustomer($_SESSION['customer_info']['email'], 2);
        }
        return $customerInfo;
    }
}