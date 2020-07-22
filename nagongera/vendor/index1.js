$(document).ready(function() {
	
			var stop = $('#stop').html();
		if (stop == 'stop') {
		$('#sign').hide();
		$('#sign1').show();
		} else {
		$('#sign').show();
		$('#sign1').show();
		}
	// alert('working');
	$('#date').datepiker();

	var start = $('#hide').html();
	alert (start);
	if (start === 'start') {
		$('#countdown').countdown({ date: '1 October 2017 21:59:00' });
		// $('#hide').show();
		// $('#show').show();

	}

	

});