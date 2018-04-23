<?php 
//Database connection
$DataBaseConnection = mysqli_connect('localhost', 'root', '', 'companytemplate');

//Gallery configuration
$portfolioDIR = "gallery.images/";//main directory for gallery
$portfolioAllowed = array("jpg", "jpeg", "gif", "png", "tiff");//Allowed extensions for photo gallery uploads
$jsonGalleryFiles = "gallery.images/GalleryJSON/";
//ERROR Handle on false connection
if($DataBaseConnection == false){
    echo "<script> console.log('Could not Connect to database'); alert('Could NOT Connect to DataBase')</script>";
    $Logger->Logg("Failed to connect to database...");
}

?>