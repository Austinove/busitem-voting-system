$(document).ready(function() {

	$('#start').click(function() {
		var string = 'start';
		var url = 'index.php';
		
		$.get('r.php', { string: string }, function(data) {

			alert(data);
		});
		window.location = url;

	});
});