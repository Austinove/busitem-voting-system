<?php 
require 'connect.php';
$sql = "SELECT * FROM start_date";
$results = mysqli_query($connect, $sql);
while ($row = mysqli_fetch_assoc($results)) {
echo '<p id = "dates">'.$row['dates'].'</p>';
echo '<p id = "time">'.$row['strt_time'].'</p>';
}
?>