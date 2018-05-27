<?php
    session_start();

    $customer = array (
            'name' =>$_POST['name'],
            'email' =>$_POST['email'],
            'phone' =>$_POST['phone']);

    $_SESSION['customer'] = $customer;

require_once("tools.php");

?>

<!DOCTYPE html>
<html lang="en">
    <head>

    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <meta charset="utf-8">
        <title>The Grange | $pageTitle</title>
        <meta name="description" content="Receipt">
        <meta name="author" content="David Doan and Josh Miranda">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONT
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Supermercado+One" rel="stylesheet">

    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/skeleton.css">
        <link rel="stylesheet" href="style.css">
        
    <!-- The Grange
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <link rel="icon" type="image/png" href="../media/blacklogo.png">

    </head>

    <body class="dark-background">
        <page size="A4">
            <div class="white-text">
                <h4>Receipt</h4>
                <hr>
                <h4>Contact Information</h4>
                <p>The Grange Caravan Park</p>
                <p>Phone: 03 1234 5678</p>
                <p>Address: Portalington, VIC 3223</p>
                <p>Email Address: reception@thegrange.com.au</p>
                <h4>Booking information</h4>
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
                </p>
                <p>Arrival Date: <?php echo $_SESSION['booking']['date']?></p>
                <p>Number of Days: <?php echo $_SESSION['booking']['days']?></p>
                <p>Number of Adults: <?php echo $_SESSION['booking']['adults']?></p>
                <p>Number of Children: <?php echo $_SESSION['booking']['children']?></p>
                <p>Total Price: $<?php echo $_SESSION['price']['totalCost']?></p>
                <p>Includes GST: $<?php echo $_SESSION['price']['GST']?></p>
                <hr>
                <h4>Customer Information</h4>
                <p>Name: <?php echo $_SESSION['customer']['name']?></p>
                <p>Mobile: <?php echo $_SESSION['customer']['phone']?></p>
                <p>Email: <?php echo $_SESSION['customer']['email']?></p>
                
            </div>
        </page>
    </body>
</html>
