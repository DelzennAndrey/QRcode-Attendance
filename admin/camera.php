<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../node_modules/html5-qrcode/html5-qrcode.min.js"></script>

    <style>
        #reader{
            width: 500px;
        }
    </style>
</head>
<body>
    <a href="dashboard.php"><button>BACK</button></a>
    <div id="reader"></div>

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
</body>
</html>