<?php
    session_start();

    $_SESSION['booking'] = array (
        'aid' =>$_POST['aid'],
        'date' =>$_POST['date'],
        'days' =>$_POST['days'],
        'adults' =>$_POST['adults'],
        'children' =>$_POST['children']
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
    <p>Arrival Date: <?php echo $_SESSION['booking']['date']?></p>
    <p>Number of Days: <?php echo $_SESSION['booking']['days']?></p>
    <p>Number of Adults: <?php echo $_SESSION['booking']['adults']?></p>
    <p>Number of Children: <?php echo $_SESSION['booking']['children']?></p>
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
                    global $totalPrice;
                    $totalPrice = 0;
                    global $GST;
                    $GST = 0;
                    $totalPeople = $adults + $children;
                    
                    if(strcmp($aid, "C") == 0)  {
                        $pricePerDay += $priceBook['cost'][$aid]['price'];
                        $GST = $totalPrice / 10;
                        $totalPrice = $pricePerDay * $days;
                        sprintf("%.2f", $totalPrice);
                    }   else    {
                        if($totalPeople <= 2)   {
                            $pricePerDay += $priceBook['cost'][$aid]['price'];
                            $totalPrice = $days * $pricePerDay;
                            $GST = $totalPrice / 10;
                            echo sprintf("%.2f", $totalPrice);
                        }   else    {
                            if($adults == 1)    {
                                $pricePerDay += $priceBook['cost'][$aid]['price'];
                                $pricePerDay += ($children -1) * $priceBook['cost'][$aid]['extraChild'];
                                $totalPrice = $days * $pricePerDay;
                                $GST = $totalPrice / 10;
                                echo sprintf("%.2f", $totalPrice);
                            }   else    {
                                $pricePerDay += $priceBook['cost'][$aid]['price'];
                                $pricePerDay += ($adults - 2) * $priceBook['cost'][$aid]['extraAdult'];
                                $pricePerDay += ($children) * $priceBook['cost'][$aid]['extraChild'];
                                $totalPrice = $days * $pricePerDay;
                                $GST = $totalPrice / 10;
                                echo sprintf("%.2f", $totalPrice);
                            }
                        }
                    }
                }

            calculateTotal($_SESSION['booking']['aid'], $_SESSION['booking']['days'], $_SESSION['booking']['adults'], $_SESSION['booking']['children']);

            echo "</p><p>Includes GST: ". sprintf("%.2f", $GST);
            
            $total = array (
                    'totalCost' =>$totalPrice,
                    'GST' =>$GST);

            $_SESSION['price'] = $total;
        ?>
    </p>

    <h3>Customer Information</h3>
    <hr>
    <form class="white-text" action="receipt.php" method="post">
            <label class="white-text">
                Name:<br>
                <input class="form-width black-text" type="text" name="name" placeholder="Full Name" required/>
            </label>
            <label class="white-text">
                Phone Number:<br>
                <input class="form-width black-text form-padding" type="text" name="phone" placeholder="Mobile Number" required/>
            </label>
            <label class="white-text">
                Email Address:<br>
                <input class="form-width black-text" type="text" name="email" placeholder="E-mail" required/>
            </label>

            <div>
                <a class="button button-primary white-text" href="accommodation.php">Cancel</a>
                <button id="booking-button" type="submit" value="submit" >Confirm</button>
            </div>
        </form>
</div>

?>

<!-- End Document
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

<?php
    require_once("tools.php");
        bottom_module();
?>

