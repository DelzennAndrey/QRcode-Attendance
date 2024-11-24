<?php
    include_once "../database/connection.php";

$sql = "SELECT * FROM student";
$student = $connection->query($sql);

?>