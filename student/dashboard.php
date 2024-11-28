<?php
include_once"../components/header.html";
session_start();    
?>

<?php include_once "../components/studentSideBar.php"?>

    <div class="w-80 p-5 border shadow-2xl rounded-2xl m-auto mt-20 text-center bg-white " id="qrcode">
        <img class="h-80" src="../qrcode/<?php echo $_SESSION['log'];?>.png" alt="">
    </div>

<?php
include_once"../components/footer.html";
?>