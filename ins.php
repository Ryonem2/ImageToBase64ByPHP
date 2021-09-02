<?php

//?POST Multifile

// foreach ($_FILES["avatar"]["error"] as $key => $error) {
    //     if ($error == UPLOAD_ERR_OK) {
        //         $tmp_name = $_FILES["avatar"]["tmp_name"][$key];
        
        //         $type = pathinfo($tmp_name, PATHINFO_EXTENSION);
        //         $data = file_get_contents($tmp_name);
        //         $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        
        //     }
        // }
        // echo $base64;
        // echo $tmp_name;
        // echo $type;
        // echo $base64;
        
require('dbconnect.php');


//?Post Single File
// print_r($_FILES["avatar"]);
$tmp_name = $_FILES["avatar"]["tmp_name"]; //stored path
$name = $_FILES["avatar"]["name"]; //stored file name
$t = explode( '.', $name ); // split name and type ( image.jpg => Array( [0]->image, [1]->jpg ))
$type = end($t); //stored late array of $t

// Create temp path
// $type = pathinfo($tmp_name, PATHINFO_EXTENSION);
$data = file_get_contents($tmp_name);
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
// echo $base64;

// save data to database
$sql = "INSERT INTO testt (NAME,SERNAME,SIG) VALUES ('aaa','aaa','$base64')";

$result = mysqli_query($connect,$sql); //save data

// echo $result;

if($result) {
    echo "SAVE DONE";
    // header("location:http://localhost/ImageToBase64ByPHP/test.html");
} else {
    mysqli_error($connect);
}


?>