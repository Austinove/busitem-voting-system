<?php
$char = str_shuffle("AbySUt");
$mark="!@#$%";
$gr=rand(100, 999);
 $token="THE TOKEN IS ".$char.$gr;
if (isset($_POST['token'])) {
	echo "<label>".$token."</label>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>my count</title>
</head>
<body>
<form action="tocken.php" method="POST">
<h2>Hi how are you</h2>
<input type="text" name="name">
<input type="text" name="password">
<input type="submit" name="token">

</form>
</body>
</html>
