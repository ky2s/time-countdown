<?php
date_default_timezone_set('Asia/Jakarta');

//now
$now = time();

//event
$hour = 10;
$minute =12;
$second =0;
$month =date('m');
$day= date('d');
$year =date('Y');
        
$evant = mktime($hour, $minute, $second, $month, $day, $year);

//countdown
$countdown = round(($evant - $now));

echo "Date : ". date('d-m-Y') .'<br>';
echo "Time : ". time() .'<br>';
echo "Now : ". $now.'<br>';
echo "Event : ". $evant.'<br>';
print_r($countdown);

?>
<html>
    <head>
        <script type="text/javascript">
            var secondLeft = <?= $countdown ?>
            
            if(secondLeft <= 0){
                //alert('Time Out!');
            }
            //function calltimer(){
              //  document.getElementById("time").innerHTML = secondLeft -= 1;
                //setTimeout(calltimer, 1000);
            //}
        </script>
    </head>
    
    <body onload="calltimer()">
        <div id="time">waktu</div>
        <a href="./fuck.php">link</a>
    </body>
</html>