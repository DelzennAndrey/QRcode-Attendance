<?php
include"../components/header.html";
include"../model/listAttendance.php";
session_start();
?>

<?php include_once "../components/studentSideBar.php"?>

<?php foreach($result as $data){
    if($_SESSION['log'] == $data['student_id']){?>

        <div class="ml-72 mt-5 bg-white flex items-center justify-center gap-5 font-semibold font-mono border w-7/12 p-10 rounded-xl shadow-2xl">
            <div class="grid gap-3">
                <p class="text-xl"> <?php echo $data['event_name']?> </p>
                <div class="flex gap-10">
                    <p><?php echo $data['date']?></p>
                    <p><?php echo $data['time']?></p>
                </div>
               
                <p><?php echo $data['description']?></p>
            </div>   

            <div class="flex gap-10 border p-8 shadow-inner bg-gray-50 rounded-2xl w-auto">
                <div>
                    <p class="text-center mb-2">IN</p>
                    <div class="shadow-inner bg-gray-200 rounded-xl p-5">
                        <p><?php if(isset($data['in'])){
                             echo '<p class="text-lime-700">'; echo $data["in"]; '</p>';
                            }else{ 
                                echo '<p class="text-red-600">Not Checked</p>';
                                }?></p>
                    </div>
                </div>
                <div>
                    <p class="text-center mb-2">OUT</p>
                    <div class="shadow-inner bg-gray-200 p-5 rounded-xl">
                        <?php if(isset($data['out'])){
                           echo '<p class="text-lime-700">'; echo $data["in"]; '</p>';
                            }else{
                                 echo '<p class="text-red-600">Not Checked</p>';
                                }?>         
                    </div>
                </div>
            </div>            
        </div>


<?php }}?>



<?php
include_once"../components/footer.html";
?>