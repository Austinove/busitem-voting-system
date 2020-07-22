<?php
require 'connect.php';
// session_start();
// $dur='';
// $res = mysqli_query($connect, "SELECT * FROM table1");
// while ($row=mysqli_fetch_array($res)) {
// 	$dur=$row['duration'];
// }
// $_SESSION['duration']=$dur;
// $_SESSION['stat_time']=date('Y-m-d H:i:s');
// $end_time=date('Y-m-d H:i:s', strtotime('+'.$_SESSION['duration'].'minutes', strtotime($_SESSION['stat_time'])));
// $_SESSION['end_time']=$end_time;

// $from_time1=date('Y-m-d H:i:s');
// $to_time1=$_SESSION['end_time'];

// $timefirst=strtotime($from_time1);
// $timesecond=strtotime($to_time1);
// $differenceinseconds=$timesecond-$timefirst;

// echo gmdate('H:i:s',$differenceinseconds);
$future = 1504859996;
$current = time();
$difference= $future-$current;
$minutes=    floor($difference/60);
$hours= floor($difference/3600);
$r_minutes= floor(($difference-($hours*3600))/60);
$r_seconds= floor($difference-($minutes*60));
echo $hours.':'.$r_minutes.':'.$r_seconds;
echo $r_minutes;

 ?>
 <script type="text/javascript">
 // function Countdown() {

 // 	setTimeout(function(){
 // 		$.post('count.php', function(data){
 // 				$('#response').html(data);
 // 		});

 // 		Countdown();
 // 	}, 1000);
 // }
 // $('document').ready(function(){
 // 	Countdown();
 // });
 setInterval(function() {
 	var xmlhttp = new XMLHttpRequest();
 	xmlhttp.open('GET','count.php',false);
 	xmlhttp.send(null);
 	document.getElementById('response').innerHTML=xmlhttp.responseText;
 }, 1000);
 </script>
<div id="response"></div>