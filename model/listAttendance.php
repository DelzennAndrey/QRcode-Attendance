<?php
include_once"../database/connection.php";

$query = "SELECT * FROM attendance_event ev JOIN students_attendance a ON ev.id = a.event_id";
$result = mysqli_query($connection,$query);


?>