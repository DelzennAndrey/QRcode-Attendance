<?php
    include_once "../database/connection.php";

$sql = "SELECT * FROM attendance_event";
$event = $connection->query($sql);
?>