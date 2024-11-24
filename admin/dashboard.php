<?php
include_once "../html/header.html";
include_once "../model/listEvent.php";
?>

<div>
    
    <?php foreach($event as $data):?>
        <p>Event Name: <?php echo $data['event_name']?></p>
        <p>Date: <?php echo $data['date']?></p>
        <button onclick="window.location.href = 'camera.php?stamp=in&event=<?php echo $data['id']?>'">IN</button>
        <button onclick="window.location.href = 'camera.php?stamp=out&event=<?php echo $data['id']?>'">OUT</button>
    <?php endforeach;?>
</div>
   
    
<?php
include_once "../html/footer.html";
?>