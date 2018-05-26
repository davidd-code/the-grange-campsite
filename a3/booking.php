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
        <hr>
        <h3>Your Booking Details</h3>
        <p>Accommodation Type: 
            <?php
                switch($_SESSION['booking']['aid']) {
                    case "US":
                        echo "Unpowered Small Camping Site";
                        break;
                    case "UM":
                        echo "Unpowered Medium Camping Site";
                        break;
                    case "PS":
                        echo "Powered Small Camping Site";
                        break;
                    case "PM":
                        echo "Powered Medium Camping Site";
                        break;
                    case "C":
                        echo "Caravan Site";
                        break;
                }
            ?>
        <p>
        <p>Arrival Date: <p>
    </div>

?>

    <!-- End Document
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

<?php
require_once("tools.php");
bottom_module();
?>

