<?php include_once('gallery.controller.php');
        include_once('../Admin System/AdminBar/Primary.php');        
?>
<!Doctype html>
<html lang="en" charset="UTF-8">

<!-- Meta Data -->
<meta name="viewport" content="width=device-width", initial-scale=1, shrink-to-fit=no>
<meta description="Wyoming">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">

<!-- Tab Title -->
<head>
    <title>Portfoilio</title>


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

<?php include("../Header/header.php"); ?>

<?php 
    if(isset($_COOKIE['Admin']) || isset($_SESSION['Admin'])){
        if($_COOKIE['Admin'] == "TRUE" || $_SESSION['Admin'] == "TRUE"){ ?>

            <form method="POST" action="gallery.php" enctype="multipart/form-data" id="gallery_upload_container">
                <label>Upload Photos</label>
                    <div id="preview">Photo Preview</div>
                    <input type="file" name="photoUpload" id="gallery_file_upload" hidden/>
                        <ul>Photo Name :</ul>
                            <input type="text" name="photoName" class="form-control" id="gallery_name">
                            <input type="submit" name="uploadPhoto" value="Upload Photo" id="upload_photo_btn"/>
            </form>
<?php
        }
    }
?>


<div id="total_container">
    <div id="image_container">
        <?php 
        $myDir = "./gallery.images/";
        $images = glob($myDir. "*.jpeg");
            foreach($images as $curimg){
                // echo "<input type='button' name"
                echo "<a href='".$curimg."'/>";
                echo "<img class='gallery_images' src='".$curimg."'/>";
            }
    ?>
</div>



<script>
    var el = $('#test');
var wid = $(window).width();
el.text(wid);


function filePreview(input){
    if(input.files && input.files[0]){
        var reader = new FileReader();
        reader.onload = function(e){
            // $('#gallery_upload_container + img').remove();
            $('#preview').append('<img src="'+e.target.result+'" width="300"; position="relative"; height="186X"; z-index="20"/>');
        };
            reader.readAsDataURL(input.files[0]);
    }
}

$('#gallery_file_upload').change(function(){
    filePreview(this);
});

//Custom choose file button event
$('#preview').click(function() {
    $('#gallery_file_upload').click();
});

// function Uploadd(){
// }


</script>

</div>
</body>


</html>