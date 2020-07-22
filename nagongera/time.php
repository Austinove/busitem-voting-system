<?php
// $time = time();
// echo $time;
session_start();
if (isset($_POST['submit'])) {
	$bb='yess';
	$_SESSION['error'] = $bb;
	echo $_SESSION['error'];
	// header('location:time2.php');
}


// $future = 1505289790;
// $current = time();
// $_SESSION['time']=1;
// echo $difference= $future-$current;

// if ($difference<=0) {
// 	echo "time out";
// 	session_destroy();
// }else{
// 	header('location: time2.php');
// }



// $minutes=    floor($difference/60);
// $hours= floor($difference/3600);
// $r_minutes= floor(($difference-($hours*3600))/60);
// $r_seconds= floor($difference-($minutes*60));
// echo $hours.':'.$r_minutes.':'.$r_seconds;
// echo $r_minutes;


?>
<form action="time2.php" method="POST">
	<input type="submit" name="submit">
</form>