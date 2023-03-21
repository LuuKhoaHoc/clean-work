<?php
//Routing mechanism
require_once "admin/config/Constant.php";

$controllerName = $_GET['c'] ?? DEFAULT_CONTROLLER;
$actionName = $_GET['a'] ?? DEFAULT_ACTION;


$controllerFile = CUSTOMER_CONTROLLER_PATH . "$controllerName.php";
$action = $actionName;

if (file_exists($controllerFile)) {
    require_once "$controllerFile";
    $controller = new $controllerName();
    if (!method_exists($controller, $action)) {
        $action = ERROR_404_ACTION;
    }
    $controller->$action();
} else {
    $controllerFile = ADMIN_CONTROLLER_PATH . "$controllerName.php";
    if (file_exists($controllerFile)) {
        require_once $controllerFile;
        $controller = new $controllerName();
        if (!method_exists($controller, $action)) {
            $action = ERROR_404_ACTION;
        }
        $controller->$action();
    } else {
        $action = ERROR_404_ACTION;
        $controllerName = DEFAULT_CONTROLLER;
        $controllerFile = CUSTOMER_CONTROLLER_PATH . "$controllerName.php";
        require_once $controllerFile;
        $controller = new $controllerName();
        $controller->$action();
    }

}

// include 'site/controller/Guest_Display_Content_Controller.php';
// $controler = new Guest_Display_Content_Controller();
// $controler->showLoginAction();

// include 'site/controller/Customer_Display_Content_Controller.php';
// $controler = new Customer_Display_Content_Controller();
// $controler->showProfileAction('');