<?php
session_start();

require_once("tools.php");
top_module("Accommodation", "accommodation-background", "", "button-primary", "", "");
?>

<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

<div class="text-center">
    <button onclick="US(); calculatePrice()" class="white-text">Small Unpowered Site</button>

    <button onclick="UM(); calculatePrice()" class="white-text">Medium Unpowered Site</button>

    <button onclick="PS(); calculatePrice()" class="white-text">Small Powered Site</button>

    <button onclick="PM(); calculatePrice()" class="white-text">Medium Powered Site</button>

    <button onclick="C(); calculatePrice()" class="white-text">Caravan Sites</button>
</div>


<div class="container">

    <div id="landing" class="six columns text-center content-padding light-background no-margin">
        <h3>Accommodation</h3><br>
        <p class="text-left">
            Our camping grounds come in various sizes to fit the largest of families, group of friends and even scout camps.
            <br><br>Click on the buttons above to see each of our camping sites and all of their features!
        </p>
    </div>

    <div id="US" class="six columns text-left content-padding light-background no-display no-margin">
        <h3>Small Unpowered Site</h3><br>
        <p>
            Positioned on the south end of the campsite, our small unpowered sites have views overlooking the campgrounds
            and the surrounding bushland.<br><br>
            <strong>Features included:</strong>
        <ul class="text-left white-text">
            <li>In-tent lighting</li>
            <li>In-tent table and chair set</li>
            <li>Air mattresses - single and/or double</li>
            <li>Linen and towels</li>
            <li>Portable outdoor fire pit</li>
            <li>Portable speaker</li>
        </ul>
        Price: $35.25/night * 
        </p>
</div>

<div id="PS" class="six columns text-left content-padding light-background no-display no-margin">
    <h3>Small Powered Site</h3><br>
    <p>
        Positioned on the south-east end of the campsite, our small powered sites have facilities for those who are looking 
        for something a little more comfortable whilst still being close to nature.<br><br>
        <strong>Features included:</strong>
    <ul class="text-left white-text">
        <li>In-tent lighting</li>
        <li>In-tent table and chair set</li>
        <li>Wood fire stove heater during Winter</li>
        <li>Dyson fan during Summer</li>
        <li>Portable speaker</li>
        <li>Portable outdoor fire pit</li>
        <li>Pillow top queen sized bed</li>
        <li>Linen and towels</li>
        <li>Wine glasses, plates, crockery and cutlery</li>
        <li>Small kitchen</li>
        <li>TV in living area</li>
    </ul>
    Price: $50.25/night * 
    </p>
</div>

<div id="UM" class="six columns text-left content-padding light-background no-display no-margin">
    <h3>Medium Unpowered Site</h3><br>
    <p>
        Positioned on the west end of the campsite, the medium unpowered sites have views that watch over the beach front with
        the Melbourne city landscape as a backdrop to the waters of the bay. <br><br>
        <strong>Features included:</strong>
    <ul class="text-left white-text">
        <li>In-tent lighting</li>
        <li>In-tent table and chair set</li>
        <li>Extra outdoor chairs</li>
        <li>Portable outdoor fire pit</li>
        <li>Portable speaker</li>
        <li>Air mattresses - single and/or double</li>
        <li>Plates, crockery and cutlery</li>
        <li>Linen and towels</li>
    </ul>
    Price: $40.50/night * 
    </p>
</div>


<div id="PM" class="six columns text-left content-padding light-background no-display no-margin">
    <h3>Medium Powered Site</h3><br>
    <p>
        Positioned on the East end of the campsite, our medium powered sites are positioned a short walk from the bbq area 
        and the reception.<br><br>
        <strong>Features included:</strong>
    <ul class="text-left white-text">
        <li>In-tent lighting</li>
        <li>In-tent table and chair set</li>
        <li>Wood fire stove heater during Winter</li>
        <li>Dyson fan during Summer</li>
        <li>Portable speaker</li>
        <li>Portable outdoor fire pit</li>
        <li>Pillow top queen sized bed</li>
        <li>Linen and towels</li>
        <li>Wine glasses, plates, crockery and cutlery</li>
        <li>Kitchen</li>
        <li>Extra blankets</li>
        <li>Extra outdoor chairs</li>
        <li>TV in living area</li>
    </ul>
    Price: $60.50/night * 
    </p>
</div>


<div id="C" class="six columns text-left content-padding light-background no-display no-margin">
    <h3>Caravan Site</h3><br>
    <p>
        Positioned on the north end of the campsite, our caravan sites have plenty of spaces for you to park
        and feel right at home. <br><br>
        <strong>Features included:</strong>
    <ul class="text-left white-text">
        <li>Caravan parking spaces</li>
        <li>Portable outdoor fire pit</li>
        <li>Portable speaker</li>
        <li>Linen and towels</li>
        <li>Wine glasses, plates, crockery and cutlery</li>
        <li>Extra amenities available upon request</li>
    </ul>
    Price: $100.00/night * 
    </p>
</div>


    <div class="six columns text-left content-padding light-background no-margin">
        <h3>Pricing Details</h3></br>
        <form action="booking.php" method="post">

            <input type="hidden" name="aid" id="aid" value=""/>

            <p>Arrival Date:<br> <input class="form-width black-text" type="date" name="date" value="" required onchange="calculatePrice()"></p>
            <p>Number of Days:<br> 
                <select class="form-width black-text" name="days" id="days" required onchange="calculatePrice()">
                    <option disabled selected value>Please select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                </select>
            </p>

            <p>Number of Adults:<br>
                <select class="form-width black-text"  name="adults" id="adults" required onchange="calculatePrice()">
                    <option disabled selected value>Please select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </p>


            <p>Number of Children:<br>
                <select class="form-width black-text" name="children" id="children" required onchange="calculatePrice()">
                    <option disabled selected value>Please select</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>
            </p>
            
            <span id="error" class="white-text"></span>
            <br>
            <span class="white-text">Total Price: $</span>
            <span id="price" class="white-text"></span>
            <br>
            <span class="white-text">Includes GST: $</span>
            <span id="GST" class="white-text"></span>
            
            <div><button id="accom-button" type="submit" value="submit" >Book</button></div>
        </form>
    </div>
</div>

<!-- End Document
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

<?php
require_once("tools.php");
bottom_module();
?>

