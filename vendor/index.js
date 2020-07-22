$(document).ready(function() {


		//$('#button').click(function() {
			var dates = $('#dates').html();
			var time = $('#time').html();
			//alert(dates+time);
				var start = $('#hide').html();
				//alert (start);
			if (start === 'start') {
				$('#countdown').countdown({ date: dates+time });
			}	
});