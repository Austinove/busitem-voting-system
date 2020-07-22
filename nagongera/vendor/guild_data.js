$(document).ready(function() {
	$('#accept').click(function() {
		var vote = $('#send').html();
		$.post('guild_votes.php', { vote:vote }, function(data){
		$('#feedback').text(data);
		})
		setInterval(function() {
		$('#show').load('guild_votes.php')
		}, 3000);

	});
});