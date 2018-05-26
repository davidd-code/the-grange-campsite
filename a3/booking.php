<?php
session_start();

$_SESSION['booking'] = array (
    'aid' =>$_POST['aid'],
    'date' =>$_POST['date'],
    'days' =>$_POST['days'],
    'adults' =>$_POST['adults'],
    'children' =>$_POST['children'],
    /*'customer' => array (
        'name' =>$_POST['name'],
        'email' =>$_POST['email'],
        'phone' =>$_POST['phone']
    )*/
);

print_r($_SESSION);
print_r($_POST);
    
require_once("tools.php");
top_module("Booking", "booking-image", "", "button-primary", "", "");
?>

    <!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="container content-padding light-background">
        <h3>Your Booking Details</h3>
        
    </div>

    <!-- End Document
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

<?php
require_once("tools.php");
bottom_module();
?>

