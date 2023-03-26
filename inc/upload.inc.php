<?php

if ($_FILES["fileToUpload"]["size"] != 0){
    require_once "functions.inc.php";
    require_once "db.inc.php";
    $file_name = $_FILES["fileToUpload"]["name"];
} else {
    header("location: ../index.php?error=noImg");
    exit();
};

if ( upload_img() ){
} else {
    header("location: ../index.php?error=imgUploadError");
    exit();
};

$img_decoded =  decode_img($file_name);
if ($img_decoded) {

}else{
    header("location: ../index.php?error=decodeError");
    exit();
};




if ($db_output = find_in_db($img_decoded,$conn)){
    //HERE SHOW OUTPUT FROM DB 0=info 1=bin_type
    $img_info ="<p>$db_output[0]</p>";
    $img_bin_type = "<p>$db_output[1]</p>";
    header("location: ../output.php?info=$img_info&bin_type=$img_bin_type&code=$img_decoded");
    exit();
}else{
    // INPUTING SYSTEM, PASS VARIABLE USING SESSION
    session_start();
    $_SESSION["info"] = [$img_decoded,$file_name];
    echo $img_decoded;
    header("location: ../input.php?");
    exit();
};




