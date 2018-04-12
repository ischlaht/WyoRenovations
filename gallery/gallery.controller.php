<?php
include_once('../controls/Config.php');
$DIR = $GLOBALS['portfolioDIR'];
$allowed = $GLOBALS['portfolioAllowed'];
$uploadError = array();

if(isset($_POST['uploadPhoto'])){
    $file = $_FILES['photoUpload'];
    $new_name = $_POST['photoName'];
    $file_name = $file['name'];
    $file_size = $file['size'];
    $file_tmp = $file['tmp_name'];
    $file_type= $file['type'];

    $extText = explode('.', $file_name);
    
    $info = pathinfo($file_name);
    $ext = $info['extension']; // get the extension of the file
    
    $file_name_check = $DIR.basename($DIR.$new_name.".".$ext);
    
        if(isset($_COOKIE['Admin']) || isset($_SESSION['Admin'])){
            if($_COOKIE['Admin'] == "TRUE" || $_SESSION['Admin'] == "TRUE"){
                if(empty($file_name)){
                    array_push($uploadError, "Empty file.");
                    echo "<script>alert('Please select a file to upload.')</script>";
                }
                elseif($file_size > 1073741824*3){
                    array_push($uploadError, "File to large.");
                    echo "<script>alert('Photo size must be smaller then 3 GB!')</script>";
                }
                elseif(empty($_POST['photoName'])){
                    array_push($uploadError, "File needs a name.");
                    echo "<script>alert('Please insert photo name.')</script>";
                }
                elseif(file_exists($file_name_check)){
                    array_push($uploadError, "Filename already exists.");
                    echo "<script>alert('File name already exists. Please choose another.')</script>";
                }
                elseif(!in_array(strtolower(end($extText)), $allowed)){
                    array_push($uploadError, "File type not allowed");
                    echo "<script>alert('File type not allowed')</script>"; 
                }
                elseif(count($uploadError) == 0){
                    if(move_uploaded_file($file_tmp, $DIR.$new_name.".".$ext)){
                        echo "<script>alert('File inserted')</script>"; 
                    }
                    else{
                        echo "<script>alert('Failed to upload photo.')</script>";
                    }
                }
            }
            else{
                echo "<script>alert('Must be an admin!')</script>";
                
            }
        }
        else{
            echo "<script>alert('Please login to insert new photos')</script>";
            
        }
}
?>