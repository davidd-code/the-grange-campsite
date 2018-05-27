<?php
session_start();

require_once("tools.php");
top_module("Contact Us", "contact-background", "", "", "", "button-primary");
?>

<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<body onnload="load()" class="dark-background">
    <div id="contact-form" class="container content-padding light-background">
        <h3>Get In Touch</h3>
        <form id="contact_form" class="contact-form white-text" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=contact" method="post" onsubmit="return validate()">
            <label class="white-text">
                Name:<br>
                <input id="fullName" class="form-width black-text" type="text" name="name" placeholder="Full Name" required/>
            </label>
            <label class="white-text">
                Phone Number:<br>
                <input id="mPhone" class="form-width black-text form-padding" type="text" name="phone" placeholder="Mobile Number" required/>
            </label>
            <label class="white-text">
                Email Address:<br>
                <input id="email" class="form-width black-text" type="email" name="email" placeholder="E-mail" required/>
            </label>
            <label class="white-text">
                Message:<br>
                <textarea class="black-text" name="message" placeholder="Message" required/></textarea>
            </label>
            <label>
                <input  id="mailCBx" type="checkbox" name="mailing" value="subscribe"> Sign up to our mailing list</input><br>
            </label>
            <label>
                <input onClick="checkStatus()" id="rmbrCBox" type="checkbox" name="rememberme" value="remember"> Remember me</input><br><br>
            </label>
            <div><button id="submit-button" type="submit" value="submit" >Submit</button></div>
        </form>
    </div>
</body>
    <!-- End Document
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<?php
    require_once("tools.php");
    bottom_module();
    debug_module();
    debug_bot_module();
?>