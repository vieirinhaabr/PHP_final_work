<?php

$filename = $_FILES['file']['name'];

$filesize = $_FILES['file']['size'];

$location = "upload/".$filename;

$return_arr = array();

if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
    $src = "default.png";

    if(is_array(getimagesize($location))){
        $src = $location;
    }
    $return_arr = array("name" => $filename,"size" => $filesize, "src"=> $src);
}

echo json_encode($return_arr);
?>