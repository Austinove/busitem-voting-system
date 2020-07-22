
$(document).ready(function() {
	$('#passwordsignup').focusin(function(){
		if ($('#passwordsignup').val() === '') {
			$('#span').text('');
		}
	})
.keyup(function(){
		 if ($('#passwordsignup').val().length == 8||$('#passwordsignup').val().length > 8) {
			$('#span').text('');
		} else {
			$('#span').text('Atleast 8 characters are needed');
		}

	});



$('#passwordsignup_confirm').focusin(function(){
		if ($('#passwordsignup_confirm').val() === '') {
			$('#span_p').text('');
		}
	})
.keyup(function(){
		 if ($('#passwordsignup_confirm').val() == $('#passwordsignup').val()) {
			$('#span_p').text('');
		 } 
		else {
			$('#span_p').text('passwords don\'t match');
		}

	});


$('#regsignup').focusin(function(){
	$('#span_r').text('BU/UP/20__/0000 Or BU/UG/20__/0000');
		// if ($('#regsignup').val() === '') {
		// 	$('#span_p').text('');
		// }
	})
.keyup(function(){
		 if ($('#regsignup').val().length < 12) {
			$('#span_r').text('BU/UP/20__/0000 Or BU/UG/20__/0000');
		 } 
		else {
			$('#span_r').text('');
		}

	});

$('#emailsignup').focusin(function(){
	$('#span_e').text('Write a Valid Email');
		// if ($('#regsignup').val() === '') {
		// 	$('#span_p').text('');
		// }
	})
.keyup(function(){
		 if ($('#emailsignup').val().length < 14) {
			$('#span_e').text('Write a Valid Email');
		 } 
		else {
			$('#span_e').text('');
		}

	}).blur(function(){
		$('#span_e').text('');
	});

});