<?php 
//Database connection
$DataBaseConnection = mysqli_connect('localhost', 'root', '', 'companytemplate');




//ERROR Handle on false connection
if($DataBaseConnection == false){
    echo "<script> console.log('Could not Connect to database'); alert('Could NOT Connect to DataBase')</script>";
    $Logger->Logg("Failed to connect to database...");
}

?>