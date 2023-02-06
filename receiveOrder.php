<?php
include_once "Manager.php";
$manager = new Manager();
var_dump($_POST);
$name = testInput($_POST["customer-name"]);
$email = testInput($_POST["customer-email"]);
$phone = testInput($_POST["customer-phone"]);
$address = testInput($_POST["customer-address"]);
$sti = testInput((int)$_POST["service-type-id"]);
$cmt = testInput($_POST["comment"]);

$manager->receiveOrder($name, $email, $phone, $address, $sti, $cmt);

function testInput($data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}