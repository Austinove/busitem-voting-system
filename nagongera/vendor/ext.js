$(document).ready(function() {
	var start = $('#hidden').html();
	if (start === 'Start time please') {
		$('#countdown').countdown({ date: '30 September 2017 20:22:30' });
	}
	

});