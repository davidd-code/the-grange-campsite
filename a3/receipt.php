<?php
    session_start();

    $customer = array (
            'name' =>$_POST['name'],
            'email' =>$_POST['email'],
            'phone' =>$_POST['phone']);

    $_SESSION['customer'] = $customer;

print_r($_SESSION);
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

    <header class=>
        <a href="index.php">
            <img class="logo" src="../media/companyLogo.png" alt="Simplified fireplace with text saying the Grange under it">
        </a>

        <nav>
            <div>
                <ul>
                    <li><a class="button white-text" href="index.php">Home</a></li>
                    <li><a class="button white-text" href="accommodation.php">Accomodation</a></li>
                    <li><a class="button white-text" href="rates.php">Rates</a></li>
                    <li><a class="button white-text" href="contact.php">Contact Us</a></li>      
                </ul>
            </div>
        </nav>

    </header>
    <hr>    

    <body>
        <page class="light-bacgkround" size="A4">
            This is a receipt page
        </page>
    </body>
</html>
