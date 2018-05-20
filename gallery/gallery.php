<?php include_once('gallery.controller.php');
        include_once('../Admin System/AdminBar/Primary.php');        
?>
<!Doctype html>
<html lang="en" charset="UTF-8">

<!-- Meta Data -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta description="Wyoming">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">

<!-- Tab Title -->
<head>
    <title>Portfoilio</title>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link href="gallery.css" rel="stylesheet"/>
    
</head>

<body>
    <noscript>Sorry, you must have JavaScript on your device to access this website...</noscript>
    
    <?php include("../Header/header.php"); ?>
    
    <?php 
    if(isset($_COOKIE['Admin']) || isset($_SESSION['Admin'])){
        if($_COOKIE['Admin'] == "TRUE" || $_SESSION['Admin'] == "TRUE"){ ?>

            <form method="POST" action="gallery.php" enctype="multipart/form-data" id="gallery_upload_container">
                <label>Upload Photos</label>
                    <div id="preview">Photo Preview</div>
                        <input type="file" name="photoUpload" id="gallery_file_upload" hidden/>
                    <ul>*Image Name :</ul>
                        <input type="text" name="photoName" class="form-control" id="gallery_name" required/>
                    <ol>Comment :</ol>
                        <textarea rows="2" cols="10" name="photoComment" class="form-control" id="gallery_comment"></textarea>
            <input type="submit" name="uploadPhoto" value="Upload Photo" id="upload_photo_btn"/>
        </form>
        <?php
        }
    }
    ?>
    <div id="gallery_title">Portfolio</div>


    <form id="GalleryAPP" method="POST" action="gallery.php" enctype="multipart/form-data">
        <div ng-controller="ShowGalleryController" id="images_container" ng-init="FetchImages()">
            <div ng-repeat="x in Records">
                <div id="single_image_container" ng-if="x.image != null">
                    <a href="./gallery.images/{{x.image}}">
                    <img ng-src="./gallery.images/{{x.image}}" class="gallery_images"/></a>
                    <div class="image_comment_container">
                        <?php if(isset($_COOKIE['Admin']) || isset($_SESSION['Admin'])){ ?>
                        <input type="button" class="deletePost" ng-click="deletePost(x.name, x.image)" value="X"/>
                        <?php } ?>
                        <div class="image_comment_text">{{x.comment}}</div>
                    </div>
                </div>
            </div> 
        </div>

    </form>
        <!-- <div id="test">apended</div> -->

    <script src="Gallery.Controls.js"></script>




    <script>
        var el = $('#test');
    var wid = $(window).width();
    el.text(wid);


    </script>

    </div>
</body>


</html>