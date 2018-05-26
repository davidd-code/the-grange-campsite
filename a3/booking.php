<?php
session_start();

$_SESSION['booking'] = array (
    'aid' =>$_POST['aid'],
    'date' =>$_POST['date'],
    'days' =>$_POST['days'],
    'adults' =>$_POST['adults'],
    'children' =>$_POST['children'],
    'customer' => array (
        'name' =>$_POST['name'],
        'email' =>$_POST['email'],
        'phone' =>$_POST['phone']
    )
);

echo $_POST;
    
require_once("tools.php");
top_module("Booking", "accommodation-background", "", "button-primary", "", "");
?>


<?php
require_once("tools.php");
bottom_module();
?>

