$(document).ready(function() {

		var stop = $('#stop').html();
		if (stop == 'stop') {
		$('#log_show').hide();
		$('#timeout').show();
		} else {
		$('#log_show').show();
		$('#timeout').hide();
		}

		//$('#button').click(function() {
			var dates = $('#dates').html();
			var time = $('#time').html();
			// alert(dates+time);
				var start = $('#hide').html();
				alert (start);
			if (start === 'start') {
				$('#countdown').countdown({ date: dates+time });
			}	
});