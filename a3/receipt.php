<?php
    session_start();

    $customer = array (
            'name' =>$_POST['name'],
            'email' =>$_POST['email'],
            'phone' =>$_POST['phone']);

    $_SESSION['customer'] = $customer;

print_r($_SESSION);
require_once("tools.php");
top_module("Booking", "booking-image", "", "button-primary", "", "");
?>