<?php
    function top_module($pageTitle, $background) {
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

                <!-- The Grange
            –––––––––––––––––––––––––––––––––––––––––––––––––– -->
                    <link rel="icon" type="image/png" href="../media/blacklogo.png">

            </head>
            
            <header class=$background>
	           <a href="index.html">
        	       <img class="logo" src="../media/companyLogo.png" alt="Simplified fireplace with text saying the Grange under it">
	           </a>
OUTPUT;
        echo $html;
    }
?>