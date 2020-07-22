<?php
session_start();
$view = $_SESSION['view'];
echo $view;
// if (isset($_POST['submit'])) {
// if (!empty($_POST['check1'])&&!empty($_POST['check2'])) {
// 	echo "yessss";
// } else {
// 	echo "nooooo";
// }
// 	}
 ?>
<!--  <form action="test2.php" method="POST">
 	
 <input type="checkbox" name="check1" value="one">
 <input type="checkbox" name="check2" value="two">
 <input type="submit" name="submit">

 </form> -->