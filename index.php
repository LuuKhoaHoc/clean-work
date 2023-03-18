<?php
//Routing mechanism

$controllerName = empty($_GET['c']) ? 'Guest_Display_Content_Controller': $_GET['c'];
$actionName = empty($_GET['a']) ? 'showHomeAction' : $_GET['a'];

if (file_exists("site/controller/$controllerName.php")) {
require "site/controller/$controllerName.php";
    $controler = new $controllerName();
    $controler->{$actionName}();
} else {
    require_once "site/view/public_guest/page-404.php";
}


// include 'site/controller/Guest_Display_Content_Controller.php';
// $controler = new Guest_Display_Content_Controller();
// $controler->showLoginAction();

// include 'site/controller/Customer_Display_Content_Controller.php';
// $controler = new Customer_Display_Content_Controller();
// $controler->showProfileAction('');