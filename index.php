<?php
//Routing mechanism

$controllerName = empty($_GET['c']) ? 'Guest_Display_Content_Controller' : $_GET['c'];
$actionName = empty($_GET['a']) ? 'showHomeAction' : $_GET['a'];

$controllerFile = "site/controller/$controllerName.php";
$action = "$actionName";

if (file_exists($controllerFile)) {
    require_once "$controllerFile";
    $controller = new $controllerName();
    if (method_exists($controller, $action)) {
        $controller->$action();
    } else {
        $action = "showError404Action";
    }
} else {
    $action = "showError404Action";
}

// include 'site/controller/Guest_Display_Content_Controller.php';
// $controler = new Guest_Display_Content_Controller();
// $controler->showLoginAction();

// include 'site/controller/Customer_Display_Content_Controller.php';
// $controler = new Customer_Display_Content_Controller();
// $controler->showProfileAction('');