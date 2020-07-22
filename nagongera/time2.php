<?php
session_start();
if (isset($_SESSION['start'])) {
	$future = 1505304600;
	$current = time();
	echo $difference= $future-$current;
		$login = '';
		$admin = '';
		$results='';
	if ($difference<=0) {
		$login = 'no';
		$admin = 'yes';
		$results='yes';
	}else{
		$login = 'yes';
		$admin = 'no';
		$results='no';
	}


}else{
		$login = '';
		$admin = '';
		$results='';
		echo $_SESSION['start'];
	// header('location: time.php');
}





?>

<form action="time2.php" method="POST">
<?php
if ($login=='yes') {
	echo '<input type="submit" name="login" value="login">';
}elseif ($admin=='yes') {
	echo '<input type="submit" name="admin" value="admin">';
}
if ($results=='yes') {
	echo '<input type="submit" name="results" value="results">';
}

?>

</form>