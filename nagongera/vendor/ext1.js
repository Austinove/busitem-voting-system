$(document).ready(function() {
	var start = $('#hidde').html();
	if (start === 'start') {
		$('#countdown').countdown({ date: '28 September 2017 18:56:00' });
		$('#hide').show();
		$('#show').show();
	}
	

});