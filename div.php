<?php
session_start();
session_destroy();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>div</title>
	<style>
		*{
			box-sizing: border-box;
			padding: 0;
			margin: 0;
		}
		body {
			background-color: gray;
		}
		#box {
			background-color: blue;
			padding: 10px;
			border: 5px solid black;
			width: 300px;
			height: 100px;
			overflow: auto;
			margin-top: 50px;
		}
		#content {
			background-color: #90EE90;//green
		}
		h1 {
			margin-bottom: 30px;
		}
	</style>
</head>
<body>

<h1>hello Bryan</h1>
<div id="box">
	<div id="content">lorem ispum dolor sit amet, consectetur adipisicing elit. auhfeuia audyehcnsia audyfeyiuchlorem ispum dolor sit amet, consectetur adipisicing elit. auhfeuia audyehcnsia audyfeyiuchlorem ispum dolor sit amet, consectetur adipisicing elit. auhfeuia audyehcnsia audyfeyiuch
	</div>
</div>


</body>
</html>