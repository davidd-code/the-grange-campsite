<?php
    session_start();

    function top_module($pageTitle, $background, $p1, $p2, $p3, $p4) {
    $html = <<<"OUTPUT"
            <!DOCTYPE html>
            <html lang="en">
                <head>

                <!-- Basic Page Needs
            –––––––––––––––––––––––––––––––––––––––––––––––––– -->
                    <meta charset="utf-8">
                    <title>The Grange | $pageTitle</title>
                    <meta name="description" content="Home Page">
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
                    
                <!-- JavaScript
            –––––––––––––––––––––––––––––––––––––––––––––––––– -->
                    <script type="text/javascript" src="accommodation.js"></script>

                <!-- The Grange
            –––––––––––––––––––––––––––––––––––––––––––––––––– -->
                    <link rel="icon" type="image/png" href="../media/blacklogo.png">

            </head>
            
            <header class=$background>
	           <a href="index.php">
        	       <img class="logo" src="../media/companyLogo.png" alt="Simplified fireplace with text saying the Grange under it">
	           </a>
                
                <nav>
                    <div>
                        <ul>
                            <li><a class="button $p1 white-text" href="index.php">Home</a></li>
                            <li><a class="button $p2 white-text" href="accommodation.php">Accomodation</a></li>
                            <li><a class="button $p3 white-text" href="rates.php">Rates</a></li>
                            <li><a class="button $p4 white-text" href="contact.php">Contact Us</a></li>      
                        </ul>
                    </div>
                </nav>
            </header>
            
            <body class="dark-background">

OUTPUT;
        echo $html;
    }

    function bottom_module()    {
        $html = <<<"FOOTER"
        

                </body>
                
                <footer class="white-text text-center">
                    <div id="footer">
                    <hr>
                        Created By David Doan #s3686810 and Joshua Miranda #3690595 <br>
                        Check out the new logo that I created on LogoMakr.com 
                        https://logomakr.com/68T8ti, https://logomakr.com/9ri0w2, <br>
                        https://logomakr.com/6D7mrw, https://logomakr.com/3MoZll, https://logomakr.com/0QmeW9<br>
                        Background image: Photo by Kara Michelle on Unsplash - https://unsplash.com/photos/a_Q8MzP3xR4<br>
                        Background image: Photo by Chris Schog on Unsplash - https://unsplash.com/photos/EnCaUE4QNOw<br>
                        Background image: Photo by Wei Pan on Unsplash - https://unsplash.com/photos/Ta0A1miYZKc<br>
                        Background image: Photo by Rahul Bhosale on Unsplash - https://unsplash.com/photos/yBgC-qVCxMg<br>
                    </div>
                </footer>
            </html>
FOOTER;
        echo $html;
    }

    function debug_module() {
        $html = <<<"DEBUG"

                <aside id='debug'>
                    <details open>
                        <summary>=Debug Show/Hide</summary>
                        <pre>
                            "$_SESSION contains:"
                                print_r($_SESSION['booking']);
                                print_r($_SESSION['customer']);
                                print_r($_SESSION['price']);

                            "$_POST contains:"
                                print_r($_POST); 
                        </pre>
                    </details>
                </aside>  
DEBUG;
        echo $html;
    }
?>