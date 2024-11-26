<!-- component -->
<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    </head>
    <body class="bg-white">    

        
<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
 </button>
 
 <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
       <a class=" flex items-center p-5 text-gray-900 rounded-lg dark:text-white group">
          <img src="../img/user.png" class="h-6 me-3 sm:h-7 text-center"/>
          <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-dark">Welcome</span>    
       </a>
       <div>
         <p class="m-3 self-center text-xl font-semibold whitespace-nowrap dark:text-dark"><?php echo $_SESSION['student_name'];?></p>
         <p class="m-3 self-center text-xl font-semibold whitespace-nowrap dark:text-dark"><?php echo $_SESSION['course'];?></p>
         <p class="m-3 self-center text-xl font-semibold whitespace-nowrap dark:text-dark"><?php echo $_SESSION['log'];?></p> 
       </div>
       <ul class="space-y-2 font-medium">
            <li>
                <a href="../student/dashboard.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <img class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" src="../img/qr-code.png" alt="">
                <span class="ms-3 text-xl">Home</span>
                </a>
            </li>
          <li>
             <a href="../student/viewAttendance.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <img class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" src="../img/attendant-list.png" alt="">
                <span class="ms-3 text-xl">Attendance</span>
             </a>
          </li>
          <li>
             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <img class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" src="../img/logout.png" alt="">
                <span class="flex-1 ms-3 whitespace-nowrap text-xl">Log Out</span>
             </a>
          </li>
       </ul>
    </div>
 </aside>
 
 
    </body>
<html>