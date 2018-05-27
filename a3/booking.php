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




require_once("tools.php");
top_module("Booking", "booking-image", "", "button-primary", "", "");
?>

<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="container content-padding light-background">
    <h3>Your Booking Details</h3>
    <hr>
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
    <p>Arrival Date: <?php echo $_SESSION['booking']['date']?><p>
    <p>Number of Days: <?php echo $_SESSION['booking']['days']?><p>
    <p>Number of Adults: <?php echo $_SESSION['booking']['adults']?><p>
    <p>Number of Children: <?php echo $_SESSION['booking']['children']?><p>
    <p>Total Price: 
        <?php
            function calculateTotal($aid, $days, $adults, $children)    {
                    
                    $priceBook['cost'] = array (
                        'US' => array   (
                            'price' => 35.25,
                            'extraAdult' => 10,
                            'extraChild' => 5,
                        ),
                        'UM' => array   (
                            'price' => 40.50,
                            'extraAdult' => 10,
                            'extraChild' => 5,
                        ),
                        'PS' => array   (
                            'price' => 50.25,
                            'extraAdult' => 10,
                            'extraChild' => 5,
                        ),
                        'PM' => array   (
                            'price' => 60.50,
                            'extraAdult' => 10,
                            'extraChild' => 5,
                        ),
                        'C' => array   (
                            'price' => 100,
                            'extraAdult' => 0,
                            'extraChild' => 0,
                        )
                    );
                    
                    $pricePerDay = 0;
                    $totalPrice = 0;
                    $GST = 0;
                    $totalPeople = $adults + $children;
                    
                    if(strcmp($aid, "C") == 0)  {
                        $pricePerDay += $priceBook['cost'][$aid]['price'];
                        echo $pricePerDay * $days;
                    }   else    {
                        if($totalPeople <= 2)   {
                            $pricePerDay += $priceBook['cost'][$aid]['price'];
                            $totalPrice = $days * $pricePerDay;
                            echo $priceBook['cost'][$aid]['price'];
                            echo $pricePerDay;
                            echo $totalPrice;
                        }   else    {
                            if($adults == 1)    {
                                $pricePerDay += $priceBook['cost'][$aid]['price'];
                                $pricePerDay += ($children -1) * $priceBook['cost'][$aid]['extraChild'];
                                $totalPrice = $days * $pricePerDay;
                                echo $totalPrice;
                            }   else    {
                                $pricePerDay += $priceBook['cost'][$aid]['price'];
                                $pricePerDay += ($adults - 2) * $priceBook['cost'][$aid]['extraAdult'];
                                $pricePerDay += ($children) * $priceBook['cost'][$aid]['extraChild'];
                                $totalPrice = $days * $pricePerDay;
                                echo $totalPrice;
                            }
                        }
                    }
                }

            echo calculateTotal($_SESSION['booking']['aid'], $_SESSION['booking']['days'], $_SESSION['booking']['adults'], $_SESSION['booking']['children'])
        ?>
    <p>
    <p>Includes GST: 
        <?php

        ?>
    <p>

    <h3>Customer Information</h3>
    <hr>
</div>

?>

<!-- End Document
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

<?php
    require_once("tools.php");
        bottom_module();
?>

