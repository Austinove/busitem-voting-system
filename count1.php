
<script type="text/javascript">
	function countDown(secs,elem) {
		var element = document.getElementById(elem);
		element.innerHTML="please wait for"+secs+"seconds";
		if (secs<1) {
			clearTimeout(timer);
			element.innerHTML='<h2>Countdown Complete!</h2>';
			element.innerHTML+='<a href="#"click here to now</a>';
			window.location = "div.php";

		}
		secs--;
		var timer = setTimeout('countDown('+secs+',"'+elem+'")', 1000);
	}
</script>
<form action="count1.php" method="POST">
<input type="submit" name="submit">
<div id="status"></div>
<?php
// session_start();

// if (!isset($_SESSION['my'])) {
// 	// echo "noooo";
// 	echo $_SESSION['my'];
// }elseif($_SESSION['my']==2) {

// 		echo $_SESSION['my'];
//<script type="text/javascript">countDown(10,"status");</script>';
// }else{
// 	echo "no session set";
// }
?>
<script type="text/javascript">countDown(10,"status");</script>
</form>