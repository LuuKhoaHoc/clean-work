<?php

$model = new Customer_Model();
$model_admin = new Customer_Management_Model();

$result = $model->checkUserFromDB('viphongly2804@gmail', '123456');

if (is_null($result)) {
    require('site/view/Guest_View.php');
    global $errMsg;
    $errMsg = "Wrong email or password. Please try again!";
    $view = new Guest_View();
    $view->LoginView();
} else if ($result == 0) {
    //add section
    ob_start();
    session_start();
    $session = $_SESSION['customer_info'] = $model->getInfoFromCustomer($_POST['email']);
    $view = new Customer_View();
    $view->LogedInHomeView($session);
} else if ($result == 1) {
    ob_start();
    session_start();
    $session = $_SESSION['customer_info'] = $model_admin->getAdminInfoFromCustomer($_POST['email'], 1);
    $view = new Customer_View();
    $view->LogedInHomeView($session);
} else if ($result == 2) {
    ob_start();
    session_start();
    $session = $_SESSION['customer_info'] = $model_admin->getAdminInfoFromCustomer($_POST['email'], 2);
    $view = new Customer_View();
    $view->LogedInHomeView($session);
}