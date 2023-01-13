<?php
include_once "Manager.php";
$manager = new Manager();
var_dump($_POST);
$name = $_POST["customer-name"];
$email = $_POST["customer-email"];
$phone = $_POST["customer-phone"];
$address = $_POST["customer-address"];
$sti = (int)$_POST["service-type-id"];
$cmt = $_POST["comment"];

$manager->receiveOrder($name, $email, $phone, $address, $sti, $cmt);
