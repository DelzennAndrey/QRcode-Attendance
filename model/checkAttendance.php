<?php
    include_once "../database/connection.php";
    
    $student_id = $_GET['student_id'];
    $stamp = $_GET['stamp'];
    $event_id = $_GET['event'];

    $query = "UPDATE students_attendance SET `$stamp` ='Checked' WHERE `student_id`='$student_id' AND `event_id` = '$event_id'";

$result = mysqli_query($connection, $query);
header("location: ../admin/camera.php?stamp=$stamp&event=$event_id");

?>