<?php  
require 'connect.php';
// if (isset($_POST['vote'])) {
// 	$string = $_POST['vote'];
// 	$sql = "INSERT INTO all_guild (name, count) VALUES ('$string', '1') ";
// 	if(mysqli_query($connect, $sql)) {
// 		echo "yess";
// 	} else {
// 		echo "no";
// 	}
// }
$counter =" SELECT * FROM guildd";
if($vie=mysqli_query($connect, $counter)) {
while($roww = mysqli_fetch_assoc($vie)){
echo $roww['name'].'<br> busitema<br>';
}}


?>
<?php
if ($connect = mysqli_connect("localhost","root","bryan","nagongera")) {

} else {
	die("Database not found!!!");
}
	
// if (isset($_POST['vote'])) {
// 	$string = $_POST['vote'];
// 	$sql = "INSERT INTO all_guild (name, count) VALUES ('$string', '1') ";
// 	if(mysqli_query($connect, $sql)) {
// 		echo "yess";
// 	} else {
// 		echo "no";
// 	}
// }

$counter =" SELECT * FROM chairr";
echo "nagongera<br>";
if($vie=mysqli_query($connect, $counter)) {
while($roww = mysqli_fetch_assoc($vie)){
echo $roww['name'].'<br>nagongera';
}}
echo "<br>test<br>";
$counter =" SELECT * FROM malee";
echo "nagongera<br>";
if($vie=mysqli_query($connect, $counter)) {
while($roww = mysqli_fetch_assoc($vie)){
echo $roww['name'].'<br>nagongera<br>';
}}


?>