<?php
    session_start();

    $customer = array (
            'name' =>$_POST['name'],
            'email' =>$_POST['email'],
            'phone' =>$_POST['phone']));

    array_push($_SESSION['booking'], $customer);
    
print_r($_SESSION);
require_once("tools.php");
top_module("Booking", "booking-image", "", "button-primary", "", "");
?>