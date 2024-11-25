<?php
include_once"../html/header.html";
session_start();    
?>

    <a href="viewAttendance.php">viewAttendance</a>
    <div id="qrcode">
        <img src="../qrcode/<?php echo $_SESSION['log'];?>.png" alt="">
    </div>

    
   

<?php
include_once"../html/footer.html";
?>