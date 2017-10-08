<?php
    session_start();
    require_once('validate.php');
    
    $image = $_POST['file_upload'];
    
    if (validate != true) {
        die('Could not connect to the upload database. Please contact an administrator.');
    }
    
    //setting up to upload image
    $target_dir = "memes/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    
    //Check if image file is a actual image or other file type instead
    // if(isset($_POST["submit"])) {
    //     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    //     if($check !== false) {
    //         echo "File is an image - " . $check["mime"] . ".";
    //         $uploadOk = 1;
    //     } else {
    //         echo "File is not an image.";
    //         $uploadOk = 0;
    //     }
    // }
    
    // //if no image was submitted
    // else {
    //     echo '<h1>You did not submit a meme image.</h1>';
    //     echo '<h1>Returning to main screen in five seconds...</h1>';
    //     header( "refresh:5;url=../index.html" );
    //     die();
    // }
    
    $query = mysql_query("INSERT INTO User (id, url, dateAdded) VALUES ('$user_id', '$url', now())");
    
    //if the query succeeds
    if ($query) {
        //
    }
?>