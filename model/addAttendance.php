<?php
include_once "../database/connection.php";
include_once "../model/listStudent.php";
include_once "../model/listEvent.php";

    $event_name = $_POST['event_name'];
    $date = $_POST['date'];

    $event_query = "INSERT INTO attendance_event SET
        `event_name` = '$event_name',
        `date` = '$date'";

    $result = mysqli_query($connection, $event_query);

   
    $sql_select = " SELECT id
        FROM attendance_event
        WHERE id NOT IN (
            SELECT event_id
            FROM students_attendance
        )";

     $event = mysqli_query($connection, $sql_select);

    foreach($student as $students){
        $student_id = $students['student_id'];
        foreach($event as $events){
            $event_id = $events['id'];
                $query = "INSERT INTO students_attendance SET
                student_id = '$student_id',
                event_id = '$event_id'";
                $result = mysqli_query($connection, $query);
        }
    }

?>