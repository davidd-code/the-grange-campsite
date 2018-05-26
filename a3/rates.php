<?php
    session_start();

    require_once("tools.php");
    top_module("Rates", "rates-background", "", "", "button-primary", "");
?>

    <!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <div class="container text-center">

	<p></br> Our range of affordable camping sites are here to cater to all of your outdoor adventure needs.</br> Please use the aid provided for each type when booking. </br> <a href="accommodation.html">Book now</a> to avoid disappointment! </p>

	</div>


	<div class="container one-half-column light-background-table">
		<table>
			 <tr>
				<th>Type</th>
				<th>AID</th> 
				<th>Per Night</th>
				<th>Extra Adult</th>
				<th>Extra Child</th>  
			  </tr>
			  <tr>
				<td id="types">Unpowered Small</br>Camping Sites</td>
				<td>US</td> 
				<td>$35.25</td>
				<td>$10.00</td>
				<td>$5.00</td>
			  </tr>
			  <tr>
				<td id="types">Unpowered Medium</br>Camping Sites</td>
				<td>UM</td> 
				<td>$40.50</td>
				<td>$10.00</td>
				<td>$5.00</td>
			  </tr>
			  <tr>
				<td id="types">Powered Small</br>Camping Sites</td>
				<td>PS</td> 
				<td>$50.25</td>
				<td>$10.00</td>
				<td>$5.00</td>
			  </tr>
			  <tr>
				<td id="types">Powered Medium</br>Camping Sites</td>
				<td>PM</td> 
				<td>$60.50</td>
				<td>$10.00</td>
				<td>$5.00</td>
			  </tr>
			  <tr>
				<td id="types">Caravan Sites</td>
				<td>C</td> 
				<td>$100.00</td>
				<td>FREE</td>
				<td>FREE</td>
			  </tr>
		</table>

		</div>

		<p class="text-center"></br>Per night rate includes 2 adults or 1 adult + 1 child. All prices <u>include</u> GST</p>

    <!-- End Document
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

<?php
    require_once("tools.php");
    bottom_module();
?>


