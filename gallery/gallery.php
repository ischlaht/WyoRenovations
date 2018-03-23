
<!Doctype html>
<html lang="en" charset="UTF-8">

<!-- Meta Data -->
<meta name="viewport" content="width=device-width", initial-scale=1, shrink-to-fit=no>
<meta description="Wyoming">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">

<!-- Tab Title -->
<head>
    <title>WYO Renovations - Gallery</title>
</head>


  <head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- Animate Snippits -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css" integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw" crossorigin="anonymous">
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link href="gallery.css" rel="stylesheet"/>
</head>

<body>
<!-- <div id="test">apended</div> -->

<?php include("../Header/header.php");

?>

<div id="total_container">
    <div id="image_container">
        <?php 
        $myDir = "./gallery.images/";
        $images = glob($myDir. "*.jpeg");
            foreach($images as $curimg){
                echo "<a href='".$curimg."'/>";
                echo "<img class='gallery_images' src='".$curimg."'/>";
                }

    ?>

</div>
<script>
    var el = $('#test');
var wid = $(window).width();
el.text(wid);

</script>

</div>
</body>


</html>