<?php

require('ins.php');

// save data to database
$sql = "INSERT INTO testt (NAME,SERNAME,SIG) VALUES ('aaa','aaa','$base64')";

$result = mysqli_query($connect,$sql); //save data

echo $result;
if($result) {
    echo "SAVE DONE";
    // header("location:http://localhost/ImageToBase64ByPHP/test.html");
} else {
    mysqli_error($connect);
}

?>