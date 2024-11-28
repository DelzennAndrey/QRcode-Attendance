<p?php
include_once "../components/header.html";
?>

<?php include_once "../components/adminSideBar.php"?>

<!-- Modal toggle -->
<button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class=" block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
  ADD
</button>

    <?php 
    include_once "../model/listEvent.php"; 
    foreach($event as $data):?>

    <div class="flex items-center justify-center gap-10 mb-10">
        <div class="flex items-center justify-between gap-5 font-semibold font-mono border w-6/12 p-10 rounded-xl shadow-2xl">
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
                        <button class="bg-red-500 p-2 text-white rounded-lg" onclick="window.location.href = 'camera.php?stamp=in&event=<?php echo $data['id']?>'">Check</button>
                    </div>
                </div>
                
                <div>
                        <p class="text-center mb-2">OUT</p>
                    <div class="shadow-inner bg-gray-200 p-5 rounded-xl">
                        <button class="bg-red-500 text-white p-2 rounded-lg" onclick="window.location.href = 'camera.php?stamp=out&event=<?php echo $data['id']?>'">Check</button>
                    </div>
                </div>
            </div>            
        </div>
        <a href="../model/deleteAttendance.php?id=<?php echo $data['id']?>" class="bg-red-600 rounded-lg text-white p-2"><button>Delete</button></a>
    </div>

    <?php endforeach;?>
   
<!-- Main modal -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Add Attendance Event
                </h3>
                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="../model/addAttendance.php" method="POST">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Event Name</label>
                        <input type="text" name="event_name" id="event_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Name" required />
                    </div>
                    <div>
                        <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                        <input type="date" name="date" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                    </div>
                    <div>
                        <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Time</label>
                        <input type="text" placeholder="hours/minutes AM/PM" name="time" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                    </div>
                    <div>
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Details</label>
                        <textarea name="description" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required ></textarea>
                    </div>
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">ADD</button>
                </form>
            </div>
        </div>
    </div>
</div> 

    
<?php
include_once "../components/footer.html";
?>