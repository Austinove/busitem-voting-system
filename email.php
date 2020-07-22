<?php
if (isset($_POST['submit'])) {

// $to = $_POST['to'];
// $from = $_POST['from'];
// $subject = $_POST['sub'];
// $message = $_POST['text'];
// echo $to;
// echo "<br>";
// echo $from;
// echo "<br>";
// echo $subject."<br>";
// echo $message;


// $to = "georgeeiku14@gmail.com";
// $from = "bryanovicaustenove@gmail.com";
// $subject = 'This is our test email';
// $message = "This is a text message\nNew line...";
// $headers = "From: $from\n";
// $headers .="Reply-to: bryanovicaustenove@gmail.com\r\n";
// $headers .="Content-type: text/html\r\n";
// mail($to, $subject, $message, $headers);







require("class-Clockwork.php");
$apikey = '2044dee000bf9551eca8e7a63a6f7d621cf47632';
$clockwork = new Clockwork($apikey);
$message = array('to' => '256706263042','message' => 'This is what i was talking about');
$done = $clockwork->send($message);

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>This is our test</title>
</head>
<body>
<form action="index.php" method="POST">
	<input type="submit" name="submit" value="Send the mail">
	<label>TO</label>
	<input type="text" name="to">
	<label>FROM</label>
	<input type="text" name="from">
	<label>Subject</label>
	<input type="text" name="sub">
	<label>Enter Message</label>
	<textarea name="text"></textarea>
</form>

</body>
</html>
