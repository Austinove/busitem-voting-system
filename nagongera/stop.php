<?php  
require 'connect.php';
if (isset($_POST['stop'])) {
	$string = $_POST['stop'];
	$sql = "INSERT INTO stop (num, txt) VALUES ('1', '$string') ";
	if(mysqli_query($connect, $sql)) {
		echo "yess";
	} else {
		echo "no";
	}
}



?>