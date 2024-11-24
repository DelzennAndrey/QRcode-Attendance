<?php
$host = "localhost"; 
$username = "root";
$password = "";
$dbname = "qrcode_attendance";

$connection = new mysqli($host, $username, $password, $dbname);
if($connection->connect_error){
    die('Connection error.' . $connection->connect_error);
}else{
    echo '';
}
?>