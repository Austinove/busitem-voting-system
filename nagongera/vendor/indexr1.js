$(document).ready(function() {
	
var dates = $('#dates').html();
var time = $('#time').html();
$('#countdown').countdown({ date: dates+time });

// //retriving data from the database

// // setInterval(function() {
// // 	$('#show_data').load('retrive.php')
// // }, 1000);
	

});