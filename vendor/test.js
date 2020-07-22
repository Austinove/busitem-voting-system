$(document).ready(function() {


		var stop = $('#stop').html();
		if (stop == 'stop') {
		$('#hide').hide();
		$('#show').show();
		} else {
		$('#hide').show();
		$('#show').show();
		}

		$('#list').change(function(){
			var month = $('#list').val();
			$('#p').html(month);			
		});
		$('#list1').change(function(){
			var dates = $('#list1').val();
			$('#p1').html(dates);
		});
		$('#list2').change(function(){
			var year = $('#list2').val();
			$('#p2').html(year);
		});


		$('#listt').change(function(){
			var hour = $('#listt').val();
			$('#pt').html(hour);			
		});
		$('#listt1').change(function(){
			var min = $('#listt1').val();
			$('#pt1').html(min);
		});


		$('#btn').click(function(){

			var a = $('#p').html();
			var b = $('#p1').html();
			var c = $('#p2').html();
			var dates = a+' '+b+' '+c;
			// alert(allll);
			var hr = $('#pt').html();
			var min = $('#pt1').html();
			var time = ' '+hr+':'+min+':00';
			// alert(time);

			$.post('date.php', { stop:stop, time:time, dates:dates }, function(data){
				$('#feed').text(data);
			})

		});

		//$('#button').click(function() {
			var dates = $('#dates').html();
			var time = $('#time').html();

			var start = $('#hidde').html();
			if (start === 'start') {
				$('#countdown').countdown({ date: dates+time });
				// $('#hide').show();
				// $('#show').show();

			}	

		//});
			// var start = $('#hidde').html();
			// if (start === 'start') {
			// 	$('#countdown').countdown({ date: dates+time });
			// 	// $('#hide').show();
			// 	// $('#show').show();

			// }

	

});