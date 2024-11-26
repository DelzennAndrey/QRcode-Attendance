<?php
include_once"../html/header.html";
session_start();    
?>

<?php include_once "../html/studentSideBar.php"?>

    <div class="flex justify-center items-center h-screen" id="qrcode">
        <img class="h-80" src="../qrcode/<?php echo $_SESSION['log'];?>.png" alt="">
    </div>

<?php
include_once"../html/footer.html";
?>