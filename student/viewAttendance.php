<?php
include"../html/header.html";
include"../model/listAttendance.php";
session_start();
?>

<?php include_once "../html/studentSideBar.php"?>

<div class="ml-72">

    <?php foreach($result as $data){
        if($_SESSION['log'] == $data['student_id']){?>
        <p>Student id: <?php echo $data['student_id']?></p>
        <p>Event id: <?php echo $data['event_id']?></p>
        <p>Event Name: <?php echo $data['event_name']?></p>
        <p>IN <?php echo $data['in']?></p>
        <p>OUT <?php echo $data['out']?></p>
    <?php }}?>
</div>


<?php
include_once"../html/footer.html";
?>