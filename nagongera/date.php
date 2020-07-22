<?php  
require 'connect.php';
session_start();
// if (isset($_POST['stop'])) {
// 	$string = $_POST['stop'];
// 	$sql = "INSERT INTO stop (num, txt) VALUES ('1', '$string') ";
// 	if(mysqli_query($connect, $sql)) {
// 		echo "yess";
// 	} else {
// 		echo "no";
// 	}
// } else
if (isset($_POST['time'])&&isset($_POST['dates'])) {

	$time = $_POST['time'];
	$dates = $_POST['dates'];
	$sql = "UPDATE start_date SET dates = '$dates', strt_time = '$time' WHERE num = '1'";
	if(mysqli_query($connect, $sql)) {
		$sqld = "DELETE FROM stop WHERE num = '1'";
	  	mysqli_query($connect, $sqld);
		$sql = "SELECT * FROM start_date";
	$results = mysqli_query($connect, $sql);
	while ($row = mysqli_fetch_assoc($results)) {
		echo $row['dates'];
		echo $row['strt_time'];
	}
	unset($_SESSION['username_a']);
	} else {
		echo "dates not added";
	}
	
} else {
	header('location:index.php');
}




?>