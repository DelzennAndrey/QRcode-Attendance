<?php include_once"../components/header.html"?>

    <a href="dashboard.php" class="bg-red-600 p-3 text-white rounded-lg m-5"><button class="mt-5">BACK</button></a>

    <div id="reader" style="width: 500px;" class="m-auto"></div>

    <script>
        let urlParams = new URLSearchParams(window.location.search);
        let stamp = urlParams.get('stamp');
        let event = urlParams.get('event');
        let qrCode = '';
        
          let scanner = new Html5QrcodeScanner("reader",{ 
                fps: 220, 
                qrbox: {
                    width: 300, 
                    height: 300
                }});
            scanner.render(onScanSuccess, onScanFailure);
     
        function onScanSuccess(result) {
            
            if(result !== qrCode){
                
                qrCode = result;

                 window.location.href = `../model/checkAttendance.php?student_id=${qrCode}&stamp=${stamp}&event=${event}`;
                 }
            }

          function onScanFailure(error) {
            
          }

    </script>
<?php include_once"../components/footer.html"?>