<?php
//save data to database

require('dbconnect.php');

$postData = file_get_contents('php://input');
$jsondata = json_decode($postData);
// echo "postData =".json_encode($jsondata->name,JSON_UNESCAPED_UNICODE);
    $data =  json_encode($jsondata->data);


// mysql_query("SET NAMES UTF8");
$sql = "INSERT INTO testt (NAME,SERNAME,SIG) VALUES ('aaa','aaa',$data)";


$result = mysqli_query($connect,$sql); //save data

if($result) {
    echo "SAVE DONE";
} else {
    mysqli_error($connect);
}
?>