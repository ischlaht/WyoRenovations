<?php
include_once('../controls/Config.php');
$DIR = $GLOBALS['portfolioDIR'];
$J_DIR = $GLOBALS['jsonGalleryFiles'];
$allowed = $GLOBALS['portfolioAllowed'];
$uploadError = array();

if(isset($_POST['uploadPhoto'])){
    $file = $_FILES['photoUpload'];
    $new_name = $_POST['photoName'];
    $file_name = $file['name'];
    $file_size = $file['size'];
    $file_tmp = $file['tmp_name'];
    $file_type= $file['type'];
        if(empty($file_name)){
            array_push($uploadError, "Empty file.");
            echo "<script>alert('Please select a file to upload.')</script>";
        }
        else{
            $extText = explode('.', $file_name);
            
            $info = pathinfo($file_name);
            $ext = $info['extension']; //Get the extension of the file.
            
            $file_name_check = $DIR.basename($DIR.$new_name.".".$ext);
            
                if(isset($_COOKIE['Admin']) || isset($_SESSION['Admin'])){
                    if($_COOKIE['Admin'] == "TRUE" || $_SESSION['Admin'] == "TRUE"){
                        
                        if($file_size > 1073741824*3){
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
                                $img = new stdClass();
                                $img->image = $new_name.".".$ext;
                                $img->name = $new_name;
                                $img->comment = "Blank for now";
                                $myobj = json_encode($img);
                                        //Insert json object into folder with json file.
                                    $writer = fopen($J_DIR.$new_name.".json", "w+");
                                    fwrite($writer, $myobj);
// echo $myobj;
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
}


if(isset($_GET['FetchImages'])){
    $Scanner = scandir($J_DIR);
        foreach($Scanner as $File){
            $fetchedFile = @file_get_contents($J_DIR.$File, true);
            $Data = json_decode($fetchedFile, true);
            $Image = $Data['image'];
            $Name = $Data['name'];
            $Comment = $Data['comment'];
            $sendData = array('image'=>$Image, 'name'=>$Name, 'comment'=>$Comment);
            $dataArray[] = $sendData;
        }
        echo json_encode($dataArray);
}


if(isset($_GET['DeleteImage'])){
    if($_COOKIE['Admin'] == "TRUE" || $_SESSION['Admin']== "TRUE"){
        $DeleteFile = $_POST['myJFile'];
        $DeleteImage = $_POST['myImage'];
            unlink($J_DIR.$DeleteFile.".json");
            unlink($DIR.$DeleteImage);            
            
    }
    else{
        echo "Must be an Admin to access this function.";
    }
    
}



// if(isset($_GET['FetchImages'])){
//     $images = glob($j_DIR. "*");
//     // $images = scandir("./gallery.images/");
//     $IMG =  array();
//     $data = array();
//     // $curimg= array();
//         foreach($images as $curimg){
//             // echo "<input type='button' name"
//             // echo $curimg;
//             // $IMG[] = $curimg;
//             // $obj = $curimg;
//             // $curimg;
//             echo $curimg;
//         }
// }
?>