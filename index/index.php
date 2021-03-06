<?php include_once('../Admin System/AdminBar/Primary.php'); ?>

<!Doctype html>
<html lang="en" charset="UTF-8">

<!-- Meta Data -->
<meta name="viewport" content="width=device-width, initial-scale=1,  maximum-scale=1, shrink-to-fit=no">
<meta description="Wyoming">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">

<!-- Tab Title -->
<head>
    <title>WYO Renovations</title>
</head>


  <head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- Animate Snippits -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css" integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw" crossorigin="anonymous">
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="../LIB/JQuery/JMain/node_modules/jquery/dist/jquery.js"></script>
        <!-- <script src="../LIB/JQuery/JMain/node_modules/jquery/src/"></script> -->
        <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <!-- <script src="../LIB/JQuery/JMobile/node_modules/jquery-mobile/js/jquery.mobile.js"></script> -->
<link href="mainstructure.css" rel="stylesheet" type="text/css">
</head>



<body>
    <div id="total_container">
        <?php include("../Components/Header/header.php");?>
        
        <div id="intro">
            <title class="animated 2s swing">About us</title>
            <i> My name is Devan Penman and I am the Founder, Owner, and Supervisor of <font color="darkblue">WYO Renovations</font>. I was born and raised in Rawlins, Wyoming. </i>
            <p>We are located in Rawlins Wyoming. I started this company with the main gaol of supplying the community with top quality renovations.</p>
            <div id="certified"> CFI certified flooring installer, CSI school forney texas </div>
        </div>
        
        
        
        <!-- WHAT WE DO -->
        <div id="what_we_do_container">
            <div id="what_we_do_list">
                <p>What we do</p>
                <li> Floors : Carpet, Hardwood, Vinyl, Tile, ETC! </li>
                <li>Roofing</li>
                <li>Remodel</li>
                <li>Paint</li>
                <li>Siding</li>
                <li>Drywall</li>
                <li>Cabinets</li>
                <li>Landscaping</li>
                <li>Demo</li>
            </div>
            
            
            <!-- Places people can buy there products -->
            <div id="places_buy_List">
                
                <p>You can buy products from</p>
                <li>Home Depot</li>
                <li>Ace-hardware</li>
                
            </div>
            <div id="quick_contact">
                <p>Contact Information</p>
                <div class="row">
                    <label>Name :</label>
                    <ul>Devan Penman</ul>
                </div>
                <div class="row">
                    <label>Phone Number :</label>
                    <ul>307-320-6686</ul>
                </div>
                <div class="row">
                    <label>Email :</label>
                    <ul>Unknown$gmail.com</ul>
                </div>       
                <div class="row">  
                    <i>We do not currently have a shop. Please call the provided phone number for a free quote and more information.</i>
                </div> 
            </div>
        </div>
        
        <div id="image_slider_container" class="car">
            <div id="image_slider">
                <img class="slides" src="Images/9127.jpeg" />
                <img class="slides" src="Images/9129.jpeg"/>
                <img class="slides" src="Images/photo_owner.jpeg"/>
                <img class="slides" src="Images/9132.jpeg"/>
                <img class="slides" src="Images/9135.jpeg"/>
                <img class="slides" src="Images/9137.jpeg"/>
                <button class="image_slider_btn" onClick="plusindex(-1)" id="image_slider_btn_prev">&#x2770;</button>
                <button class="image_slider_btn" onClick="plusindex(+1)" id="image_slider_btn_next">&#x2771;</button>
            </div>
        </div>
        
        
        
        
        <script src="imageslider.js"></script>

        <!-- <script>alert('This is a temporary website that is still in development. It is only online for the client to view the progress and make requested changes they would like. It is expected to be finished next month. All pages that are unfinished are unavailable to avoid early bugs. You will only be able to view the gallery tab along with the homepage. Design, Employment, Contact information and mobile versions of the website are not available at this time.');</script> -->
    
    </div> <!--for total container -->

    <?php include("../Components/Footer/footer.html"); ?>
</body>
        
        
        
        <!-- CFI certified flooring installer CSI school forney texas-->
        <!-- Home Depote -->
        
        
    
    </html>