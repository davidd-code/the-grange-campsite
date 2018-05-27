<?php
    session_start();

    array_push($_SESSION['booking'], 'customer' = array (
            'name' =>$_POST['name'],
            'email' =>$_POST['email'],
            'phone' =>$_POST['phone']));

print_r($_SESSION);
require_once("tools.php");
top_module("Booking", "booking-image", "", "button-primary", "", "");
?>