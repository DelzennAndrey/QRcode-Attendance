<?php
  include_once "../database/connection.php";
  session_start();
  $username = $_POST['username'];
  $password = $_POST['password'];

  $admin = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
  $admin_r = mysqli_query($connection, $admin);

  $student = "SELECT * FROM student WHERE student_id = '$username' AND password = '$password'";
  $student_r = mysqli_query($connection, $student);

  if($admin_r->num_rows > 0){
    header("location: ../admin/dashboard.php");
  }else if($student_r->num_rows > 0) {
    $_SESSION['log'] = $_POST['username'];
    header("location: ../student/viewAttendance.php");
  }
  else{
    header("location: ../index.php");
  }

?>