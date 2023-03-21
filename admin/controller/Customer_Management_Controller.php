<?php
require "site/controller/Customer_Account_Controller.php";

class Customer_Management_Controller extends Customer_Account_Controller
{
    public function adminLogoutAction()
    {
        parent::logoutAction();
    }

    public function superAdminLogoutAction()
    {
        parent::logoutAction();
    }
}