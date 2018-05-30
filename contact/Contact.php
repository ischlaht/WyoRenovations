<?php include_once('../Admin System/AdminBar/Primary.php'); ?>
<!Doctype html>
<html lang="en" charset="UTF-8">

<!-- Meta Data -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta description="Wyoming">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">

<!-- Tab Title -->

<head>
    <title>Contact Information</title>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
        crossorigin="anonymous">
    <!-- Animate Snippits -->

    <!-- Angular -->
    <script src="../LIB/Angular1.6.7/Ng-Main/node_modules/angular/angular.js"></script>
    <script src="../LIB/Angular1.6.7/Ng-Animate/node_modules/angular-animate/angular-animate.js"></script>
    <script src="../LIB/Angular1.6.7/Ng-Cookies/node_modules/angular-cookies/angular-cookies.js"></script>
    <script src="../LIB/Angular1.6.7/Ng-Sanitize/node_modules/angular-sanitize/angular-sanitize.js"></script>
    <script src="../LIB/Angular1.6.7/Ng-Touch/node_modules/angular-touch/angular-touch.js"></script>
    <script src="../LIB/Angular1.6.7/Ng-Route/node_modules/angular-route/angular-route.js"></script>
    <!-- jQuery -->
    <script src="../LIB/JQuery/JMain/node_modules/jquery/dist/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>
    <link href="contact.css" rel="stylesheet" />

</head>

<body>
    <?php include("../Components/Header/header.php"); ?>

    <div id="ContactTitle">
        <ul>Contact Information</ul>
    </div>



    <div id="contactInfoContainer">
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
            <ul>Unknown@gmail.com</ul>
        </div>       
        <div class="row">  
            <i>We do not currently have a shop or office. Please call the provided phone number for a free quote and more information.</i>
        </div> 
    </div>

    <?php include("../Components/Footer/footer.html"); ?>
    

</body>



</html>