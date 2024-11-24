<?php
include_once "../html/header.php";
?>

<form action="../model/addAttendance.php" method="POST">
    <h1>ADD AVENT</h1>
    <input type="text" name="event_name" placeholder="Name" required>
    <input type="date" name="date" required>
    <button type="submit">ADD</button>
</form>

<?php
include_once "../html/footer.php";
?>