<?php 
    include_once"../database/connection.php";

        $id = $_GET['id'];

    $s_attend_sql = "DELETE FROM students_attendance WHERE `event_id` = '$id'";
    $s_attend = mysqli_query($connection, $s_attend_sql);

    $event_sql = "DELETE FROM attendance_event WHERE id = '$id'";
    $event = mysqli_query($connection, $event_sql);
    

    

    header("location: ../admin/dashboard.php");

?>