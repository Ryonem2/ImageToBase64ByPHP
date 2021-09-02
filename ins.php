<?php

require('dbconnect.php');

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


//?Post Single File
$tmp_name = $_FILES["avatar"]["tmp_name"][0]; //Create temp path

$type = pathinfo($tmp_name, PATHINFO_EXTENSION);
$data = file_get_contents($tmp_name);
// echo $data;
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);


//save data to database
mysql_query("SET NAMES UTF8");
$sql = "INSERT INTO testt (NAME,SERNAME,SIG) VALUES ('aaa','aaa',$base64)";

$result = mysqli_query($connect,$sql); //save data

if($result) {
    echo "SAVE DONE";
} else {
    mysqli_error($connect);
}
?>